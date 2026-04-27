<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - VIDICI</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F4F6F8;
            /* Soft background */
            overflow-x: hidden;
        }

        .sidebar-active {
            background-color: rgba(255, 255, 255, 0.05);
            border-left: 4px solid #8E97A4;
            /* Muted accent border */
        }

        .sidebar-transition {
            transition: all 0.3s ease-in-out;
        }

        /* Rotasi icon arrow saat dropdown terbuka */
        .dropdown-active i.fa-chevron-right {
            transform: rotate(90deg);
            transition: transform 0.2s;
        }

        .dropdown-container {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .dropdown-container.open {
            max-height: 250px;
        }
    </style>
    @stack('styles')
</head>

<body class="min-h-screen bg-[#F4F6F8]">

    <div id="sidebarOverlay" class="fixed inset-0 bg-black/60 z-40 hidden lg:hidden" onclick="toggleSidebar()"></div>

    <aside id="sidebar"
        class="sidebar-transition w-64 bg-[#2C333D] text-slate-200 flex flex-col fixed h-full z-50 -translate-x-full lg:translate-x-0 shadow-xl">
        <div class="p-6 flex items-center justify-between border-b border-white/5">
            <div id="sidebarLogo" class="flex items-center space-x-3 opacity-100 transition-opacity duration-300">
                <div class="bg-[#C5A059] p-2 rounded-lg text-[#2C333D]">
                    <i class="fas fa-shield-halved text-xl"></i>
                </div>
                <div>
                    <h1 class="font-bold leading-none tracking-tight text-lg text-white">VIDICI</h1>
                    <p class="text-[10px] text-slate-400 uppercase">Vidya Diginara Cipta</p>
                </div>
            </div>
            <button onclick="toggleSidebar()" class="text-slate-400 hover:text-white focus:outline-none">
                <i class="fas fa-bars text-xl hidden lg:block"></i>
                <i class="fas fa-times text-xl lg:hidden"></i>
            </button>
        </div>

        <nav class="flex-grow py-4 overflow-y-auto">
            <a href="{{ route('admin.visitors.index') }}"
                class="{{ request()->routeIs('admin.visitors.*') ? 'sidebar-active text-[#C5A059]' : 'text-slate-400' }} flex items-center px-6 py-3 text-sm hover:bg-white/5 transition hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-3 {{ request()->routeIs('admin.visitors.*') ? 'text-[#C5A059]' : 'text-slate-500' }}"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
                <span>Visitor</span>
            </a>

            <a href="{{ route('admin.chatbot.index') }}"
                class="{{ request()->routeIs('admin.chatbot.*') ? 'sidebar-active text-[#C5A059]' : 'text-slate-400' }} flex items-center px-6 py-3 text-sm hover:bg-white/5 transition hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-3 {{ request()->routeIs('admin.chatbot.*') ? 'text-[#C5A059]' : 'text-slate-500' }}"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                </svg>

                <span class="font-medium">Manajemen Chatbot</span>
            </a>
        </nav>

        <div class="p-4 border-t border-white/5 flex items-center justify-between bg-[#242A32]">
            <div class="flex items-center space-x-3 overflow-hidden">
                <div
                    class="w-8 h-8 flex-shrink-0 rounded-full bg-[#5A6777] flex items-center justify-center text-xs font-bold uppercase text-white">
                    {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                </div>
                <div class="text-[10px] truncate text-slate-400">{{ auth()->user()->email ?? 'admin@VIDICI.go.id' }}
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-slate-500 hover:text-white transition">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
        </div>
    </aside>

    <div id="mainContent" class="sidebar-transition flex-grow flex flex-col min-h-screen lg:ml-64">

        <header id="mobileHeader" class="bg-white shadow-sm border-b p-4 flex items-center lg:hidden shrink-0">
            <button onclick="toggleSidebar()" class="text-[#2C333D] p-2 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h2 class="ml-4 font-bold text-[#2C333D]">VIDICI</h2>
        </header>

        <header id="desktopHeader"
            class="bg-white shadow-sm border-b px-8 py-4 hidden lg:flex items-center sticky top-0 z-30 sidebar-transition shrink-0">
            <button id="desktopHamburger" onclick="toggleSidebar()"
                class="text-[#2C333D] p-2 focus:outline-none mr-4 hidden">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <h2 class="font-bold text-[#4A5568]">Vidya Diginara Cipta</h2>
        </header>

        <main class="p-4 md:p-6 lg:p-8 flex-grow">
            @yield('content')
        </main>

        @include('components.chatbot')

        <footer class="p-6 text-center text-[10px] text-gray-400 uppercase tracking-widest shrink-0">
            © 2026 Vidya Diginara Cipta
        </footer>
    </div>

    <script>
        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            const btn = document.getElementById('btn-' + id);

            dropdown.classList.toggle('open');
            btn.classList.toggle('dropdown-active');

            const icon = btn.querySelector('.fa-chevron-right');
            if (dropdown.classList.contains('open')) {
                icon.style.transform = 'rotate(90deg)';
            } else {
                icon.style.transform = 'rotate(0deg)';
            }
        }

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const overlay = document.getElementById('sidebarOverlay');
            const desktopHamburger = document.getElementById('desktopHamburger');
            const isDesktop = window.innerWidth >= 1024;

            if (isDesktop) {
                if (sidebar.classList.contains('lg:translate-x-0')) {
                    sidebar.classList.replace('lg:translate-x-0', 'lg:-translate-x-full');
                    mainContent.classList.replace('lg:ml-64', 'lg:ml-0');
                    desktopHamburger.classList.remove('hidden');
                } else {
                    sidebar.classList.replace('lg:-translate-x-full', 'lg:translate-x-0');
                    mainContent.classList.replace('lg:ml-0', 'lg:ml-64');
                    desktopHamburger.classList.add('hidden');
                }
            } else {
                if (sidebar.classList.contains('-translate-x-full')) {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');
                } else {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                }
            }
        }

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                document.getElementById('sidebarOverlay').classList.add('hidden');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
</body>

</html>
