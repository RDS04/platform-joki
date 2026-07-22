<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokiinaja - Platform Jasa Joki</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            green: '#3b756b', // Teal green dari desain
                            dark: '#0f2942',  // Biru gelap pekat dari desain
                            bglight: '#f5f8fc'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            background-color: #e9eff4;
        }
    </style>
</head>
<body id="home" class="text-slate-800 antialiased min-h-screen flex flex-col justify-between font-sans">

    <!-- NAVBAR -->
    <header class="w-full">
        <nav class="max-w-6xl mx-auto px-6 py-6 flex justify-between items-center">
            <!-- Logo Kiri -->
            <div class="flex items-center gap-3 select-none">
                <img src="{{ asset('logo.png') }}" alt="Logo Jokiinaja" class="w-12 h-12 object-contain rounded-full shadow-sm">
                <div class="flex flex-col leading-tight">
                    <span class="text-xl font-extrabold text-brand-dark tracking-tight">jokiinaja</span>
                    <span class="text-[10px] text-slate-400 font-medium">Solusi Jasa Joki Terpercaya</span>
                </div>
            </div>

            <!-- Menu Kanan -->
            <div class="flex items-center gap-2 bg-white/40 backdrop-blur-md px-1.5 py-1.5 rounded-2xl border border-white/60 shadow-sm">
                <a href="#home" class="bg-[#dbebff] text-[#1d4ed8] px-5 py-2 rounded-xl font-bold text-[13px] tracking-wide transition-all shadow-sm shadow-blue-200/50">Beranda</a>
                <a href="#kategori" class="text-slate-600 hover:text-brand-dark px-5 py-2 font-semibold text-[13px] tracking-wide transition">Kategori</a>
                <a href="#cara-order" class="text-slate-600 hover:text-brand-dark px-5 py-2 font-semibold text-[13px] tracking-wide transition">Cara Order</a>
                <a href="#keunggulan" class="text-slate-600 hover:text-brand-dark px-5 py-2 font-semibold text-[13px] tracking-wide transition">Keunggulan</a>
            </div>
        </nav>
    </header>

    <!-- HERO SECTION -->
    <main class="max-w-6xl mx-auto px-6 flex-grow grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full py-6 origin-center">
        
        <!-- Bagian Kiri (Teks & Tombol & Stats) -->
        <div class="lg:col-span-7 flex flex-col justify-center text-left">
            <h2 class="text-4xl lg:text-[44px] font-extrabold leading-[1.15] text-brand-dark tracking-tight mb-3">
                Platform Jasa Joki <br>
                Aman, Cepat & <span class="text-brand-green">Terpercaya</span>
            </h2>
            
            <!-- Custom Stylized Text Logo Jokiinaja -->
            <div class="flex items-center text-5xl lg:text-[76px] font-extrabold text-brand-dark select-none tracking-tight mb-6 mt-1 leading-none">
                <span>Joki</span>
                <!-- Green Character 'i' -->
                <img src="{{ asset('i.png') }}" alt="i" class="h-[0.9em] w-auto object-contain mx-1 select-none">
                <span>naja</span>
            </div>

            <p class="text-slate-500 leading-relaxed text-[14px] lg:text-[15px] max-w-lg mb-8 font-medium">
                Temukan bantuan terbaik untuk tugas kampus, skripsi, presentasi, desain, coding, dan kebutuhan digital lainnya dengan alur order yang rapi dan harga yang jelas.
            </p>

            <div class="flex items-center gap-6 mb-12">
                <a href="#" class="bg-[#3b756b] text-white font-bold px-8 py-3.5 rounded-xl shadow-lg shadow-[#3b756b]/20 hover:bg-[#2c5951] hover:scale-[1.02] transition transform duration-200 text-[14px]">
                    Buat Pesanan
                </a>
                <a href="#" class="text-brand-dark font-extrabold hover:text-brand-green transition text-[14px]">
                    Lihat Cara Order
                </a>
            </div>

            <!-- Kartu Statistik -->
            <div id="keunggulan" class="flex gap-4 max-w-md w-full">
                <!-- Stat 1 -->
                <div class="bg-white px-5 py-4 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.02)] border border-slate-100 flex-1 text-center">
                    <h3 class="text-2xl lg:text-3xl font-extrabold text-brand-dark">200+</h3>
                    <p class="text-[11px] text-slate-400 font-semibold mt-1">Tugas information</p>
                </div>
                <!-- Stat 2 -->
                <div class="bg-white px-5 py-4 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.02)] border border-slate-100 flex-1 text-center">
                    <h3 class="text-2xl lg:text-3xl font-extrabold text-brand-dark">24/7</h3>
                    <p class="text-[11px] text-slate-400 font-semibold mt-1">Nadin kummus</p>
                </div>
                <!-- Stat 3 -->
                <div class="bg-white px-5 py-4 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.02)] border border-slate-100 flex-1 text-center">
                    <h3 class="text-2xl lg:text-3xl font-extrabold text-brand-dark">4.9</h3>
                    <p class="text-[11px] text-slate-400 font-semibold mt-1">Sasan renderar</p>
                </div>
            </div>

            <!-- Kategori Populer -->
            <div class="mt-12">
                <h4 class="text-[13px] font-black text-brand-dark tracking-widest uppercase">Populer Kategori</h4>
            </div>
        </div>

        <!-- Bagian Kanan (Ilustrasi & Floating Elements) -->
        <div class="lg:col-span-5 relative flex justify-center items-center w-full min-h-[460px] lg:min-h-[500px]">
            
            <!-- Aura Cahaya di belakang Karakter -->
            <div class="absolute w-[360px] h-[360px] lg:w-[440px] lg:h-[440px] bg-gradient-to-tr from-sky-100/60 via-white to-teal-50/50 rounded-full blur-3xl opacity-80 pointer-events-none -z-10"></div>
            
            <!-- Main Character Image -->
            <img src="{{ asset('jokiin_aja.jpg') }}" alt="Ilustrasi Jokiinaja" class="w-[300px] lg:w-[350px] h-auto object-contain z-10 relative pointer-events-none">

            <!-- ==================== FLOATING CIRCLES (LEFT SIDE) ==================== -->
            
            <!-- 1. Blue Document (Top Left) -->
            <div class="absolute left-[12%] top-[8%] z-20 w-11 h-11 lg:w-[48px] lg:h-[48px] bg-white rounded-full shadow-lg border border-slate-100 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer">
                <svg class="w-5.5 h-5.5 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                    <polyline points="14 2 14 8 20 8" />
                    <line x1="16" y1="13" x2="8" y2="13" />
                    <line x1="16" y1="17" x2="8" y2="17" />
                    <line x1="10" y1="9" x2="8" y2="9" />
                </svg>
            </div>
            
            <!-- 2. Green Document (Mid Left Top) -->
            <div class="absolute left-[0%] top-[26%] z-20 w-11 h-11 lg:w-[48px] lg:h-[48px] bg-white rounded-full shadow-lg border border-slate-100 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer">
                <svg class="w-5.5 h-5.5 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                    <polyline points="14 2 14 8 20 8" />
                    <circle cx="9" cy="13" r="1" />
                    <circle cx="9" cy="17" r="1" />
                    <line x1="12" y1="13" x2="16" y2="13" />
                    <line x1="12" y1="17" x2="16" y2="17" />
                </svg>
            </div>
            
            <!-- 3. Rocket (Mid Left Bottom) -->
            <div class="absolute left-[6%] top-[45%] z-20 w-11 h-11 lg:w-[48px] lg:h-[48px] bg-white rounded-full shadow-lg border border-slate-100 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer">
                <svg class="w-5 h-5 text-slate-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4.5 16.5c-1.5 1.26-2 3.43-2 3.43s2.17-.5 3.43-2c1.26-1.5 3.43-2 3.43-2s-.5-2.17-2-3.43-3.43-2-3.43-2 .5 2.17 2 3.43Z" />
                    <path d="M12 12c2-2 5-2.5 7-4.5 2-2 1.5-5.5 1.5-5.5s-3.5-.5-5.5 1.5c-2 2-2.5 5-4.5 7Z" />
                    <path d="M19 5l-3 3" />
                </svg>
            </div>
            
            <!-- 4. Go Gopher (Bottom Left) -->
            <div class="absolute left-[0%] top-[66%] z-20 w-11 h-11 lg:w-[48px] lg:h-[48px] bg-white rounded-full shadow-lg border border-slate-100 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer">
                <svg class="w-6.5 h-6.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C8.686 2 6 4.686 6 8v8c0 3.314 2.686 6 6 6s6-2.686 6-6V8c0-3.314-2.686-6-6-6z" fill="#7fd5ea"/>
                    <circle cx="9.5" cy="8.5" r="2.5" fill="white"/>
                    <circle cx="9.5" cy="8.5" r="1" fill="black"/>
                    <circle cx="14.5" cy="8.5" r="2.5" fill="white"/>
                    <circle cx="14.5" cy="8.5" r="1" fill="black"/>
                    <ellipse cx="12" cy="11.5" rx="2" ry="1.5" fill="#d7ccc8"/>
                    <ellipse cx="12" cy="11" rx="1" ry="0.7" fill="#5d4037"/>
                    <rect x="11.2" y="13" width="0.7" height="1.2" fill="white" stroke="black" stroke-width="0.3"/>
                    <rect x="12.1" y="13" width="0.7" height="1.2" fill="white" stroke="black" stroke-width="0.3"/>
                </svg>
            </div>

            <!-- ==================== FLOATING CIRCLES (RIGHT SIDE) ==================== -->
            
            <!-- 5. Bar Chart (Top Right) -->
            <div class="absolute right-[12%] top-[8%] z-20 w-11 h-11 lg:w-[48px] lg:h-[48px] bg-white rounded-full shadow-lg border border-slate-100 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer">
                <svg class="w-5.5 h-5.5 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="10" />
                    <line x1="12" y1="20" x2="12" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="14" />
                </svg>
            </div>
            
            <!-- 6. Light Bulb (Mid Right Top) -->
            <div class="absolute right-[0%] top-[26%] z-20 w-11 h-11 lg:w-[48px] lg:h-[48px] bg-white rounded-full shadow-lg border border-slate-100 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer">
                <svg class="w-5.5 h-5.5 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A5 5 0 0 0 8 8c0 1 .4 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                    <path d="M9 18h6" />
                    <path d="M10 22h4" />
                </svg>
            </div>
            
            <!-- 7. Laptop (Mid Right Center) -->
            <div class="absolute right-[6%] top-[45%] z-20 w-11 h-11 lg:w-[48px] lg:h-[48px] bg-white rounded-full shadow-lg border border-slate-100 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer">
                <svg class="w-5 h-5 text-slate-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="4" width="20" height="12" rx="2" ry="2" />
                    <line x1="2" y1="20" x2="22" y2="20" />
                    <line x1="12" y1="20" x2="12" y2="16" />
                </svg>
            </div>
            
            <!-- 8. Python Logo (Mid Right Bottom) -->
            <div class="absolute right-[0%] top-[66%] z-20 w-11 h-11 lg:w-[48px] lg:h-[48px] bg-white rounded-full shadow-lg border border-slate-100 flex items-center justify-center transition-all duration-300 hover:scale-110 cursor-pointer">
                <svg class="w-6.5 h-6.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.48 2 6 3 6 6v3h6v1H5c-2.5 0-3 1.5-3 4.5s.5 4.5 3 4.5h2v-2c0-2 1.5-3 3.5-3h4c2 0 2.5-1.5 2.5-4V6c0-3-.5-4-5-4H12zm-2 2a1 1 0 110 2 1 1 0 010-2z" fill="#306998"/>
                    <path d="M12 22c5.52 0 6-1 6-4v-3h-6v-1h7c2.5 0 3-1.5 3-4.5s-.5-4.5-3-4.5h-2v2c0 2-1.5 3-3.5 3h-4c-2 0-2.5 1.5-2.5 4v3c0 3 .5 4 5 4h2zm2-2a1 1 0 110-2 1 1 0 010 2z" fill="#FFE873"/>
                </svg>
            </div>

            <!-- ==================== FLOATING SPEECH BUBBLES ==================== -->
            
            <!-- Card Kiri: 1 Menit Respon -->
            <div class="absolute left-[-8%] bottom-[32%] z-30 bg-[#dbebff] text-brand-dark px-4 py-2.5 rounded-2xl shadow-lg border border-white flex items-center gap-1.5 text-xs font-semibold select-none">
                <span class="font-extrabold text-[#1d4ed8]">1 menit</span> respon awal
                <!-- Speech bubble tail pointing right -->
                <div class="absolute -right-2 top-1/2 -translate-y-1/2 w-0 h-0 border-t-[6px] border-t-transparent border-l-[8px] border-l-[#dbebff] border-b-[6px] border-b-transparent"></div>
            </div>

            <!-- Card Kanan: Joki Skripsi -->
            <div class="absolute right-[-8%] bottom-[16%] z-30 bg-white px-5 py-3.5 rounded-2xl shadow-xl border border-slate-100 text-left select-none">
                <p class="font-extrabold text-brand-dark text-xs">Joki skripsi</p>
                <p class="text-[10px] text-slate-400 font-semibold mt-0.5">Baru diterima 12 menit lalu</p>
                <!-- Speech bubble tail pointing left -->
                <div class="absolute -left-2 top-4 w-0 h-0 border-t-[6px] border-t-transparent border-r-[8px] border-r-white border-b-[6px] border-b-transparent drop-shadow-md"></div>
            </div>

        </div>
    </main>

    <!-- SECTION 2: LAYANAN TERPOPULER -->
    <section id="kategori" class="max-w-6xl mx-auto px-6 py-16 w-full">
        <div class="text-center mb-12">
            <span class="text-xs font-bold text-brand-green tracking-widest uppercase bg-emerald-50 px-3.5 py-1.5 rounded-full">Kategori Terlaris</span>
            <h2 class="text-3xl font-extrabold text-brand-dark tracking-tight mt-3">Layanan Paling Sering Dipesan</h2>
            <p class="text-slate-400 text-sm mt-2 max-w-lg mx-auto">Kami menyediakan berbagai jasa joki tugas akademik dan digital untuk membantu mempermudah pengerjaan tugas Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 w-full">
            <!-- Card 1: Joki Tugas -->
            <div class="group bg-white p-6 rounded-2xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-green/30 hover:shadow-xl hover:shadow-[#3b756b]/5 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-brand-green/5 rounded-bl-full flex items-center justify-center transition-all group-hover:scale-110"></div>
                <div>
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl bg-brand-green/10 flex items-center justify-center text-brand-green mb-5">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <line x1="10" y1="9" x2="8" y2="9" />
                        </svg>
                    </div>
                    <!-- Title -->
                    <h3 class="font-extrabold text-brand-dark text-base mb-2 group-hover:text-brand-green transition">Joki Tugas Kuliah</h3>
                    <!-- Desc -->
                    <p class="text-slate-400 text-xs leading-relaxed mb-6 font-medium">Bantuan tugas harian, makalah, resume jurnal, presentasi PPT, dan laporan praktikum akademik Anda.</p>
                </div>
                <!-- Price & Order -->
                <div class="flex items-center justify-between border-t border-slate-50 pt-4 mt-auto">
                    <span class="text-xs font-semibold text-slate-400">Mulai <span class="font-extrabold text-brand-dark text-[15px]">Rp 15k</span></span>
                    <a href="#" class="text-brand-green font-bold text-xs flex items-center gap-1 hover:gap-1.5 transition">Order <span aria-hidden="true">→</span></a>
                </div>
            </div>

            <!-- Card 2: Joki Skripsi -->
            <div class="group bg-white p-6 rounded-2xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-green/30 hover:shadow-xl hover:shadow-[#3b756b]/5 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-blue-500/5 rounded-bl-full flex items-center justify-center transition-all group-hover:scale-110"></div>
                <div>
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl bg-blue-500/10 flex items-center justify-center text-blue-500 mb-5">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                            <path d="M6 12v5c0 2 2.5 3 6 3s6-1 6-3v-5" />
                        </svg>
                    </div>
                    <!-- Title -->
                    <h3 class="font-extrabold text-brand-dark text-base mb-2 group-hover:text-brand-green transition">Joki Skripsi</h3>
                    <!-- Desc -->
                    <p class="text-slate-400 text-xs leading-relaxed mb-6 font-medium">Bimbingan skripsi & thesis lengkap, olah data kuesioner, pembuatan Bab 1 hingga Bab 5 lengkap dengan revisi.</p>
                </div>
                <!-- Price & Order -->
                <div class="flex items-center justify-between border-t border-slate-50 pt-4 mt-auto">
                    <span class="text-xs font-semibold text-slate-400">Mulai <span class="font-extrabold text-brand-dark text-[15px]">Rp 150k</span></span>
                    <a href="#" class="text-brand-green font-bold text-xs flex items-center gap-1 hover:gap-1.5 transition">Order <span aria-hidden="true">→</span></a>
                </div>
            </div>

            <!-- Card 3: Joki Coding -->
            <div class="group bg-white p-6 rounded-2xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-green/30 hover:shadow-xl hover:shadow-[#3b756b]/5 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-indigo-500/5 rounded-bl-full flex items-center justify-center transition-all group-hover:scale-110"></div>
                <div>
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-indigo-500 mb-5">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                            <line x1="10" y1="22" x2="14" y2="2" />
                        </svg>
                    </div>
                    <!-- Title -->
                    <h3 class="font-extrabold text-brand-dark text-base mb-2 group-hover:text-brand-green transition">Joki Coding & Web</h3>
                    <!-- Desc -->
                    <p class="text-slate-400 text-xs leading-relaxed mb-6 font-medium">Pembuatan website personal/bisnis, aplikasi mobile, tugas coding program C++, Java, Python, PHP, JS, Laravel.</p>
                </div>
                <!-- Price & Order -->
                <div class="flex items-center justify-between border-t border-slate-50 pt-4 mt-auto">
                    <span class="text-xs font-semibold text-slate-400">Mulai <span class="font-extrabold text-brand-dark text-[15px]">Rp 100k</span></span>
                    <a href="#" class="text-brand-green font-bold text-xs flex items-center gap-1 hover:gap-1.5 transition">Order <span aria-hidden="true">→</span></a>
                </div>
            </div>

            <!-- Card 4: Joki Desain -->
            <div class="group bg-white p-6 rounded-2xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.02)] transition-all duration-300 hover:-translate-y-1 hover:border-brand-green/30 hover:shadow-xl hover:shadow-[#3b756b]/5 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-amber-500/5 rounded-bl-full flex items-center justify-center transition-all group-hover:scale-110"></div>
                <div>
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl bg-amber-500/10 flex items-center justify-center text-amber-500 mb-5">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                            <circle cx="8.5" cy="8.5" r="1.5" />
                            <polyline points="21 15 16 10 5 21" />
                        </svg>
                    </div>
                    <!-- Title -->
                    <h3 class="font-extrabold text-brand-dark text-base mb-2 group-hover:text-brand-green transition">Joki Desain & PPT</h3>
                    <!-- Desc -->
                    <p class="text-slate-400 text-xs leading-relaxed mb-6 font-medium">Slide presentasi PPT premium, desain logo, poster infografis, edit video pendek, dan mockup prototype UI/UX Figma.</p>
                </div>
                <!-- Price & Order -->
                <div class="flex items-center justify-between border-t border-slate-50 pt-4 mt-auto">
                    <span class="text-xs font-semibold text-slate-400">Mulai <span class="font-extrabold text-brand-dark text-[15px]">Rp 25k</span></span>
                    <a href="#" class="text-brand-green font-bold text-xs flex items-center gap-1 hover:gap-1.5 transition">Order <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: ALUR PEMESANAN -->
    <section id="cara-order" class="max-w-6xl mx-auto px-6 py-16 w-full">
        <div class="text-center mb-16">
            <span class="text-xs font-bold text-brand-green tracking-widest uppercase bg-emerald-50 px-3.5 py-1.5 rounded-full">Alur Mudah</span>
            <h2 class="text-3xl font-extrabold text-brand-dark tracking-tight mt-3">Alur Pemesanan Dibuat Sederhana</h2>
            <p class="text-slate-400 text-sm mt-2 max-w-lg mx-auto">Hanya butuh 3 langkah praktis sampai tugas Anda terselesaikan oleh tim ahli profesional kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            <!-- Langkah 1 -->
            <div class="flex flex-col items-center text-center relative px-4">
                <div class="relative mb-6">
                    <span class="text-8xl font-black text-brand-green/10 select-none absolute -top-10 -left-10 z-0">01</span>
                    <div class="w-16 h-16 rounded-2xl bg-[#3b756b] text-white flex items-center justify-center shadow-lg shadow-[#3b756b]/20 relative z-10">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-extrabold text-brand-dark mb-2 relative z-10">1. Konsultasi Gratis</h3>
                <p class="text-slate-400 text-xs leading-relaxed max-w-xs font-medium">Diskusikan detail tugas, materi kuliah, format pengerjaan, dan tenggat waktu (deadline) Anda dengan tim admin kami.</p>
                <!-- Line Divider (Desktop Only) -->
                <div class="hidden md:block absolute top-8 left-[60%] w-full h-[2px] bg-gradient-to-r from-brand-green/20 to-transparent pointer-events-none -z-10"></div>
            </div>

            <!-- Langkah 2 -->
            <div class="flex flex-col items-center text-center relative px-4">
                <div class="relative mb-6">
                    <span class="text-8xl font-black text-brand-green/10 select-none absolute -top-10 -left-10 z-0">02</span>
                    <div class="w-16 h-16 rounded-2xl bg-[#3b756b] text-white flex items-center justify-center shadow-lg shadow-[#3b756b]/20 relative z-10">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                            <line x1="12" y1="10" x2="12" y2="10" />
                            <line x1="8" y1="10" x2="8" y2="10" />
                            <line x1="16" y1="10" x2="16" y2="10" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-extrabold text-brand-dark mb-2 relative z-10">2. Pembayaran Aman</h3>
                <p class="text-slate-400 text-xs leading-relaxed max-w-xs font-medium">Lakukan pembayaran (DP atau lunas) secara aman via bank transfer/e-wallet untuk memulai pengerjaan tugas oleh tim ahli.</p>
                <!-- Line Divider (Desktop Only) -->
                <div class="hidden md:block absolute top-8 left-[60%] w-full h-[2px] bg-gradient-to-r from-brand-green/20 to-transparent pointer-events-none -z-10"></div>
            </div>

            <!-- Langkah 3 -->
            <div class="flex flex-col items-center text-center relative px-4">
                <div class="relative mb-6">
                    <span class="text-8xl font-black text-brand-green/10 select-none absolute -top-10 -left-10 z-0">03</span>
                    <div class="w-16 h-16 rounded-2xl bg-[#3b756b] text-white flex items-center justify-center shadow-lg shadow-[#3b756b]/20 relative z-10">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-extrabold text-brand-dark mb-2 relative z-10">3. Hasil & Revisi</h3>
                <p class="text-slate-400 text-xs leading-relaxed max-w-xs font-medium">Terima berkas tugas Anda tepat waktu, lakukan pengecekan menyeluruh, dan ajukan revisi gratis jika diperlukan.</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="w-full bg-white border-t border-slate-100 pt-16 pb-8 mt-16 shadow-inner">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Col 1: Jokiinaja Info -->
            <div class="flex flex-col">
                <div class="flex items-center gap-3 mb-4 select-none">
                    <img src="{{ asset('logo.png') }}" alt="Logo Jokiinaja" class="w-10 h-10 object-contain rounded-full">
                    <div class="flex flex-col leading-tight">
                        <span class="text-lg font-extrabold text-brand-dark tracking-tight">jokiinaja</span>
                        <span class="text-[9px] text-slate-400 font-semibold uppercase">Solusi Tugas Akademik</span>
                    </div>
                </div>
                <p class="text-slate-400 text-xs leading-relaxed mb-6 font-medium">Jasa joki tugas akademis, coding, desain, dan skripsi terpercaya dengan pengerjaan cepat dan jaminan revisi.</p>
                <!-- Social Media -->
                <div class="flex items-center space-x-3.5 text-slate-400">
                    <a href="#" class="hover:text-brand-green transition">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1V12h3v3h-3v6.8c4.56-.93 8-4.96 8-9.8z"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-brand-green transition">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051C.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-brand-green transition">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Col 2: Jasa Utama -->
            <div>
                <h4 class="font-extrabold text-brand-dark text-xs uppercase tracking-wider mb-4">Layanan Kami</h4>
                <ul class="space-y-2.5 text-xs text-slate-400 font-medium">
                    <li><a href="#" class="hover:text-brand-green transition">Joki Tugas Kuliah</a></li>
                    <li><a href="#" class="hover:text-brand-green transition">Joki Skripsi & Thesis</a></li>
                    <li><a href="#" class="hover:text-brand-green transition">Joki Coding & Program</a></li>
                    <li><a href="#" class="hover:text-brand-green transition">Joki Desain & PPT</a></li>
                </ul>
            </div>

            <!-- Col 3: Navigasi Cepat -->
            <div>
                <h4 class="font-extrabold text-brand-dark text-xs uppercase tracking-wider mb-4">Peta Situs</h4>
                <ul class="space-y-2.5 text-xs text-slate-400 font-medium">
                    <li><a href="#" class="hover:text-brand-green transition">Beranda Utama</a></li>
                    <li><a href="#" class="hover:text-brand-green transition">Kategori Layanan</a></li>
                    <li><a href="#" class="hover:text-brand-green transition">Cara & Alur Order</a></li>
                    <li><a href="#" class="hover:text-brand-green transition">Keunggulan Layanan</a></li>
                </ul>
            </div>

            <!-- Col 4: Informasi Kontak -->
            <div>
                <h4 class="font-extrabold text-brand-dark text-xs uppercase tracking-wider mb-4">Hubungi Kami</h4>
                <ul class="space-y-2.5 text-xs text-slate-400 font-medium">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span>+62 813-6335-3643</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <span>support@jokiinaja.com</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-green mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <span>Jam Operasional:<br>Setiap Hari (24 Jam)</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-6 mt-12 pt-6 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center text-xs text-slate-400 font-medium gap-4">
            <p>&copy; 2026 Jokiinaja. Hak Cipta Dilindungi Undang-Undang.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-brand-green transition">Kebijakan Privasi</a>
                <a href="#" class="hover:text-brand-green transition">Syarat & Ketentuan</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('section[id], body[id]');
            const navLinks = document.querySelectorAll('header nav a');
            const animatedSections = document.querySelectorAll('main, section[id]');

            function handleScroll() {
                const scrollY = window.pageYOffset || document.documentElement.scrollTop;
                const viewportHeight = window.innerHeight;

                // 1. Navbar Active Link Highlight
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (scrollY >= (sectionTop - 150)) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('bg-[#dbebff]', 'text-[#1d4ed8]', 'shadow-sm', 'shadow-blue-200/50');
                    link.classList.add('text-slate-600', 'hover:text-brand-dark');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('bg-[#dbebff]', 'text-[#1d4ed8]', 'shadow-sm', 'shadow-blue-200/50');
                        link.classList.remove('text-slate-600', 'hover:text-brand-dark');
                    }
                });

                // 2. Viewport-based Scroll Animation for all major sections
                animatedSections.forEach(section => {
                    const rect = section.getBoundingClientRect();
                    const sectionHeight = rect.height;
                    const sectionCenter = rect.top + sectionHeight / 2;
                    const viewportCenter = viewportHeight / 2;

                    // Calculate distance from viewport center
                    const distanceFromCenter = Math.abs(sectionCenter - viewportCenter);
                    const maxDistance = (viewportHeight + sectionHeight) / 2;
                    const progress = Math.min(distanceFromCenter / maxDistance, 1);

                    // Opacity and scale based on visibility progress
                    let opacity = 1;
                    let scale = 1;

                    if (progress > 0.35) {
                        const fadeProgress = (progress - 0.35) / 0.65;
                        opacity = 1 - fadeProgress;
                        scale = 1 - (fadeProgress * 0.1); // Scale down to 90%
                    }

                    section.style.opacity = opacity;
                    section.style.transform = `scale(${scale})`;
                    section.style.pointerEvents = opacity < 0.1 ? 'none' : 'auto';

                    // 3. Rotate images and SVGs inside the section based on scroll Y
                    const elementsToRotate = section.querySelectorAll('img, svg');
                    const rotation = scrollY * 0.15; // 0.15 degrees per pixel

                    elementsToRotate.forEach(el => {
                        if (el.tagName.toLowerCase() === 'svg') {
                            el.style.transform = `rotate(${rotation * 0.5}deg)`;
                        } else {
                            el.style.transform = `rotate(${rotation}deg)`;
                        }
                    });
                });
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Run initially
        });
    </script>
</body>
</html>