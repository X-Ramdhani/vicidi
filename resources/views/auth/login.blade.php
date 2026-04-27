<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - VIDICI</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0a0a0a;
            color: #ffffff;
        }

        .auth-card {
            background: #111111;
            border: 1px solid #262626;
            position: relative;
        }

        .subtle-glow::after {
            content: "";
            position: absolute;
            inset: -1px;
            border-radius: inherit;
            padding: 1px;
            background: linear-gradient(to bottom right, #555, transparent, #333);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0.8;
            pointer-events: none;
            z-index: 10;
        }

        .input-auth {
            background: #1a1a1a;
            border: 1px solid #333333;
            color: #ffffff;
            transition: all 0.2s ease;
            position: relative;
            z-index: 20;
        }

        .input-auth:focus {
            border-color: #6366f1;
            background: #1e1e1e;
            outline: none;
        }

        .input-auth::placeholder {
            color: #737373;
        }

        .btn-primary {
            background: #ffffff;
            color: #000000;
            transition: all 0.2s ease;
            position: relative;
            z-index: 20;
        }

        .btn-primary:hover {
            background: #e5e5e5;
            transform: translateY(-1px);
        }

        /* Hover effect untuk tombol kembali */
        .back-link:hover svg {
            transform: translateX(-4px);
        }
    </style>
</head>

<body class="antialiased flex items-center justify-center min-h-screen p-6">

    <div class="fixed top-8 left-8 z-50">
        <a href="/"
            class="back-link flex items-center gap-2 text-neutral-500 hover:text-white transition-all font-medium text-sm group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-4 h-4 transition-transform">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            Back to Home
        </a>
    </div>

    <div class="w-full max-w-[400px]">
        <div class="mb-10 px-1">
            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center mb-6 shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" class="w-7 h-7">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold tracking-tight text-white">Sign in</h1>
            <p class="text-neutral-400 text-sm mt-2 font-medium">VIDICI Platform</p>
        </div>

        <div class="auth-card rounded-2xl p-8 subtle-glow shadow-2xl">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div class="space-y-2">
                    <label for="email" class="text-xs font-bold text-neutral-300 uppercase tracking-widest ml-1">
                        Email Address
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full input-auth px-4 py-3.5 rounded-xl text-sm font-medium"
                        placeholder="Masukkan email Anda">
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center ml-1">
                        <label for="password" class="text-xs font-bold text-neutral-300 uppercase tracking-widest">
                            Password
                        </label>
                        <a href="#"
                            class="text-xs text-neutral-400 hover:text-white transition-colors font-medium">Forgot?</a>
                    </div>
                    <input id="password" type="password" name="password" required
                        class="w-full input-auth px-4 py-3.5 rounded-xl text-sm font-medium" placeholder="*********">
                </div>

                <button type="submit" class="w-full py-4 rounded-xl btn-primary text-sm font-bold mt-2 shadow-xl">
                    Continue
                </button>
            </form>
        </div>

        <footer class="mt-12 text-center">
            <p class="text-[10px] text-neutral-500 uppercase tracking-[0.4em] font-bold">&copy; 2026 SECURED SYSTEM</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#111',
            color: '#fff',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        @if (session('error'))
            Toast.fire({
                icon: 'error',
                title: "{{ session('error') }}"
            });
        @endif

        @if (session('success'))
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            });
        @endif

        @if ($errors->any())
            Toast.fire({
                icon: 'error',
                title: "Email atau Password salah."
            });
        @endif
    </script>

</body>

</html>
