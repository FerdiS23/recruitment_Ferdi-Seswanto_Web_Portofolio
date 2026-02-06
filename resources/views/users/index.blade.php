<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya | Ferdi Seswanto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-nav { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased">

    <nav class="fixed w-full z-50 glass-nav border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2.5">
                <div class="w-9 h-9 bg-blue-600 rounded-lg flex items-center justify-center shadow-md shadow-blue-200">
                    <span class="text-white font-bold text-lg">P</span>
                </div>
                <span class="text-lg font-bold tracking-tight">Porto<span class="text-blue-600">Dev.</span></span>
            </div>
            
            <div class="hidden md:flex items-center gap-8 font-semibold text-sm text-slate-600">
                <a href="#" class="hover:text-blue-600 transition-colors">Beranda</a>
                <a href="#proyek" class="hover:text-blue-600 transition-colors">Proyek</a>
                <a href="#kontak" class="text-white bg-blue-600 px-5 py-2 rounded-full hover:bg-blue-700 transition-all shadow-md shadow-blue-100">Kontak</a>
            </div>
        </div>
    </nav>

    <section class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-slate-950">
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-indigo-600/10 rounded-full blur-[120px]"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-12 w-full flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            
            <div class="lg:w-3/5 text-center lg:text-left order-2 lg:order-1">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-[10px] font-bold tracking-widest uppercase mb-8">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    Tersedia untuk Proyek Baru
                </div>
                
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white leading-[1.1] mb-6">
                    Halo, Saya <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">Ferdi Seswanto</span>.
                </h1>
                
                <p class="text-base md:text-lg text-slate-400 max-w-2xl mb-10 leading-relaxed mx-auto lg:mx-0">
                    Seorang <span class="text-white font-medium">Fullstack Developer</span> yang fokus membangun pengalaman digital masa depan dengan Laravel, Tailwind, dan ekosistem JS.
                </p>
                
                <div class="flex flex-wrap justify-center lg:justify-start gap-3">
                    <span class="px-4 py-2 bg-slate-900/50 border border-slate-800 rounded-xl text-slate-400 text-xs font-semibold hover:border-blue-500/50 transition-all cursor-default">#Laravel</span>
                    <span class="px-4 py-2 bg-slate-900/50 border border-slate-800 rounded-xl text-slate-400 text-xs font-semibold hover:border-blue-500/50 transition-all cursor-default">#TailwindCSS</span>
                    <span class="px-4 py-2 bg-slate-900/50 border border-slate-800 rounded-xl text-slate-400 text-xs font-semibold hover:border-blue-500/50 transition-all cursor-default">#VueJS</span>
                </div>
            </div>

            <div class="lg:w-2/5 order-1 lg:order-2 flex justify-center">
                <div class="relative group">
                    <div class="absolute inset-0 bg-blue-600 rounded-[3rem] rotate-6 scale-105 opacity-20 blur-sm group-hover:rotate-3 transition-transform duration-500"></div>
                    
                    <div class="relative w-56 h-56 md:w-80 md:h-80 overflow-hidden rounded-[3rem] border-2 border-slate-800 bg-slate-900 shadow-2xl">
                        <img src="{{ asset('images/foto.jpg') }}" alt="Ferdi" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>

                    <div class="absolute -bottom-4 -right-4 bg-white p-4 rounded-2xl shadow-xl hidden md:flex items-center gap-3 border border-slate-100">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center text-blue-600">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-500 font-bold uppercase tracking-wider">Pengalaman</p>
                            <p class="text-sm font-extrabold text-slate-900">3+ Tahun</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   @php
    // Array warna untuk variasi card
    $colors = [
        ['bg' => 'bg-blue-50', 'text' => 'text-blue-600', 'border' => 'border-blue-100', 'icon' => 'from-blue-500 to-blue-600', 'shadow' => 'shadow-blue-200'],
        ['bg' => 'bg-emerald-50', 'text' => 'text-emerald-600', 'border' => 'border-emerald-100', 'icon' => 'from-emerald-500 to-emerald-600', 'shadow' => 'shadow-emerald-200'],
        ['bg' => 'bg-violet-50', 'text' => 'text-violet-600', 'border' => 'border-violet-100', 'icon' => 'from-violet-500 to-violet-600', 'shadow' => 'shadow-violet-200'],
        ['bg' => 'bg-amber-50', 'text' => 'text-amber-600', 'border' => 'border-amber-100', 'icon' => 'from-amber-500 to-amber-600', 'shadow' => 'shadow-amber-200'],
        ['bg' => 'bg-rose-50', 'text' => 'text-rose-600', 'border' => 'border-rose-100', 'icon' => 'from-rose-500 to-rose-600', 'shadow' => 'shadow-rose-200'],
    ];
@endphp

<section id="proyek" class="py-32 max-w-7xl mx-auto px-6" x-data="{ openModal: null }">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-20 gap-6">
        <div class="relative">
            <div class="absolute -top-8 -left-4 w-20 h-20 bg-blue-100 rounded-full blur-3xl opacity-60"></div>
            <span class="relative text-blue-600 font-extrabold tracking-[0.3em] text-[10px] uppercase block mb-3">Portfolio Showcasing</span>
            <h2 class="relative text-4xl md:text-5xl font-black text-slate-900 tracking-tight">Karya <span class="text-blue-600">Terbaik.</span></h2>
        </div>
        <p class="text-slate-500 max-w-sm text-sm leading-relaxed border-l-2 border-blue-600 pl-4">Setiap baris kode adalah solusi. Jelajahi bagaimana saya membantu bisnis tumbuh melalui teknologi.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
        @foreach($semuaProyek as $index => $p)
        @php 
            // Ambil warna berdasarkan index agar selang-seling
            $c = $colors[$index % count($colors)]; 
        @endphp
        
        <div @click="openModal = {{ $p->id }}" 
             class="group cursor-pointer relative bg-white rounded-[3rem] p-3 border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 flex flex-col h-full overflow-hidden">
            
            <div class="absolute -top-10 -right-10 w-32 h-32 {{ $c['bg'] }} rounded-full blur-3xl group-hover:scale-150 transition-transform duration-700"></div>
            
            <div class="relative p-7 flex flex-col h-full">
                <div class="flex items-center justify-between mb-10">
                    <div class="flex flex-wrap gap-2">
                        @foreach(explode(',', $p->tech_stack) as $tech)
                        <span class="px-3 py-1 {{ $c['bg'] }} {{ $c['text'] }} text-[9px] font-black rounded-full border {{ $c['border'] }} uppercase tracking-wider">
                            {{ trim($tech) }}
                        </span>
                        @endforeach
                    </div>
                    <div class="flex items-center gap-1.5 px-3 py-1 bg-slate-50 rounded-full border border-slate-100">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-400 animate-pulse"></span>
                        <span class="text-[10px] font-bold text-slate-500">{{ $p->tahun }}</span>
                    </div>
                </div>
                
                <div class="mb-8">
                    <div class="w-16 h-16 bg-gradient-to-br {{ $c['icon'] }} rounded-[1.5rem] flex items-center justify-center text-white text-2xl mb-8 {{ $c['shadow'] }} shadow-lg group-hover:rotate-12 transition-all duration-500">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-slate-900 mb-4 group-hover:{{ $c['text'] }} transition-colors tracking-tight leading-tight">
                        {{ $p->judul }}
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-3">
                        {{ $p->deskripsi }}
                    </p>
                </div>

                <div class="mt-auto pt-8">
                    <div class="flex items-center justify-between group/btn">
                        <span class="text-xs font-black text-slate-900 uppercase tracking-widest group-hover/btn:{{ $c['text'] }} transition-colors">Project View</span>
                        <div class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center group-hover:{{ $c['bg'] }} group-hover:{{ $c['border'] }} transition-all duration-300">
                            <i class="fas fa-chevron-right text-xs group-hover:{{ $c['text'] }}"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="openModal === {{ $p->id }}" 
             class="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md"
             x-transition:enter="transition duration-300" x-cloak>
            
            <div @click.away="openModal = null" 
                 class="bg-white w-full max-w-3xl max-h-[92vh] overflow-y-auto rounded-[3.5rem] shadow-2xl relative border {{ $c['border'] }}">
                
                <button @click="openModal = null" class="absolute top-8 right-8 w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all z-20">
                    <i class="fas fa-times"></i>
                </button>

                <div class="p-10 md:p-16">
                    <div class="w-20 h-20 bg-gradient-to-br {{ $c['icon'] }} rounded-3xl flex items-center justify-center text-white text-3xl mb-10 shadow-2xl">
                        <i class="fas fa-code"></i>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tight">{{ $p->judul }}</h2>
                    
                    <div class="flex flex-wrap gap-3 mb-12">
                        @foreach(explode(',', $p->tech_stack) as $tech)
                        <span class="px-4 py-2 {{ $c['bg'] }} {{ $c['text'] }} text-xs font-bold rounded-xl border {{ $c['border'] }}">
                            {{ trim($tech) }}
                        </span>
                        @endforeach
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-slate-600">
                        <div>
                            <h4 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-4">Background</h4>
                            <p class="text-sm leading-relaxed">{{ $p->deskripsi }}</p>
                        </div>
                        <div class="bg-slate-50 p-8 rounded-[2rem] border border-slate-100">
                            <h4 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-4">Key Features</h4>
                            <ul class="space-y-4">
                                <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                                    <div class="w-6 h-6 {{ $c['bg'] }} {{ $c['text'] }} rounded-full flex items-center justify-center text-[10px]">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    Scalable Architecture
                                </li>
                                <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                                    <div class="w-6 h-6 {{ $c['bg'] }} {{ $c['text'] }} rounded-full flex items-center justify-center text-[10px]">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    User-Centric Design
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-16 flex flex-wrap gap-4">
                        @if($p->url_repositori)
                        <a href="{{ $p->url_repositori }}" target="_blank" class="flex-1 min-w-[200px] flex items-center justify-center gap-3 py-5 bg-slate-900 text-white rounded-[1.5rem] font-bold hover:scale-105 transition-transform">
                            <i class="fab fa-github text-xl"></i> Review Github
                        </a>
                        @endif
                        <button @click="openModal = null" class="flex-1 min-w-[200px] py-5 bg-gradient-to-r {{ $c['icon'] }} text-white rounded-[1.5rem] font-bold hover:scale-105 transition-transform shadow-xl">
                            Close Showcase
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<style>
    [x-cloak] { display: none !important; }
</style>

    <footer id="kontak" class="py-20 bg-white border-t border-slate-100 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl font-extrabold mb-4">Tertarik Bekerja Sama?</h2>
            <p class="text-slate-500 mb-10 text-sm max-w-lg mx-auto leading-relaxed">Saya selalu terbuka untuk mendiskusikan proyek baru atau peluang kreatif untuk membantu bisnis Anda tumbuh.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="px-8 py-3.5 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition shadow-lg shadow-blue-100 flex items-center justify-center gap-2">
                    <i class="fas fa-envelope text-sm"></i> Kirim Email
                </a>
                <a href="#" class="px-8 py-3.5 bg-slate-900 text-white font-bold rounded-xl hover:bg-slate-800 transition flex items-center justify-center gap-2">
                    <i class="fab fa-linkedin text-sm"></i> LinkedIn
                </a>
            </div>
            <div class="mt-20 pt-8 border-t border-slate-50">
                <p class="text-slate-400 text-[11px] font-bold uppercase tracking-widest">© 2026 Ferdi Seswanto • Crafted with Tailwind</p>
            </div>
        </div>
    </section>

</body>
</html>