<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Jokiin - Platform Jasa Joki Terpercaya</title>
    <style>
        html.theme-light body,
        html.theme-light .theme-shell {
            background: #ffffff !important;
            background-image: none !important;
        }

        html.theme-light .bg-slate-900\/60,
        html.theme-light .rounded-3xl.border {
            background-color: #ffffff !important;
        }
    </style>
</head>

<body class="min-h-screen bg-slate-950 text-slate-100 antialiased font-['Plus_Jakarta_Sans',sans-serif]">
    <div
        class="theme-shell min-h-screen bg-[radial-gradient(circle_at_top_left,_rgba(56,189,248,0.16),_transparent_28%),radial-gradient(circle_at_top_right,_rgba(96,165,250,0.12),_transparent_24%),radial-gradient(circle_at_bottom_right,_rgba(249,115,22,0.08),_transparent_22%),linear-gradient(to_bottom,_#08111f,_#0c1728_42%,_#0f172a_100%)]">

        <!-- ==================== HEADER ==================== -->
        <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/72 backdrop-blur-2xl">
            <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 md:px-10">
                <!-- Brand -->
                <a href="#beranda" class="flex items-center gap-3">
                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-sky-500 via-blue-600 to-indigo-700 text-white shadow-lg shadow-sky-500/20 ring-4 ring-sky-400/10">
                        <span class="text-sm font-black tracking-wider">J</span>
                    </div>
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.28em] text-sky-300">Jokiin</p>
                        <p class="text-sm text-slate-400">Platform jasa joki terpercaya</p>
                    </div>
                </a>

                <!-- Navigation -->
                <nav
                    class="hidden items-center gap-2 rounded-full border border-white/10 bg-white/5 p-1 text-sm font-medium text-slate-300 shadow-sm backdrop-blur md:flex">
                    <a href="#beranda"
                        class="rounded-full bg-sky-500 px-4 py-2 text-white shadow-sm shadow-sky-500/20">Beranda</a>
                    <a href="#kategori"
                        class="rounded-full px-4 py-2 transition hover:bg-white/10 hover:text-sky-300">Kategori</a>
                    <a href="#cara-order"
                        class="rounded-full px-4 py-2 transition hover:bg-white/10 hover:text-sky-300">Cara Order</a>
                    <a href="#keunggulan"
                        class="rounded-full px-4 py-2 transition hover:bg-white/10 hover:text-sky-300">Keunggulan</a>
                </nav>

                <button id="themeToggle" type="button" aria-label="Toggle theme"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-slate-300 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300/40 hover:text-sky-200">
                    <svg id="themeIconMoon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                    </svg>
                    <svg id="themeIconSun" class="hidden" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="4" />
                        <path
                            d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41" />
                    </svg>
                </button>

                <!-- Notif icon -->
                <button
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-slate-300 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300/40 hover:text-sky-200">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9" />
                        <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                    </svg>
                </button>
            </div>
        </header>

        <!-- ==================== MAIN ==================== -->
        <main id="beranda">

            <!-- ========== HERO ========== -->
            <section class="mx-auto grid max-w-7xl gap-12 px-6 py-16 md:grid-cols-2 md:px-10 md:py-20 lg:gap-16">
                <!-- Kiri: Teks -->
                <div class="flex flex-col justify-center">
                    <span
                        class="inline-flex w-fit items-center gap-2 rounded-full border border-sky-200/40 bg-sky-500/10 px-3 py-1.5 text-xs font-medium text-sky-300 backdrop-blur">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                        Solusi cepat untuk tugas, coding, desain, dan skripsi
                    </span>

                    <h1
                        class="mt-5 max-w-2xl text-xl sm:text-2xl md:text-3xl lg:text-[2.25rem] font-['Black_Ops_One',cursive] tracking-normal leading-tight text-white">
                        <span id="typewriter-static"></span><span id="typewriter-gradient"
                            class="bg-gradient-to-r from-sky-400 via-teal-300 to-emerald-400 bg-clip-text text-transparent"></span><span
                            id="typewriter-cursor" class="typewriter-cursor text-sky-400">|</span>
                    </h1>

                    <p class="mt-4 max-w-xl text-sm leading-7 text-slate-300 md:text-base">
                        Temukan bantuan terbaik untuk tugas kampus, skripsi, presentasi, desain, coding, dan kebutuhan
                        digital lainnya dengan alur order yang rapi dan harga yang jelas.
                    </p>

                    <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                        <a href="#kategori"
                            class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-sky-500 via-blue-500 to-indigo-500 px-5 py-3 text-xs font-semibold text-white shadow-[0_18px_40px_-18px_rgba(14,165,233,0.6)] transition hover:-translate-y-0.5 hover:shadow-[0_22px_45px_-16px_rgba(14,165,233,0.75)]">
                            Buat Pesanan
                            <svg class="ml-1.5" width="14" height="14" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M13 5l7 7-7 7" />
                            </svg>
                        </a>
                        <a href="#cara-order"
                            class="inline-flex items-center justify-center rounded-2xl border border-white/20 bg-white/5 px-5 py-3 text-xs font-semibold text-slate-200 transition hover:-translate-y-0.5 hover:border-sky-300/40 hover:text-sky-200">
                            Lihat Cara Order
                        </a>
                    </div>

                    <div class="mt-5 flex flex-wrap gap-2">
                        <span
                            class="rounded-full border border-sky-400/30 bg-sky-500/10 px-3 py-1 text-[10px] font-semibold text-sky-300">Order
                            aman</span>
                        <span
                            class="rounded-full border border-blue-400/30 bg-blue-500/10 px-3 py-1 text-[10px] font-semibold text-blue-300">Respon
                            cepat</span>
                        <span
                            class="rounded-full border border-emerald-400/30 bg-emerald-500/10 px-3 py-1 text-[10px] font-semibold text-emerald-300">Revisi
                            fleksibel</span>
                    </div>

                    <div class="mt-8 grid max-w-2xl grid-cols-3 gap-3">
                        <div class="rounded-3xl border border-white/10 bg-white/5 p-3 backdrop-blur-sm">
                            <p class="text-xl font-black text-sky-300">200+</p>
                            <p class="mt-0.5 text-xs text-slate-400">Pesanan selesai</p>
                        </div>
                        <div class="rounded-3xl border border-white/10 bg-white/5 p-3 backdrop-blur-sm">
                            <p class="text-xl font-black text-sky-300">24/7</p>
                            <p class="mt-0.5 text-xs text-slate-400">Siap bantu order</p>
                        </div>
                        <div class="rounded-3xl border border-white/10 bg-white/5 p-3 backdrop-blur-sm">
                            <p class="text-xl font-black text-sky-300">4.9</p>
                            <p class="mt-0.5 text-xs text-slate-400">Rating pelanggan</p>
                        </div>
                    </div>
                </div>

                <!-- Kanan: Ilustrasi -->
                <div class="relative flex items-center justify-center">
                    <div
                        class="absolute inset-0 -z-10 rounded-[2rem] bg-gradient-to-br from-sky-500/20 via-blue-500/10 to-indigo-500/20 blur-3xl">
                    </div>

                    <div
                        class="absolute left-4 top-12 z-20 hidden rounded-full border border-white/20 bg-slate-900/80 px-3 py-1.5 text-[10px] font-semibold text-sky-300 shadow-lg shadow-sky-500/10 backdrop-blur lg:block">
                        1 menit respon awal
                    </div>

                    <div
                        class="absolute bottom-14 left-6 z-20 hidden max-w-[160px] rounded-3xl border border-white/20 bg-slate-900/80 p-3 shadow-xl shadow-sky-500/10 backdrop-blur lg:block">
                        <p class="text-[10px] font-semibold uppercase tracking-[0.18em] text-slate-400">Order masuk</p>
                        <p class="mt-1 text-sm font-bold text-white">Joki skripsi</p>
                        <p class="mt-0.5 text-[10px] text-slate-400">Baru diterima 12 menit lalu</p>
                    </div>

                    <div
                        class="relative w-full max-w-[320px] rounded-3xl border border-white/15 bg-slate-900/60 p-3 shadow-[0_20px_60px_-25px_rgba(14,165,233,0.25)] backdrop-blur-xl ring-1 ring-white/10 lg:max-w-[360px]">
                        <!-- Ikon dekorasi (tetap ukuran sama) -->
                        <div class="absolute left-6 top-8 z-10 rounded-2xl bg-sky-500/20 p-3 shadow-sm">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#38bdf8"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16h16V8z" />
                                <path d="M14 2v6h6" />
                                <path d="M8 14h8M8 18h5" />
                            </svg>
                        </div>
                        <div
                            class="absolute left-24 top-4 z-10 rounded-full bg-slate-800 p-2 shadow-md shadow-sky-500/10">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#38bdf8"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 8v8M8 12h8" />
                            </svg>
                        </div>
                        <div class="absolute right-8 top-5 z-10 rounded-2xl bg-sky-500/20 p-3 shadow-sm">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#38bdf8"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 3v18h18" />
                                <path d="M7 15l3-3 3 2 5-6" />
                            </svg>
                        </div>
                        <div class="absolute right-12 bottom-10 z-10 rounded-2xl bg-amber-500/20 p-3 shadow-sm">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fbbf24"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M8 7V3m8 4~6M6 5h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Z" />
                            </svg>
                        </div>
                        <!-- Gambar ilustrasi -->
                        <img src="{{ asset('TemplatePutih.jpg') }}" alt="Ilustrasi Jokiin"
                            class="mx-auto w-full max-w-[260px] rounded-xl object-contain lg:max-w-[300px]" />
                    </div>
                </div>
            </section>

            <!-- ========== KATEGORI ========== -->
            <section id="kategori" class="mx-auto max-w-7xl px-6 pb-10 md:px-10">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-sky-400">Kategori populer</p>
                        <h2 class="mt-2 text-2xl font-black text-white md:text-3xl">Layanan yang paling sering dipesan
                        </h2>
                    </div>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-sky-400 transition hover:gap-3 hover:text-sky-300">
                        Lihat semua <span aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Kartu 1 -->
                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30 hover:shadow-xl hover:shadow-sky-500/10">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-sky-500/20 text-sky-300">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <path d="M14 2v6h6" />
                                <path d="M9 15h6M9 11h3" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Joki Tugas</p>
                        <p class="mt-1 text-sm text-slate-400">Mulai Rp10.000</p>
                    </div>

                    <!-- Kartu 2 -->
                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30 hover:shadow-xl hover:shadow-sky-500/10">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-violet-500/20 text-violet-300">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10 12 5 2 10l10 5 10-5Z" />
                                <path d="M6 12.5V17c0 1.5 3 3 6 3s6-1.5 6-3v-4.5" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Joki Skripsi</p>
                        <p class="mt-1 text-sm text-slate-400">Mulai Rp150.000</p>
                    </div>

                    <!-- Kartu 3 -->
                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30 hover:shadow-xl hover:shadow-sky-500/10">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-500/20 text-indigo-300">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="16 18 22 12 16 6" />
                                <polyline points="8 6 2 12 8 18" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Joki Coding</p>
                        <p class="mt-1 text-sm text-slate-400">Mulai Rp50.000</p>
                    </div>

                    <!-- Kartu 4 -->
                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30 hover:shadow-xl hover:shadow-sky-500/10">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-500/20 text-emerald-300">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 19l7-7 3 3-7 7-3-3z" />
                                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                                <path d="M2 2l7.586 7.586" />
                                <circle cx="11" cy="11" r="2" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Joki Desain</p>
                        <p class="mt-1 text-sm text-slate-400">Mulai Rp20.000</p>
                    </div>

                    <!-- Kartu 5 -->
                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30 hover:shadow-xl hover:shadow-sky-500/10">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-500/20 text-orange-300">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="14" rx="2" />
                                <path d="M8 21h8M12 17v4" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Joki PPT</p>
                        <p class="mt-1 text-sm text-slate-400">Mulai Rp15.000</p>
                    </div>

                    <!-- Kartu 6 -->
                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30 hover:shadow-xl hover:shadow-sky-500/10">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-teal-500/20 text-teal-300">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M3 9h18M9 21V9" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Joki Excel</p>
                        <p class="mt-1 text-sm text-slate-400">Mulai Rp15.000</p>
                    </div>

                    <!-- Kartu 7 -->
                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30 hover:shadow-xl hover:shadow-sky-500/10">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-500/20 text-rose-300">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M23 7l-7 5 7 5V7z" />
                                <rect x="1" y="5" width="15" height="14" rx="2" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Joki Editing Video</p>
                        <p class="mt-1 text-sm text-slate-400">Mulai Rp30.000</p>
                    </div>

                    <!-- Kartu 8 -->
                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30 hover:shadow-xl hover:shadow-sky-500/10">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-fuchsia-500/20 text-fuchsia-300">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="6" width="20" height="12" rx="2" />
                                <circle cx="8" cy="12" r="2" />
                                <path d="M15 10h4M15 14h4" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Joki Game</p>
                        <p class="mt-1 text-sm text-slate-400">Mulai Rp20.000</p>
                    </div>
                </div>
            </section>

            <!-- ========== CARA ORDER ========== -->
            <section id="cara-order" class="mx-auto max-w-7xl px-6 py-10 md:px-10">
                <div class="rounded-[2rem] border border-white/10 bg-white/5 p-6 backdrop-blur-sm md:p-8">
                    <div class="max-w-2xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-sky-400">Cara order</p>
                        <h2 class="mt-2 text-2xl font-black text-white md:text-3xl">Alur pemesanan dibuat sederhana</h2>
                        <p class="mt-3 text-slate-300">User bisa langsung pilih layanan, kirim detail kebutuhan, lalu
                            tim
                            kami memproses pekerjaan dengan update yang jelas.</p>
                    </div>

                    <div class="mt-8 grid gap-4 md:grid-cols-3">
                        <div class="rounded-3xl bg-white/5 p-5 border border-white/5">
                            <p class="text-sm font-semibold text-sky-400">Langkah 1</p>
                            <p class="mt-2 text-base font-bold text-white">Pilih layanan</p>
                            <p class="mt-2 text-sm leading-7 text-slate-400">Tentukan kategori yang sesuai dengan
                                kebutuhan tugas atau project.</p>
                        </div>
                        <div class="rounded-3xl bg-white/5 p-5 border border-white/5">
                            <p class="text-sm font-semibold text-sky-400">Langkah 2</p>
                            <p class="mt-2 text-base font-bold text-white">Kirim detail</p>
                            <p class="mt-2 text-sm leading-7 text-slate-400">Masukkan brief, deadline, referensi, dan
                                budget agar estimasi lebih akurat.</p>
                        </div>
                        <div class="rounded-3xl bg-white/5 p-5 border border-white/5">
                            <p class="text-sm font-semibold text-sky-400">Langkah 3</p>
                            <p class="mt-2 text-base font-bold text-white">Diproses tim</p>
                            <p class="mt-2 text-sm leading-7 text-slate-400">Pesanan dikerjakan sesuai kesepakatan
                                dengan komunikasi yang transparan.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== KEUNGGULAN ========== -->
            <section id="keunggulan" class="mx-auto max-w-7xl px-6 pb-20 pt-10 md:px-10">
                <div class="mb-6 max-w-2xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.24em] text-sky-400">Keunggulan</p>
                    <h2 class="mt-2 text-2xl font-black text-white md:text-3xl">Kenapa pengguna memilih kami</h2>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30">
                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-sky-500/20 text-sky-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Pengerjaan cepat</p>
                        <p class="mt-2 text-sm leading-7 text-slate-400">Proses kerja disesuaikan dengan deadline
                            pelanggan.</p>
                    </div>

                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30">
                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-2xl bg-emerald-500/20 text-emerald-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Aman & terpercaya</p>
                        <p class="mt-2 text-sm leading-7 text-slate-400">Privasi dan data order dijaga selama
                            pengerjaan.</p>
                    </div>

                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30">
                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-2xl bg-violet-500/20 text-violet-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="1" x2="12" y2="23" />
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Harga terjangkau</p>
                        <p class="mt-2 text-sm leading-7 text-slate-400">Biaya jelas, kompetitif, dan sesuai tingkat
                            kesulitan.</p>
                    </div>

                    <div
                        class="rounded-[1.75rem] border border-white/10 bg-white/5 p-5 backdrop-blur-sm transition hover:-translate-y-1 hover:border-sky-400/30">
                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-2xl bg-amber-500/20 text-amber-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M23 4v6h-6" />
                                <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10" />
                            </svg>
                        </div>
                        <p class="mt-4 text-base font-bold text-white">Revisi gratis</p>
                        <p class="mt-2 text-sm leading-7 text-slate-400">Ada revisi bila hasil perlu penyesuaian kecil.
                        </p>
                    </div>
                </div>
            </section>
            <!-- ========== MIDTRANS INTEGRATION ========== -->
            <section id="pembayaran" class="mx-auto max-w-7xl px-6 pb-20 pt-10 md:px-10">
                <div
                    class="rounded-[2rem] border border-white/10 bg-gradient-to-br from-sky-950/40 via-blue-950/30 to-indigo-950/40 p-6 backdrop-blur-sm md:p-10">
                    <div class="grid gap-8 lg:grid-cols-2 lg:gap-12">
                        <!-- Kiri: Info -->
                        <div class="flex flex-col justify-center">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-sky-500/20 text-sky-300">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="1" y="4" width="22" height="16" rx="2" />
                                        <path d="M1 10h22" />
                                    </svg>
                                </div>
                                <span
                                    class="text-sm font-semibold uppercase tracking-[0.24em] text-sky-400">Pembayaran</span>
                            </div>

                            <h2 class="mt-4 text-2xl font-black text-white md:text-3xl">
                                Bayar Mudah & Aman via
                                <span
                                    class="bg-gradient-to-r from-sky-400 via-blue-400 to-indigo-400 bg-clip-text text-transparent">Midtrans</span>
                            </h2>

                            <p class="mt-3 text-sm leading-7 text-slate-300 md:text-base">
                                Nikmati kemudahan transaksi dengan berbagai metode pembayaran yang didukung oleh
                                Midtrans.
                                Proses cepat, aman, dan terpercaya untuk setiap pesanan Anda.
                            </p>

                            <!-- Metode Pembayaran -->
                            <div class="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-4">
                                <div
                                    class="rounded-xl border border-white/10 bg-white/5 p-3 text-center transition hover:border-sky-400/30 hover:bg-white/10">
                                    <svg class="mx-auto h-7 w-7 text-sky-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M4.5 3.75C3.25 3.75 2.25 4.75 2.25 6v12c0 1.25 1 2.25 2.25 2.25h15c1.25 0 2.25-1 2.25-2.25V6c0-1.25-1-2.25-2.25-2.25h-15zm0 1.5h15c.42 0 .75.33.75.75v.75H3.75V6c0-.42.33-.75.75-.75zM3.75 9.75h16.5v8.25c0 .42-.33.75-.75.75h-15c-.42 0-.75-.33-.75-.75V9.75z" />
                                        <path d="M6 12.75h3v1.5H6z" />
                                    </svg>
                                    <p class="mt-1 text-[10px] font-medium text-slate-400">QRIS</p>
                                </div>

                                <div
                                    class="rounded-xl border border-white/10 bg-white/5 p-3 text-center transition hover:border-sky-400/30 hover:bg-white/10">
                                    <svg class="mx-auto h-7 w-7 text-emerald-300" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                        <path
                                            d="M12 7c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm0 8c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z" />
                                    </svg>
                                    <p class="mt-1 text-[10px] font-medium text-slate-400">Bank Transfer</p>
                                </div>

                                <div
                                    class="rounded-xl border border-white/10 bg-white/5 p-3 text-center transition hover:border-sky-400/30 hover:bg-white/10">
                                    <svg class="mx-auto h-7 w-7 text-violet-300" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path d="M3 11h18v2H3z" />
                                        <path d="M3 7h18v2H3zM3 15h18v2H3zM3 19h18v2H3z" />
                                    </svg>
                                    <p class="mt-1 text-[10px] font-medium text-slate-400">E-Wallet</p>
                                </div>

                                <div
                                    class="rounded-xl border border-white/10 bg-white/5 p-3 text-center transition hover:border-sky-400/30 hover:bg-white/10">
                                    <svg class="mx-auto h-7 w-7 text-amber-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V6h16v12z" />
                                        <path d="M7 9h2v6H7zM11 9h2v6h-2zM15 9h2v6h-2z" />
                                    </svg>
                                    <p class="mt-1 text-[10px] font-medium text-slate-400">Kartu Kredit</p>
                                </div>
                            </div>

                            <!-- Keamanan -->
                            <div class="mt-6 flex flex-wrap items-center gap-4">
                                <div class="flex items-center gap-2">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#34d399"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z" />
                                        <path d="M9 12l2 2 4-4" />
                                    </svg>
                                    <span class="text-xs text-slate-300">Terjamin keamanannya</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#60a5fa"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <polyline points="12 6 12 12 16 14" />
                                    </svg>
                                    <span class="text-xs text-slate-300">Proses instan</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fbbf24"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M23 4v6h-6" />
                                        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10" />
                                    </svg>
                                    <span class="text-xs text-slate-300">Refund garansi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Kanan: Card Midtrans -->
                        <div class="flex items-center justify-center">
                            <div
                                class="w-full max-w-sm rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800/50 to-slate-900/80 p-6 shadow-[0_30px_60px_-30px_rgba(14,165,233,0.2)] backdrop-blur-sm">
                                <!-- Logo Midtrans -->
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-sky-500 to-indigo-500 p-1.5">
                                            <svg viewBox="0 0 24 24" fill="white" class="h-full w-full">
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                                <path
                                                    d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-white">Midtrans</p>
                                            <p class="text-[10px] text-slate-400">Payment Gateway</p>
                                        </div>
                                    </div>
                                    <span
                                        class="rounded-full bg-emerald-500/20 px-2.5 py-1 text-[10px] font-semibold text-emerald-300">Aktif</span>
                                </div>

                                <!-- Divider -->
                                <div class="my-4 border-t border-white/5"></div>

                                <!-- Detail Transaksi -->
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-xs text-slate-400">Status</span>
                                        <span class="text-xs font-semibold text-emerald-300">● Siap Transaksi</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-xs text-slate-400">Metode</span>
                                        <span class="text-xs font-medium text-white">QRIS, Bank Transfer,
                                            E-Wallet</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-xs text-slate-400">Keamanan</span>
                                        <span class="text-xs font-medium text-white">🔒 3D Secure</span>
                                    </div>
                                </div>

                                <!-- Tombol Bayar -->
                                <button
                                    class="mt-5 w-full rounded-xl bg-gradient-to-r from-sky-500 via-blue-500 to-indigo-500 py-3 text-sm font-semibold text-white shadow-[0_12px_30px_-12px_rgba(14,165,233,0.5)] transition hover:-translate-y-0.5 hover:shadow-[0_18px_40px_-16px_rgba(14,165,233,0.7)]">
                                    <span class="flex items-center justify-center gap-2">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14M13 5l7 7-7 7" />
                                        </svg>
                                        Bayar Sekarang
                                    </span>
                                </button>

                                <p class="mt-3 text-center text-[10px] text-slate-500">
                                    Transaksi aman terenkripsi · Didukung Midtrans
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const staticEl = document.getElementById("typewriter-static");
            const gradientEl = document.getElementById("typewriter-gradient");
            const cursorEl = document.getElementById("typewriter-cursor");

            const staticText = "Platform Jasa Joki ";
            const gradientText = "Aman, Cepat & Terpercaya";

            let i = 0;
            let j = 0;
            const speed = 70; // Kecepatan mengetik (ms)

            function typeStatic() {
                if (i < staticText.length) {
                    staticEl.textContent += staticText.charAt(i);
                    i++;
                    setTimeout(typeStatic, speed);
                } else {
                    typeGradient();
                }
            }

            function typeGradient() {
                if (j < gradientText.length) {
                    gradientEl.textContent += gradientText.charAt(j);
                    j++;
                    setTimeout(typeGradient, speed);
                } else {
                    // Biarkan kursor berkedip selama 2 detik setelah selesai mengetik, lalu hilangkan
                    setTimeout(() => {
                        cursorEl.style.display = 'none';
                    }, 2000);
                }
            }

            typeStatic();
        });
    </script>
</body>

</html>