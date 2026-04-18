<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sonic Minimalist - Album Detail</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-tint": "#57fe81",
                        "secondary": "#7cfbb4",
                        "error": "#ff7351",
                        "surface-container-lowest": "#000000",
                        "surface-container": "#1a1a1a",
                        "on-secondary": "#005e39",
                        "on-secondary-container": "#e2ffe8",
                        "tertiary-container": "#00e3ff",
                        "primary-container": "#00cf59",
                        "secondary-fixed": "#7cfbb4",
                        "primary-fixed": "#57fe81",
                        "error-dim": "#d53d18",
                        "primary-dim": "#44ef74",
                        "on-primary": "#005d24",
                        "on-secondary-fixed-variant": "#006940",
                        "on-tertiary-fixed": "#003840",
                        "on-tertiary-fixed-variant": "#005763",
                        "on-error": "#450900",
                        "inverse-surface": "#fcf9f8",
                        "surface-variant": "#262626",
                        "tertiary": "#86ecff",
                        "on-tertiary": "#005762",
                        "tertiary-fixed": "#00e3ff",
                        "inverse-on-surface": "#565555",
                        "background": "#0e0e0e",
                        "primary": "#57fe81",
                        "outline-variant": "#484847",
                        "on-surface-variant": "#adaaaa",
                        "tertiary-dim": "#00d4ee",
                        "primary-fixed-dim": "#44ef74",
                        "secondary-container": "#006d42",
                        "on-tertiary-container": "#004d58",
                        "surface-container-highest": "#262626",
                        "on-primary-container": "#003c14",
                        "error-container": "#b92902",
                        "surface-container-low": "#131313",
                        "on-secondary-fixed": "#00492b",
                        "on-background": "#ffffff",
                        "on-primary-fixed-variant": "#006829",
                        "on-surface": "#ffffff",
                        "on-primary-fixed": "#00481a",
                        "tertiary-fixed-dim": "#00d4ee",
                        "secondary-fixed-dim": "#6deca7",
                        "secondary-dim": "#6deca7",
                        "on-error-container": "#ffd2c8",
                        "outline": "#767575",
                        "surface-dim": "#0e0e0e",
                        "surface": "#0e0e0e",
                        "surface-container-high": "#20201f",
                        "surface-bright": "#2c2c2c",
                        "inverse-primary": "#006e2c"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Plus Jakarta Sans"],
                        "label": ["Plus Jakarta Sans"]
                    }
                },
            },
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-radial-glow {
            background: radial-gradient(circle at top left, rgba(87, 254, 129, 0.15) 0%, rgba(14, 14, 14, 1) 70%);
        }
    </style>
</head>
<body class="bg-background text-on-background selection:bg-primary selection:text-on-primary">
<!-- SideNavBar Shell -->
<nav class="h-full w-64 fixed left-0 top-0 bg-[#0e0e0e] flex flex-col p-6 gap-4 font-['Plus_Jakarta_Sans'] tracking-tight z-50 hidden md:flex">
<div class="text-2xl font-bold text-[#1ED760] mb-8">Sonic Minimalist</div>
<div class="flex flex-col gap-2">
<a class="flex items-center gap-4 px-4 py-3 rounded-lg transition-colors text-white font-bold bg-[#1a1a1a]" href="{{ route('home') }}">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span>Home</span>
</a>
<a class="flex items-center gap-4 px-4 py-3 rounded-lg transition-colors text-[#adaaaa] hover:text-white hover:bg-[#1a1a1a]" href="{{ route('search') }}">
<span class="material-symbols-outlined" data-icon="search">search</span>
<span>Search</span>
</a>
<a class="flex items-center gap-4 px-4 py-3 rounded-lg transition-colors text-[#adaaaa] hover:text-white hover:bg-[#1a1a1a]" href="{{ route('library') }}">
<span class="material-symbols-outlined" data-icon="library_music">library_music</span>
<span>Library</span>
</a>
</div>
<form method="POST" action="{{ route('playlist.store') }}" class="contents">
    @csrf
    <button type="submit" class="mt-8 bg-surface-container-highest text-white py-3 px-6 rounded-full font-bold transition-all hover:bg-surface-bright flex items-center justify-center gap-2">
