<x-app-layout>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        body {
            overflow-x: hidden;
        }

        .bg-glow-cyan {
            background: radial-gradient(circle at center, rgba(6, 182, 212, 0.1) 0%, transparent 70%);
        }

        .bg-glow-fuchsia {
            background: radial-gradient(circle at center, rgba(217, 70, 239, 0.1) 0%, transparent 70%);
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #09090b;
        }

        ::-webkit-scrollbar-thumb {
            background: #3f3f46;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #52525b;
        }
    </style>

    <div class="min-h-screen bg-zinc-950 text-white font-sans selection:bg-cyan-500/30 overflow-hidden">

        @include('partials.navbar')

        <section class="relative w-full pt-32 pb-16 md:pt-40 md:pb-20 overflow-hidden flex items-center bg-zinc-950">
            <div
                class="absolute top-1/2 left-0 -translate-y-1/2 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-cyan-500/10 blur-[120px] rounded-full pointer-events-none z-0">
            </div>
            <div
                class="absolute bottom-0 right-0 w-[250px] md:w-[500px] h-[250px] md:h-[500px] bg-fuchsia-500/10 blur-[120px] rounded-full pointer-events-none z-0">
            </div>

            <div class="max-w-7xl mx-auto px-6 w-full relative z-10 text-center lg:text-left">
                <div class="flex flex-col lg:flex-row items-center gap-10 md:gap-16">
                    <div class="flex-1 w-full" data-aos="fade-right">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-[10px] font-bold uppercase tracking-widest text-cyan-400 mb-6 backdrop-blur-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 animate-pulse"></span>
                            Powered by Odoo
                        </div>
                        <h1
                            class="text-5xl md:text-6xl lg:text-8xl font-extrabold tracking-tighter mb-4 md:mb-6 leading-none">
                            CORE<span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-fuchsia-500">NETA</span>
                        </h1>
                        <h2 class="text-lg md:text-xl lg:text-2xl text-zinc-300 font-light mb-6 md:mb-8 tracking-wide">
                            Unified ERP Platform for Internet Service Providers
                        </h2>
                        <p
                            class="text-base md:text-lg text-zinc-400 max-w-xl mb-8 md:mb-10 leading-relaxed font-light mx-auto lg:mx-0">
                            Satu platform terpadu untuk menyatukan operasional jaringan, pelanggan, dan bisnis ISP Anda
                            menjadi satu sumber kebenaran data.
                        </p>
                        <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                            <a href="#details"
                                class="px-8 py-3 bg-white text-black font-bold rounded-full hover:bg-zinc-200 transition text-xs md:text-sm shadow-lg shadow-white/5">PELAJARI
                                FITUR</a>
                            <a href="#contact"
                                class="px-8 py-3 bg-zinc-900/50 backdrop-blur border border-white/10 text-white font-bold rounded-full hover:bg-zinc-800 transition text-xs md:text-sm">REQUEST
                                DEMO →</a>
                        </div>
                    </div>

                    <div class="flex-1 w-full" data-aos="fade-left" data-aos-delay="200">
                        <div
                            class="relative p-1 bg-gradient-to-br from-cyan-500/20 to-fuchsia-500/20 rounded-3xl md:rounded-[2.5rem] shadow-2xl">
                            <div
                                class="bg-zinc-900/80 backdrop-blur-3xl rounded-[calc(1.5rem-4px)] md:rounded-[2.4rem] overflow-hidden border border-white/5 h-64 md:h-80 flex items-center justify-center relative group cursor-pointer">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80"
                                    alt="Dashboard ERP Preview"
                                    class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-105 transition duration-700">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/40 to-transparent opacity-90 pointer-events-none transition duration-700 group-hover:opacity-50">
                                </div>
                                <div class="absolute bottom-6 left-6 right-6 text-left pointer-events-none">
                                    <span
                                        class="inline-block px-3 py-1 bg-zinc-950/80 backdrop-blur-md border border-white/10 rounded-full text-zinc-300 text-[10px] uppercase tracking-widest font-bold mb-2">Live
                                        Preview</span>
                                    <h3 class="text-white font-bold text-lg leading-tight">Dashboard CORENETA</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="details" class="py-16 md:py-24 border-t border-white/5 bg-zinc-950 relative">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                    <div data-aos="fade-up"
                        class="p-6 md:p-10 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl md:rounded-[2.5rem] shadow-lg">
                        <h3
                            class="text-[10px] md:text-xs font-bold text-cyan-500 uppercase tracking-[0.4em] mb-4 md:mb-6">
                            Apakah CORENETA?</h3>
                        <p class="text-zinc-300 leading-relaxed font-light text-base md:text-lg">
                            CORENETA adalah solusi ERP terintegrasi khusus ISP yang menyatukan operasional jaringan,
                            manajemen pelanggan, dan proses bisnis dalam satu platform skalabel berbasis Odoo.
                        </p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="100"
                        class="p-6 md:p-10 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl md:rounded-[2.5rem] shadow-lg">
                        <h3
                            class="text-[10px] md:text-xs font-bold text-fuchsia-500 uppercase tracking-[0.4em] mb-4 md:mb-6">
                            Mengapa CORENETA?</h3>
                        <p class="text-zinc-400 leading-relaxed font-light text-sm md:text-base">
                            ISP modern sering menghadapi masalah data terpisah, proses aktivasi manual, sistem billing
                            yang tidak terhubung, dan kanal WhatsApp yang tidak terintegrasi. CORENETA hadir sebagai
                            <span class="text-white font-medium italic">Single Source of Truth</span>.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 md:py-32 bg-glow-cyan relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 md:mb-24">
                    <h4 data-aos="fade-down"
                        class="text-[10px] md:text-xs font-bold text-cyan-500 uppercase tracking-[0.4em] mb-4">Fitur
                        Utama</h4>
                    <h2 data-aos="zoom-in" data-aos-delay="100"
                        class="text-3xl md:text-5xl lg:text-6xl font-extrabold tracking-tighter uppercase leading-none">
                        Kapabilitas <span class="text-zinc-500">Inti</span></h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <div data-aos="fade-up" data-aos-delay="100"
                        class="group p-6 md:p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-3xl hover:border-cyan-500/50 transition duration-500 shadow-xl">
                        <h3
                            class="text-base md:text-lg font-bold mb-3 md:mb-4 text-cyan-400 uppercase italic tracking-wider">
                            Billing & Revenue</h3>
                        <p class="text-xs md:text-sm text-zinc-400 font-light leading-relaxed mb-4">Manajemen penagihan
                            otomatis dan status pembayaran real-time.</p>
                        <ul
                            class="text-[9px] md:text-[10px] text-zinc-500 space-y-2 uppercase tracking-tighter font-bold">
                            <li>• Automated Invoicing</li>
                            <li>• WA Reminders</li>
                        </ul>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="group p-6 md:p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-3xl hover:border-fuchsia-500/50 transition duration-500 shadow-xl">
                        <h3
                            class="text-base md:text-lg font-bold mb-3 md:mb-4 text-fuchsia-400 uppercase italic tracking-wider">
                            CRM & Customer Exp</h3>
                        <p class="text-xs md:text-sm text-zinc-400 font-light leading-relaxed mb-4">Pusat data pelanggan
                            tunggal dengan riwayat komunikasi lengkap.</p>
                        <ul
                            class="text-[9px] md:text-[10px] text-zinc-500 space-y-2 uppercase tracking-tighter font-bold">
                            <li>• Unified Customer Master</li>
                            <li>• Lifecycle Tracking</li>
                        </ul>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300"
                        class="group p-6 md:p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-3xl hover:border-cyan-500/50 transition duration-500 shadow-xl">
                        <h3
                            class="text-base md:text-lg font-bold mb-3 md:mb-4 text-cyan-400 uppercase italic tracking-wider">
                            NOC & Operations</h3>
                        <p class="text-xs md:text-sm text-zinc-400 font-light leading-relaxed mb-4">Sistem ticketing
                            terstruktur dengan pemantauan SLA yang ketat.</p>
                        <ul
                            class="text-[9px] md:text-[10px] text-zinc-500 space-y-2 uppercase tracking-tighter font-bold">
                            <li>• SLA Monitoring</li>
                            <li>• CS-NOC Escalation</li>
                        </ul>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="400"
                        class="group p-6 md:p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-3xl hover:border-fuchsia-500/50 transition duration-500 shadow-xl">
                        <h3
                            class="text-base md:text-lg font-bold mb-3 md:mb-4 text-fuchsia-400 uppercase italic tracking-wider">
                            Inventory & Asset</h3>
                        <p class="text-xs md:text-sm text-zinc-400 font-light leading-relaxed mb-4">Pelacakan perangkat
                            jaringan dan siklus hidup aset CPE.</p>
                        <ul
                            class="text-[9px] md:text-[10px] text-zinc-500 space-y-2 uppercase tracking-tighter font-bold">
                            <li>• Device Tracking</li>
                            <li>• Asset Lifecycle</li>
                        </ul>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="500"
                        class="group p-6 md:p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-3xl hover:border-cyan-500/50 transition duration-500 shadow-xl sm:col-span-2 md:col-span-2">
                        <h3
                            class="text-base md:text-lg font-bold mb-3 md:mb-4 text-cyan-400 uppercase italic tracking-wider">
                            Omnichannel & WA API</h3>
                        <p class="text-xs md:text-sm text-zinc-400 font-light leading-relaxed mb-4">Integrasi
                            Meta/Qontak dengan fitur masking nomor tunggal.</p>
                        <div class="flex flex-wrap gap-3 md:gap-4">
                            <span
                                class="text-[9px] md:text-[10px] bg-cyan-500/10 text-cyan-500 px-3 py-1 rounded-full font-bold uppercase tracking-widest">Single
                                Masking Number</span>
                            <span
                                class="text-[9px] md:text-[10px] bg-fuchsia-500/10 text-fuchsia-500 px-3 py-1 rounded-full font-bold uppercase tracking-widest">WhatsApp
                                Integration</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 md:py-24 bg-zinc-950 relative border-t border-white/5">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">
                    <div data-aos="fade-right">
                        <h4
                            class="text-[10px] md:text-xs font-bold text-fuchsia-500 uppercase tracking-[0.4em] mb-4 md:mb-6 font-black">
                            Manfaat Utama</h4>
                        <ul class="space-y-4 md:space-y-6">
                            <li class="flex items-center gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-cyan-500/20 border border-cyan-500 flex items-center justify-center text-cyan-400 text-[10px] font-black italic shrink-0">
                                    1</div>
                                <span class="text-zinc-300 font-light text-sm md:text-base">Efisiensi operasional dan
                                    respons pelanggan lebih cepat.</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-fuchsia-500/20 border border-fuchsia-500 flex items-center justify-center text-fuchsia-400 text-[10px] font-black italic shrink-0">
                                    2</div>
                                <span class="text-zinc-300 font-light text-sm md:text-base">Arsitektur skalabel, siap
                                    untuk ITIL & ISO 20000-1.</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-cyan-500/20 border border-cyan-500 flex items-center justify-center text-cyan-400 text-[10px] font-black italic shrink-0">
                                    3</div>
                                <span class="text-zinc-300 font-light text-sm md:text-base">Implementasi modular yang
                                    hemat biaya.</span>
                            </li>
                        </ul>
                    </div>
                    <div data-aos="fade-left"
                        class="p-6 md:p-10 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl md:rounded-[2.5rem] shadow-2xl">
                        <h4
                            class="text-[10px] md:text-xs font-bold text-cyan-500 uppercase tracking-[0.4em] mb-6 md:mb-8 italic">
                            Dirancang Untuk:</h4>
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4 text-[9px] md:text-[10px] font-bold uppercase tracking-widest text-zinc-500">
                            <div class="p-3 md:p-4 border border-white/5 rounded-xl md:rounded-2xl bg-zinc-900/50">
                                Broadband ISP</div>
                            <div class="p-3 md:p-4 border border-white/5 rounded-xl md:rounded-2xl bg-zinc-900/50">
                                Dedicated ISP</div>
                            <div class="p-3 md:p-4 border border-white/5 rounded-xl md:rounded-2xl bg-zinc-900/50">
                                Regional ISP</div>
                            <div
                                class="p-3 md:p-4 border border-white/5 rounded-xl md:rounded-2xl bg-zinc-900/50 text-cyan-400 border-cyan-500/20">
                                Growing ISPs</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 md:py-24 border-t border-white/5 bg-zinc-950 text-center px-6">
            <h2 data-aos="fade-up"
                class="text-2xl md:text-4xl lg:text-5xl font-bold tracking-tighter uppercase mb-4 md:mb-6 leading-tight md:leading-none">
                One Platform. One Truth. <br class="hidden md:block"><span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-fuchsia-500">One ISP.</span>
            </h2>
            <p data-aos="fade-up" data-aos-delay="100"
                class="text-zinc-500 uppercase text-[9px] md:text-[10px] font-bold tracking-[0.2em] md:tracking-[0.4em] mb-8 md:mb-10">
                Siap untuk Ekspansi 2026-2027?</p>
            <a data-aos="zoom-in" data-aos-delay="200" href="mailto:info@vidici.id"
                class="inline-block px-8 md:px-12 py-3 md:py-4 bg-gradient-to-r from-cyan-500 to-fuchsia-600 text-white font-black rounded-full hover:opacity-90 transition shadow-2xl shadow-cyan-500/20 uppercase tracking-widest text-[10px] md:text-xs">Jadwalkan
                Konsultasi</a>
        </section>

        @include('components.chatbot')

        @include('partials.footer')
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 50,
            });
        });
    </script>
</x-app-layout>
