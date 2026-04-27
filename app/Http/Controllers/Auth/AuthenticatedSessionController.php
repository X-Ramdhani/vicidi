<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        // Logika Pengecekan Email Verified
        // Kecuali untuk email admin@vidici.com
        if ($user->email !== 'admin@vidici.com' && is_null($user->email_verified_at)) {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->with('error', 'Akun Anda belum diverifikasi. Silakan cek email Anda.');
        }

        $roles = $user->roles->pluck('slug');

        // Tambahkan pesan sukses untuk SweetAlert
        session()->flash('success', 'Selamat Datang, ' . $user->name);

        if ($roles->contains('admin')) {
            return redirect()->intended('/admin/visitors');
        } 

        // if ($roles->contains('student')) {
        //     return redirect()->intended('/');
        // }

        return redirect()->intended(route('login'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