<span class="material-symbols-outlined" data-icon="add">add</span>
            Create Playlist
        </button>
</form>
<div class="mt-auto pt-8">
<div class="text-xs uppercase tracking-[0.2em] text-on-surface-variant mb-4 px-4">Premium Audio</div>
<div class="space-y-4 px-4">
<div class="h-32 w-full bg-surface-container rounded-DEFAULT overflow-hidden relative group cursor-pointer">
<img class="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500" data-alt="Close-up of a high-end minimalist turntable with a glowing green neon light strip in a dark room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXlEBSbwbrAajJ99LU1eQqUPq4x52kUZ7RT9s6q0Vpn69CQPGetD2QaYCyLWW7xOW225CkLUEsGcbkgim8xABf_ijlJhX_7cAISaW2XzFGAetBZP8i-xlneINCNbDhKi2nVDBUOapGjKpVQ-0eV6JQK1eMpUG9sqmli_mNEKIyxQ8SaNL8HNkrVBfRIS4J6dvmBvXes4gHV5H8czxLe5PbDpRDX5OfOe_C3HQylg7XS59eXYV6K88AK0YM5QeqfS2mpKfSo6O82afj"/>
<div class="absolute inset-0 p-4 flex flex-col justify-end bg-gradient-to-t from-black/80 to-transparent">
<span class="text-sm font-bold">Discover Weekly</span>
</div>
</div>
</div>
</div>
</nav>
<!-- TopAppBar Shell -->
<header class="fixed top-0 right-0 w-full md:w-[calc(100%-16rem)] z-40 bg-[#0e0e0e]/60 backdrop-blur-xl transition-all flex justify-between items-center px-8 h-16">
<div class="flex items-center gap-4 flex-1">
<div class="relative w-full max-w-md group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant group-focus-within:text-primary transition-colors" data-icon="search">search</span>
<input class="w-full bg-surface-container-high border-none rounded-full py-2 pl-10 pr-4 text-sm focus:ring-0 focus:bg-surface-bright transition-all" placeholder="Search artists, songs, or albums" type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<button class="text-white hover:opacity-80 transition-all">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="text-white hover:opacity-80 transition-all">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
</button>
<div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant/20">
<img alt="User Profile" data-alt="Portrait of a young man with stylish lighting and minimalist aesthetic for profile avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZcn5XTjyH7hN_Fp29usXmH5t2Fr3nToXZdNPPsh3rz_ndVji6ExqSBK49aimKuVwIeNAlbTs5fEjalOpTQKPp2HBrpCKNGKaE0mw1dWp1O-UeljA78L7AFxPTnAEPx4NqucttYBiqlCQELXa2XGy_jQfMKukcW1po4uht4HtnMP-GzxVw7YTRq9w3M_nIYjVMaF39aCKsburulYzttoP8uEO2wDd4Txc02NuVLqLRs84wKGXT9GUova1HyZYeHiEopEmJCauJEcVq"/>
</div>
</div>
</header>
<!-- Main Canvas -->
<main class="md:ml-64 pt-16 pb-32 min-h-screen bg-radial-glow">
<!-- Album Hero Section -->
<section class="px-8 pt-12 pb-12 flex flex-col md:flex-row gap-8 items-end">
<div class="w-64 h-64 md:w-72 md:h-72 shrink-0 rounded-DEFAULT overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.8)]">
<img class="w-full h-full object-cover" data-alt="Abstract album cover art with swirling liquid textures in shades of emerald green and deep charcoal black" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOPJ1-s7vlIKzh1B8FY8HH-ePZ5DDjJ2S_g0aftHtglK-nQuwpjKGQA0GN0cM0YXX5GuS88-1Hvssaw5o9KVVdMcV8RnW_MBEK3otVVI7NCv8xyF22BDOQU-W5vt-ZWyOnzrhwsylUs0PjJmD76mvMbAdZUC0TunPCrmQ0YmECtXR1gGDT9Rf5UMpskkydf_WCFbYdi9-97Ez695iDnpynAJOE7Cy1oYirwEgVwdx8RRCU00P4l-cMbFrMvIUWN0B1LHKyYPIw2qWe"/>
</div>
<div class="flex flex-col gap-4">
<span class="label-sm uppercase tracking-[0.2em] text-on-surface-variant text-xs font-bold">Album</span>
<h1 class="text-5xl md:text-7xl lg:text-8xl font-extrabold tracking-tighter text-on-surface">Midnight Pulsar</h1>
<div class="flex items-center gap-2 mt-2">
<img class="w-6 h-6 rounded-full object-cover" data-alt="Artist portrait silhouette against a moody studio background with green atmospheric light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAceBWlaWEMa62KSjzqrtFyua9juAl-JfxS445uyEKccoOKCq3jTfmFe5Igv0bNB18R1GI2VX0W_Gn5YZ3g6lYDWBuZ-rLOkd6vqsnMmBqTTQpPHTuMYs8pLhAcuysYOt_1guaAtuqdNXiLLynxODIS7iex4AV5udiCZXZ41SgMOVKlGllHTWzq_hFEj0TgXfOuEzkyWi1RXW4c3vZhL_Jv6sic5e_T6rzo7LrBLmJ22MCy1MDzmNOPyKrQ0EeBz8a5vNsye2JSCLw3"/>
<span class="font-bold text-on-surface hover:underline cursor-pointer">Neon Specter</span>
<span class="text-on-surface-variant">•</span>
<span class="text-on-surface-variant font-medium">2024</span>
<span class="text-on-surface-variant">•</span>
<span class="text-on-surface-variant font-medium">12 songs, 48 min 24 sec</span>
</div>
</div>
</section>
<!-- Action Bar -->
<section class="px-8 py-8 flex items-center gap-8">
<button class="w-14 h-14 bg-primary text-on-primary rounded-full flex items-center justify-center transition-transform hover:scale-105 active:scale-95 shadow-[0_0_20px_rgba(87,254,129,0.3)]">
<span class="material-symbols-outlined text-4xl" data-icon="play_arrow" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
</button>
<button class="text-primary hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl" data-icon="favorite" style="font-variation-settings: 'FILL' 0;">favorite</span>
</button>
<button class="text-on-surface-variant hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="download_for_offline">download_for_offline</span>
</button>
<button class="text-on-surface-variant hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl" data-icon="more_horiz">more_horiz</span>
</button>
</section>
<!-- Track List Section -->
<section class="px-8">
<!-- Header Row -->
<div class="grid grid-cols-[40px_1fr_1fr_100px] gap-4 px-4 py-2 text-on-surface-variant text-sm border-b border-outline-variant/10 font-bold uppercase tracking-widest mb-4">
<div class="flex justify-center">#</div>
<div>Title</div>
<div class="hidden md:block">Play Count</div>
<div class="flex justify-end"><span class="material-symbols-outlined scale-75" data-icon="schedule">schedule</span></div>
</div>
<!-- Tracks -->
<div class="space-y-1">
<!-- Track 1 -->
<div class="grid grid-cols-[40px_1fr_1fr_100px] gap-4 px-4 py-3 rounded-DEFAULT hover:bg-surface-container transition-colors group cursor-pointer items-center">
<div class="flex justify-center text-on-surface-variant group-hover:hidden">1</div>
<div class="hidden group-hover:flex justify-center text-primary">
<span class="material-symbols-outlined text-xl" data-icon="play_arrow" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
</div>
<div class="flex flex-col">
<span class="text-on-surface font-medium">Digital Horizon</span>
<span class="text-xs text-on-surface-variant">Neon Specter</span>
</div>
<div class="hidden md:block text-on-surface-variant text-sm">2,485,901</div>
<div class="flex justify-end items-center gap-4">
<span class="material-symbols-outlined text-primary text-lg opacity-0 group-hover:opacity-100 transition-opacity" data-icon="favorite" style="font-variation-settings: 'FILL' 1;">favorite</span>
<span class="text-on-surface-variant text-sm">4:12</span>
</div>
</div>
<!-- Track 2 -->
<div class="grid grid-cols-[40px_1fr_1fr_100px] gap-4 px-4 py-3 rounded-DEFAULT hover:bg-surface-container transition-colors group cursor-pointer items-center">
<div class="flex justify-center text-on-surface-variant group-hover:hidden">2</div>
<div class="hidden group-hover:flex justify-center text-primary">
<span class="material-symbols-outlined text-xl" data-icon="play_arrow" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
</div>
<div class="flex flex-col">
<span class="text-on-surface font-medium">Void Echoes</span>
<span class="text-xs text-on-surface-variant">Neon Specter</span>
</div>
<div class="hidden md:block text-on-surface-variant text-sm">1,920,442</div>
<div class="flex justify-end items-center gap-4">
<span class="material-symbols-outlined text-on-surface-variant text-lg opacity-0 group-hover:opacity-100 transition-opacity" data-icon="favorite">favorite</span>
<span class="text-on-surface-variant text-sm">3:58</span>
</div>
</div>
<!-- Track 3 (Active State) -->
<div class="grid grid-cols-[40px_1fr_1fr_100px] gap-4 px-4 py-3 rounded-DEFAULT bg-surface-container/50 group cursor-pointer items-center">
<div class="flex justify-center text-primary">
<span class="material-symbols-outlined text-xl animate-pulse" data-icon="equalizer">equalizer</span>
</div>
<div class="flex flex-col">
<span class="text-primary font-bold">Midnight Pulsar</span>
<span class="text-xs text-on-surface-variant">Neon Specter</span>
</div>
<div class="hidden md:block text-on-surface-variant text-sm">4,551,029</div>
<div class="flex justify-end items-center gap-4">
<span class="material-symbols-outlined text-primary text-lg" data-icon="favorite" style="font-variation-settings: 'FILL' 1;">favorite</span>
<span class="text-on-surface-variant text-sm font-bold">5:24</span>
</div>
</div>
<!-- Track 4 -->
<div class="grid grid-cols-[40px_1fr_1fr_100px] gap-4 px-4 py-3 rounded-DEFAULT hover:bg-surface-container transition-colors group cursor-pointer items-center">
<div class="flex justify-center text-on-surface-variant group-hover:hidden">4</div>
<div class="hidden group-hover:flex justify-center text-primary">
<span class="material-symbols-outlined text-xl" data-icon="play_arrow" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
</div>
<div class="flex flex-col">
<span class="text-on-surface font-medium">Cybernetic Dreams</span>
<span class="text-xs text-on-surface-variant">Neon Specter, Luna Vane</span>
</div>
<div class="hidden md:block text-on-surface-variant text-sm">822,110</div>
<div class="flex justify-end items-center gap-4">
<span class="material-symbols-outlined text-on-surface-variant text-lg opacity-0 group-hover:opacity-100 transition-opacity" data-icon="favorite">favorite</span>
<span class="text-on-surface-variant text-sm">4:45</span>
</div>
</div>
<!-- Track 5 -->
<div class="grid grid-cols-[40px_1fr_1fr_100px] gap-4 px-4 py-3 rounded-DEFAULT hover:bg-surface-container transition-colors group cursor-pointer items-center">
<div class="flex justify-center text-on-surface-variant group-hover:hidden">5</div>
<div class="hidden group-hover:flex justify-center text-primary">
<span class="material-symbols-outlined text-xl" data-icon="play_arrow" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
</div>
<div class="flex flex-col">
<span class="text-on-surface font-medium">Quartz Crystal</span>
<span class="text-xs text-on-surface-variant">Neon Specter</span>
</div>
<div class="hidden md:block text-on-surface-variant text-sm">644,902</div>
<div class="flex justify-end items-center gap-4">
<span class="material-symbols-outlined text-on-surface-variant text-lg opacity-0 group-hover:opacity-100 transition-opacity" data-icon="favorite">favorite</span>
<span class="text-on-surface-variant text-sm">3:22</span>
</div>
</div>
</div>
<div class="mt-12 text-on-surface-variant/60 text-xs px-4">
<p>© 2024 Vanta Music Group. All rights reserved.</p>
<p>Produced by Neon Specter at The Void Studios.</p>
</div>
</section>
<!-- More by Artist Section -->
<section class="px-8 mt-16">
<div class="flex justify-between items-end mb-6">
<h2 class="text-2xl font-bold">More by Neon Specter</h2>
<a class="text-sm font-bold text-on-surface-variant hover:text-white transition-colors" href="#">See discography</a>
</div>
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
<!-- Related 1 -->
<div class="bg-surface-container p-4 rounded-DEFAULT hover:bg-surface-container-highest transition-all group cursor-pointer">
<div class="aspect-square rounded-lg overflow-hidden mb-4 shadow-lg">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Modern geometric abstract cover art in vibrant cyan and dark textures" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAO9ju755wcgnTMEQC-Sy7G2WWd3u-q0Dsc_81Un0oYR75d-OvMfQ4ZI0Qnwauzgl5Hoc0m2-EgveLYHuKOL0jAEDohlHOXnV2hw72qflV5Vg2LoB6d_dAiWFZQuVOYzrIaW6zQJIXqSBYQLBlVqRx5hQwewjqZ0OtYRTVBcEIBoamJ9ZlCyTGRtYbeDIEvTpfQQW8KSebIvskC3m2KSzMCYQYxAAA5d7tQx-ZoOTaKsu7og_9yBYI9gUAbLZBIQ8meVWhKgWq4rEv7"/>
</div>
<h3 class="font-bold truncate">Neon City</h3>
<p class="text-sm text-on-surface-variant">2022 • Album</p>
</div>
<!-- Related 2 -->
<div class="bg-surface-container p-4 rounded-DEFAULT hover:bg-surface-container-highest transition-all group cursor-pointer">
<div class="aspect-square rounded-lg overflow-hidden mb-4 shadow-lg">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Futuristic sci-fi inspired album art with dark atmospheric mountain shapes and a green laser horizon" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCL2kEeNNtkxi3PDjLe_pFJtPHu2VR92W2Bvcr-b_8xG7zuvquh6DhF-aq52Oi7ExX1WBUm8c-DcDi5iebc1VteAgt37xoZ5qUlxoUJ2Lrw-QpcwQ8ggtWh-iOW09YWSuUGVPOvDdl6rF3lir1CCmJtuuxpVsPHns1xH1vUFEJMoQCCzrYAaH2rctyAAWTZcsEOHX0oPaUmtqRRGMj4hbuJAYAPY85T9bvNYLhJSh1qs42kOToUE9dbMLM4gS1UKZK1OvhrVHPgK3Qi"/>
</div>
<h3 class="font-bold truncate">Static Pulse</h3>
<p class="text-sm text-on-surface-variant">2021 • EP</p>
</div>
<!-- Related 3 -->
<div class="bg-surface-container p-4 rounded-DEFAULT hover:bg-surface-container-highest transition-all group cursor-pointer">
<div class="aspect-square rounded-lg overflow-hidden mb-4 shadow-lg">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Minimalist abstract art with fluid waves of black and subtle neon green highlights" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-aP3AdRSAP9A7IXj7SPYz_oGSlUN5loomVMj-EdUAJVZyvbkMeaWgSyyiZ3J8ezYcXmDnwB108zOPLNIBoxsB4Cv9WpqtbmYKK8YesuKvDBjTddhjOVtcbFkktSYRWBm-Wa6KCEjPHzCYiGtT_tmJdfr29x8L6E609PgVcm9d5DatCryCJ4NXmOwvOIc3wGP5rHH8eP7Y8VUXHL0FWAt8pVMIgETefqMEGyVXwjinD9tBHHYBy3epXSaaqu7m9NRa4ZAJKjAj14-L"/>
</div>
<h3 class="font-bold truncate">Glow in the Dark</h3>
<p class="text-sm text-on-surface-variant">2023 • Single</p>
</div>
</div>
</section>
</main>
<!-- BottomNavBar / Player Bar Shell -->
<footer class="fixed bottom-0 w-full h-24 z-50 bg-[#1a1a1a]/60 backdrop-blur-xl flex justify-between items-center px-6 shadow-[0_-4px_40px_rgba(0,0,0,0.5)] font-['Plus_Jakarta_Sans']">
<!-- Now Playing Info -->
<div class="flex items-center gap-4 w-1/3">
<div class="w-14 h-14 rounded-md overflow-hidden shrink-0 shadow-lg">
<img class="w-full h-full object-cover" data-alt="Thumbnail of the Midnight Pulsar album cover art" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDelwfcYpPUybndzY1oBr6kmJrBjqHTyqFo1GYF6HxtqiLFiUWIHx4tlZiAY54GL56Yw_n13i0rK4Qz-flHj3GXlikmKauo8-1_NuFS5-sE1_mmKEIxZLHJz4KrZBprgH5oJ_mU5NBlPvCWcsYvCNssQnpql25t1FLrLQKPVSaHlDB-Gy10uDPwb4gKdX5KNP-uWsBkMW0PPxpoLBQEvHAIPCzHGu0pBrobVlsgTiSWUcnez-AQAzm5yrWrcXUUCqXIqUt78ukAMsac"/>
</div>
<div class="flex flex-col">
<span class="text-sm font-bold text-white hover:underline cursor-pointer">Midnight Pulsar</span>
<span class="text-xs text-[#adaaaa] hover:underline cursor-pointer">Neon Specter</span>
</div>
<button class="text-[#1ED760] ml-2">
<span class="material-symbols-outlined text-xl" data-icon="favorite" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
</div>
<!-- Player Controls -->
<div class="flex flex-col items-center gap-2 w-1/3">
<div class="flex items-center gap-6">
<button class="text-[#adaaaa] hover:text-white"><span class="material-symbols-outlined" data-icon="shuffle">shuffle</span></button>
<button class="text-[#adaaaa] hover:text-white"><span class="material-symbols-outlined" data-icon="skip_previous" style="font-variation-settings: 'FILL' 1;">skip_previous</span></button>
<button class="w-10 h-10 bg-white text-black rounded-full flex items-center justify-center hover:scale-105 active:scale-95 transition-transform">
<span class="material-symbols-outlined" data-icon="pause" style="font-variation-settings: 'FILL' 1;">pause</span>
</button>
<button class="text-[#adaaaa] hover:text-white"><span class="material-symbols-outlined" data-icon="skip_next" style="font-variation-settings: 'FILL' 1;">skip_next</span></button>
<button class="text-[#adaaaa] hover:text-white"><span class="material-symbols-outlined" data-icon="repeat">repeat</span></button>
</div>
<div class="flex items-center gap-2 w-full max-w-md">
<span class="text-[10px] text-[#adaaaa] w-10 text-right">2:31</span>
<div class="flex-1 h-1 bg-surface-container-highest rounded-full overflow-hidden relative group cursor-pointer">
<div class="absolute left-0 top-0 h-full bg-[#1ED760] w-[45%]"></div>
<div class="absolute left-[45%] top-1/2 -translate-y-1/2 w-3 h-3 bg-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
</div>
<span class="text-[10px] text-[#adaaaa] w-10">5:24</span>
</div>
</div>
<!-- Utility Controls -->
<div class="flex items-center justify-end gap-4 w-1/3">
<button class="text-[#adaaaa] hover:text-white"><span class="material-symbols-outlined text-xl" data-icon="mic">mic</span></button>
<button class="text-[#adaaaa] hover:text-white"><span class="material-symbols-outlined text-xl" data-icon="queue_music">queue_music</span></button>
<button class="text-[#adaaaa] hover:text-white"><span class="material-symbols-outlined text-xl" data-icon="devices">devices</span></button>
<div class="flex items-center gap-2 w-24">
<span class="material-symbols-outlined text-xl text-[#adaaaa]" data-icon="volume_up">volume_up</span>
<div class="flex-1 h-1 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-white w-3/4"></div>
</div>
</div>
</div>
</footer>
</body></html>