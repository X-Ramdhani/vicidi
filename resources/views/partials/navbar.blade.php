<nav class="fixed w-full z-50 top-0 border-b border-white/5 bg-zinc-950/80 backdrop-blur-md transition-all">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="{{ asset('logo_vidici.png') }}" alt="VIDICI Logo" class="h-8 w-auto object-contain">
            <div class="flex flex-col">
                <span class="font-bold text-base leading-none tracking-tight">Vidya Diginara Cipta</span>
                <span class="text-[9px] text-zinc-500 uppercase tracking-tighter leading-none mt-1">Innovate Collaborate</span>
            </div>
        </div>

        <div class="hidden lg:flex items-center gap-8 text-sm font-medium text-zinc-300 h-full">
            <a href="{{ route('home') }}" class="hover:text-cyan-400 transition h-full flex items-center">Beranda</a>

            <div class="mega-menu-container h-full flex items-center cursor-pointer">
                <div onclick="toggleMegaMenu('menu-layanan')"
                    class="flex items-center gap-1.5 hover:text-cyan-400 transition h-full select-none">
                    Layanan
                    <svg id="icon-menu-layanan"
                        class="mega-menu-icon w-4 h-4 text-zinc-500 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>

                <div id="menu-layanan"
                    class="mega-menu-content absolute top-20 left-0 w-full bg-zinc-950/95 backdrop-blur-2xl border-b border-white/10 shadow-2xl opacity-0 invisible transition-all duration-300 cursor-default">
                    <div class="max-w-7xl mx-auto px-6 py-10">
                        <div class="grid grid-cols-12 gap-10">
                            <div class="col-span-8 grid grid-cols-2 gap-8">
                                <div class="space-y-3">
                                    <h4
                                        class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest mb-4 border-b border-white/5 pb-2">
                                        Solusi Digital</h4>
                                    <a href="#services"
                                        class="block group/link p-2 -m-2 rounded-xl hover:bg-white/5 transition">
                                        <h5
                                            class="text-sm font-bold text-zinc-300 group-hover/link:text-cyan-400 transition">
                                            Managed Operations</h5>
                                        <p class="text-xs text-zinc-500 font-light mt-1">Dukungan operasional IT &
                                            pemantauan 24/7.</p>
                                    </a>
                                    <a href="#services"
                                        class="block group/link p-2 -m-2 rounded-xl hover:bg-white/5 transition">
                                        <h5
                                            class="text-sm font-bold text-zinc-300 group-hover/link:text-cyan-400 transition">
                                            Custom App Dev</h5>
                                        <p class="text-xs text-zinc-500 font-light mt-1">Pengembangan aplikasi Web &
                                            Mobile kustom presisi.</p>
                                    </a>
                                </div>
                                <div class="space-y-3">
                                    <h4
                                        class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest mb-4 border-b border-white/5 pb-2">
                                        Solusi Enterprise</h4>
                                    <a href="{{ route('erp') }}"
                                        class="block group/link p-2 -m-2 rounded-xl hover:bg-white/5 transition">
                                        <h5
                                            class="text-sm font-bold text-zinc-300 group-hover/link:text-fuchsia-400 transition">
                                            ERP Solutions (CORENETA)</h5>
                                        <p class="text-xs text-zinc-500 font-light mt-1">Platform manajemen resource
                                            terpadu untuk ISP.</p>
                                    </a>
                                    <a href="#services"
                                        class="block group/link p-2 -m-2 rounded-xl hover:bg-white/5 transition">
                                        <h5
                                            class="text-sm font-bold text-zinc-300 group-hover/link:text-fuchsia-400 transition">
                                            Banking Systems</h5>
                                        <p class="text-xs text-zinc-500 font-light mt-1">Sistem core banking & gateway
                                            pembayaran aman.</p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-span-4 border-l border-white/5 pl-10 relative">
                                <div
                                    class="absolute -top-10 -right-10 w-32 h-32 bg-cyan-500/10 blur-2xl rounded-full pointer-events-none">
                                </div>
                                <h4 class="text-[10px] font-bold text-cyan-500 uppercase tracking-widest mb-4">Sorotan
                                    Layanan</h4>
                                <a href="{{ route('erp') }}" class="block group/article cursor-pointer">
                                    <div
                                        class="w-full h-36 bg-zinc-900 rounded-xl mb-4 overflow-hidden relative shadow-lg">
                                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop"
                                            alt="CORENETA"
                                            class="w-full h-full object-cover group-hover/article:scale-105 transition duration-500">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent opacity-80">
                                        </div>
                                    </div>
                                    <h5
                                        class="text-sm font-bold text-white group-hover/article:text-cyan-400 transition leading-tight mb-2">
                                        Transformasi Operasional ISP dengan CORENETA</h5>
                                    <p class="text-xs text-zinc-400 font-light">Satu platform terpadu untuk menyatukan
                                        jaringan, pelanggan, dan bisnis Anda.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mega-menu-container h-full flex items-center cursor-pointer">
                <div onclick="toggleMegaMenu('menu-perusahaan')"
                    class="flex items-center gap-1.5 hover:text-cyan-400 transition h-full select-none">
                    Perusahaan
                    <svg id="icon-menu-perusahaan"
                        class="mega-menu-icon w-4 h-4 text-zinc-500 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>

                <div id="menu-perusahaan"
                    class="mega-menu-content absolute top-20 left-0 w-full bg-zinc-950/95 backdrop-blur-2xl border-b border-white/10 shadow-2xl opacity-0 invisible transition-all duration-300 cursor-default">
                    <div class="max-w-7xl mx-auto px-6 py-10">
                        <div class="grid grid-cols-12 gap-10">
                            <div class="col-span-8 grid grid-cols-2 gap-8">
                                <div class="space-y-3">
                                    <h4
                                        class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest mb-4 border-b border-white/5 pb-2">
                                        Tentang VIDICI</h4>
                                    <a href="#about"
                                        class="block group/link p-2 -m-2 rounded-xl hover:bg-white/5 transition">
                                        <h5
                                            class="text-sm font-bold text-zinc-300 group-hover/link:text-fuchsia-400 transition">
                                            Profil & Sejarah</h5>
                                        <p class="text-xs text-zinc-500 font-light mt-1">Kenali visi, misi, dan
                                            perjalanan perusahaan kami.</p>
                                    </a>
                                    <a href="#why-us"
                                        class="block group/link p-2 -m-2 rounded-xl hover:bg-white/5 transition">
                                        <h5
                                            class="text-sm font-bold text-zinc-300 group-hover/link:text-fuchsia-400 transition">
                                            Nilai & Keunggulan</h5>
                                        <p class="text-xs text-zinc-500 font-light mt-1">Mengapa ratusan klien
                                            mempercayai infrastrukturnya pada kami.</p>
                                    </a>
                                </div>
                                <div class="space-y-3">
                                    <h4
                                        class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest mb-4 border-b border-white/5 pb-2">
                                        Informasi Lainnya</h4>
                                    <a href="#career"
                                        class="block group/link p-2 -m-2 rounded-xl hover:bg-white/5 transition">
                                        <h5
                                            class="text-sm font-bold text-zinc-300 group-hover/link:text-cyan-400 transition">
                                            Karier & Magang</h5>
                                        <p class="text-xs text-zinc-500 font-light mt-1">Bergabung dan bangun masa depan
                                            digital bersama kami.</p>
                                    </a>
                                    <a href="#contact"
                                        class="block group/link p-2 -m-2 rounded-xl hover:bg-white/5 transition">
                                        <h5
                                            class="text-sm font-bold text-zinc-300 group-hover/link:text-cyan-400 transition">
                                            Hubungi Manajemen</h5>
                                        <p class="text-xs text-zinc-500 font-light mt-1">Alamat kantor, email, dan
                                            telepon (hunting).</p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-span-4 border-l border-white/5 pl-10 relative">
                                <div
                                    class="absolute -top-10 -right-10 w-32 h-32 bg-fuchsia-500/10 blur-2xl rounded-full pointer-events-none">
                                </div>
                                <h4 class="text-[10px] font-bold text-fuchsia-500 uppercase tracking-widest mb-4">Budaya
                                    Kerja</h4>
                                <a href="#career" class="block group/article cursor-pointer">
                                    <div
                                        class="w-full h-36 bg-zinc-900 rounded-xl mb-4 overflow-hidden relative shadow-lg">
                                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop"
                                            alt="Tim VIDICI"
                                            class="w-full h-full object-cover group-hover/article:scale-105 transition duration-500">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent opacity-80">
                                        </div>
                                    </div>
                                    <h5
                                        class="text-sm font-bold text-white group-hover/article:text-fuchsia-400 transition leading-tight mb-2">
                                        Talenta Yogyakarta & Malang</h5>
                                    <p class="text-xs text-zinc-400 font-light">Mengenal lebih dekat ekosistem tim
                                        engineer kami yang solid, tangkas, dan efisien.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#portfolio" class="hover:text-cyan-400 transition h-full flex items-center">Portofolio</a>
            <a href="#insights" class="hover:text-cyan-400 transition h-full flex items-center">Berita</a>
        </div>

        <div class="hidden lg:flex items-center gap-6">
            <div
                class="flex items-center gap-2 px-4 py-2 bg-zinc-900/50 border border-white/10 rounded-full text-xs font-bold text-zinc-300 hover:bg-white/10 transition cursor-pointer shadow-inner">
                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                    </path>
                </svg>
                ID / EN
            </div>
            <a href="#contact" class="text-sm font-bold hover:text-cyan-400 transition">Hubungi Kami</a>
        </div>

        <div class="lg:hidden flex items-center">
            <button onclick="toggleMobileMenu()" class="p-2 text-zinc-400 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</nav>

<div id="mobile-menu"
    class="fixed inset-0 bg-zinc-950/95 backdrop-blur-3xl z-50 transform translate-x-full transition-transform duration-300 overflow-y-auto lg:hidden">
    <div class="p-6">
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center gap-3">
                <img src="{{ asset('logo_vidici.png') }}" alt="VIDICI Logo" class="h-8 w-auto object-contain">
                <div class="flex flex-col">
                    <span class="font-bold text-base leading-none tracking-tight text-white">Vidya Diginara
                        Cipta</span>
                </div>
            </div>
            <button onclick="toggleMobileMenu()" class="p-2 text-zinc-400 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="flex flex-col gap-6 text-sm font-medium text-zinc-300">
            <a href="{{ route('home') }}" onclick="toggleMobileMenu()"
                class="hover:text-cyan-400 transition">Beranda</a>

            <div>
                <div onclick="toggleMobileAccordion('mobile-layanan')"
                    class="flex justify-between items-center hover:text-cyan-400 transition cursor-pointer">
                    Layanan
                    <svg id="icon-mobile-layanan" class="w-4 h-4 text-zinc-500 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </div>
                <div id="mobile-layanan" class="hidden flex-col gap-4 mt-4 pl-4 border-l border-white/10">
                    <a href="#services" onclick="toggleMobileMenu()"
                        class="text-xs text-zinc-400 hover:text-cyan-400">Managed Operations</a>
                    <a href="#services" onclick="toggleMobileMenu()"
                        class="text-xs text-zinc-400 hover:text-cyan-400">Custom App Dev</a>
                    <a href="{{ route('erp') }}" onclick="toggleMobileMenu()"
                        class="text-xs text-zinc-400 hover:text-fuchsia-400">ERP Solutions (CORENETA)</a>
                    <a href="#services" onclick="toggleMobileMenu()"
                        class="text-xs text-zinc-400 hover:text-fuchsia-400">Banking Systems</a>
                </div>
            </div>

            <div>
                <div onclick="toggleMobileAccordion('mobile-perusahaan')"
                    class="flex justify-between items-center hover:text-cyan-400 transition cursor-pointer">
                    Perusahaan
                    <svg id="icon-mobile-perusahaan" class="w-4 h-4 text-zinc-500 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </div>
                <div id="mobile-perusahaan" class="hidden flex-col gap-4 mt-4 pl-4 border-l border-white/10">
                    <a href="#about" onclick="toggleMobileMenu()"
                        class="text-xs text-zinc-400 hover:text-fuchsia-400">Profil & Sejarah</a>
                    <a href="#why-us" onclick="toggleMobileMenu()"
                        class="text-xs text-zinc-400 hover:text-fuchsia-400">Nilai & Keunggulan</a>
                    <a href="#career" onclick="toggleMobileMenu()"
                        class="text-xs text-zinc-400 hover:text-cyan-400">Karier & Magang</a>
                    <a href="#contact" onclick="toggleMobileMenu()"
                        class="text-xs text-zinc-400 hover:text-cyan-400">Hubungi Manajemen</a>
                </div>
            </div>

            <a href="#portfolio" onclick="toggleMobileMenu()" class="hover:text-cyan-400 transition">Portofolio</a>
            <a href="#insights" onclick="toggleMobileMenu()" class="hover:text-cyan-400 transition">Berita</a>
        </div>

        <div class="mt-10 pt-10 border-t border-white/10 flex flex-col gap-6">
            <div
                class="flex items-center justify-center gap-2 px-4 py-3 bg-zinc-900/50 border border-white/10 rounded-full text-xs font-bold text-zinc-300">
                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                    </path>
                </svg>
                ID / EN
            </div>
            <a href="#contact" onclick="toggleMobileMenu()"
                class="text-center px-5 py-4 bg-gradient-to-r from-cyan-500 to-fuchsia-600 text-white font-bold rounded-xl text-xs tracking-widest uppercase shadow-lg shadow-fuchsia-500/20">HUBUNGI
                KAMI</a>
        </div>
    </div>
</div>

<script>
    function toggleMegaMenu(menuId) {
        document.querySelectorAll('.mega-menu-content').forEach(el => {
            if (el.id !== menuId) {
                el.classList.add('opacity-0', 'invisible');
                el.classList.remove('opacity-100', 'visible');
            }
        });

        document.querySelectorAll('.mega-menu-icon').forEach(el => {
            if (el.id !== 'icon-' + menuId) {
                el.classList.remove('rotate-180');
            }
        });

        const menu = document.getElementById(menuId);
        const icon = document.getElementById('icon-' + menuId);

        if (menu.classList.contains('invisible')) {
            menu.classList.remove('opacity-0', 'invisible');
            menu.classList.add('opacity-100', 'visible');
            icon.classList.add('rotate-180');
        } else {
            menu.classList.add('opacity-0', 'invisible');
            menu.classList.remove('opacity-100', 'visible');
            icon.classList.remove('rotate-180');
        }
    }

    document.addEventListener('click', function(event) {
        const isClickInsideMenu = event.target.closest('.mega-menu-container');

        if (!isClickInsideMenu) {
            document.querySelectorAll('.mega-menu-content').forEach(el => {
                el.classList.add('opacity-0', 'invisible');
                el.classList.remove('opacity-100', 'visible');
            });
            document.querySelectorAll('.mega-menu-icon').forEach(el => {
                el.classList.remove('rotate-180');
            });
        }
    });

    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        if (menu.classList.contains('translate-x-full')) {
            menu.classList.remove('translate-x-full');
            menu.classList.add('translate-x-0');
        } else {
            menu.classList.remove('translate-x-0');
            menu.classList.add('translate-x-full');
        }
    }

    function toggleMobileAccordion(id) {
        const content = document.getElementById(id);
        const icon = document.getElementById('icon-' + id);
        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            content.classList.add('flex');
            icon.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            content.classList.remove('flex');
            icon.classList.remove('rotate-180');
        }
    }
</script>
