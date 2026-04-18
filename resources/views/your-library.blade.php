<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sonic Minimalist - Library</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-background text-on-background selection:bg-primary selection:text-on-primary">
    <!-- SideNavBar Shell -->
    <aside
        class="hidden md:flex h-full w-64 fixed left-0 top-0 bg-[#0e0e0e] flex-col p-6 gap-4 font-['Plus_Jakarta_Sans'] tracking-tight z-50">
        <div class="text-2xl font-bold text-[#1ED760] mb-8">Sonic Minimalist</div>
        <nav class="flex flex-col gap-2">
            <a class="flex items-center gap-4 p-3 rounded-lg text-[#adaaaa] hover:text-white transition-colors hover:bg-[#1a1a1a]"
                href="{{ route('home') }}">
                <span class="material-symbols-outlined">home</span>
                <span class="font-medium">Home</span>
            </a>
            <a class="flex items-center gap-4 p-3 rounded-lg text-[#adaaaa] hover:text-white transition-colors hover:bg-[#1a1a1a]"
                href="{{ route('search') }}">
                <span class="material-symbols-outlined">search</span>
                <span class="font-medium">Search</span>
            </a>
            <!-- Active State: Library -->
            <a class="flex items-center gap-4 p-3 rounded-lg bg-[#1a1a1a] text-white font-bold transition-all duration-300 ease-in-out"
                href="{{ route('library') }}">
                <span class="material-symbols-outlined">library_music</span>
                <span class="font-medium">Library</span>
            </a>
        </nav>
        <div class="mt-8 flex flex-col gap-4">
            <form method="POST" action="{{ route('playlist.store') }}" class="contents">
                @csrf
                <button type="submit"
                    class="bg-primary text-on-primary py-3 px-6 rounded-full font-bold hover:scale-105 transition-transform">
                    Create Playlist
                </button>
            </form>
        </div>
    </aside>
    <!-- TopAppBar Shell -->
    <header
        class="fixed top-0 right-0 w-full md:w-[calc(100%-16rem)] z-40 bg-[#0e0e0e]/60 backdrop-blur-xl flex justify-between items-center px-8 h-16 transition-all">
        <div class="flex items-center gap-4 w-1/3">
            <div class="relative w-full max-w-sm">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">search</span>
                <input
                    class="w-full bg-surface-container-high border-none rounded-full pl-10 py-1.5 text-sm focus:ring-0 focus:bg-surface-bright transition-colors placeholder:text-on-surface-variant"
                    placeholder="Search in Library" type="text" />
            </div>
        </div>
        <div class="flex items-center gap-6">
            <form method="POST" action="{{ route('playlist.store') }}" class="contents">
                @csrf
                <button type="submit" class="text-white hover:opacity-80 transition-all">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <button class="text-white hover:opacity-80 transition-all">
                    <span class="material-symbols-outlined">settings</span>
                </button>
                <div class="h-8 w-8 rounded-full bg-surface-container overflow-hidden">
                    <img alt="User Profile" class="w-full h-full object-cover"
                        data-alt="close-up portrait of a stylish young professional with soft lighting and a minimalist background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDz8YURcRJOTJ2zmgRCfafC1Vi-vFeD-7ZDGERjOB-0579RppYkNptyFVQDKDzVqtt6WMVR7xAeIT0SWyBwJlKeA2i1ZFdVlvDVNpLQp5QQQEU92jNkYMjffxPb4zPm1Sli9FcRDnPX3kwNt98VTtAT9l1gIcL_8HSlFSrjpjv7i6yeDtU34w8m0NF0HoJcxop30gef8GIrApR1Fryr6Tv_Zm30fiykbntGIGAvEE7pTI1a_9E9VvleSUrHbQdFdLn-L8Ol6CQCIFrJ" />
                </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="md:ml-64 pt-24 pb-32 px-8 min-h-screen">
        <!-- Header & Tabs -->
        <section class="mb-12">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <h1 class="text-5xl font-extrabold tracking-tight text-on-surface mb-2">Your Library</h1>
                    <p class="text-on-surface-variant">All your music and favorites in one place.</p>
                </div>
            </div>
            <!-- Custom Tabs Navigation -->
            <div class="flex items-center gap-3 mt-10">
                <button
                    class="px-5 py-2 rounded-full bg-surface-container-highest text-primary font-semibold text-sm">Playlists</button>
                <button
                    class="px-5 py-2 rounded-full bg-surface-container-low text-on-surface-variant hover:text-white transition-colors text-sm font-medium">Artists</button>
                <button
                    class="px-5 py-2 rounded-full bg-surface-container-low text-on-surface-variant hover:text-white transition-colors text-sm font-medium">Albums</button>
                <button
                    class="px-5 py-2 rounded-full bg-surface-container-low text-on-surface-variant hover:text-white transition-colors text-sm font-medium">Podcasts</button>
            </div>
        </section>
        <!-- Bento Grid Content -->
        <section class="grid grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            <!-- Featured: Liked Songs -->
<div class="col-span-2 row-span-1 p-6 rounded-lg bg-gradient-to-br from-[#4410a8] to-[#9167e8] flex flex-col justify-between group cursor-pointer relative overflow-hidden">
<div class="absolute -right-4 -bottom-4 w-32 h-32 opacity-20 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[8rem]" style="font-variation-settings: 'FILL' 1;">favorite</span>
</div>
<div class="space-y-4 relative z-10">
<p class="text-sm font-bold uppercase tracking-widest text-white/80">Collection</p>
<h2 class="text-3xl font-extrabold text-white">Liked Songs</h2>
</div>
<p class="text-white/90 font-medium relative z-10">342 songs</p>
</div>

@foreach($playlists as $playlist)
<!-- Playlist Item -->
<div class="bg-surface-container-low p-4 rounded-lg group hover:bg-surface-container transition-all duration-300 relative">
    <div class="aspect-square w-full rounded-md overflow-hidden mb-4 bg-surface-container shadow-lg">
        <img alt="{{ $playlist->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform" src="{{ $playlist->cover_url }}"/>
    </div>
    <h3 class="font-bold text-on-surface group-hover:text-primary transition-colors truncate">{{ $playlist->name }}</h3>
    <p class="text-sm text-on-surface-variant truncate">{{ $playlist->description }}</p>
    
    <!-- Delete Button -->
    <form method="POST" action="{{ route('playlist.destroy', $playlist->id) }}" class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
        @csrf
        @method('DELETE')
        <button type="submit" class="w-8 h-8 rounded-full bg-error text-white flex items-center justify-center hover:scale-110 transition-transform" title="Delete Playlist" onclick="return confirm('Are you sure you want to delete this playlist?')">
            <span class="material-symbols-outlined text-sm">delete</span>
        </button>
    </form>
</div>
@endforeach

<!-- Empty State / Add New Card -->
<form method="POST" action="{{ route('playlist.store') }}" class="contents">
    @csrf
    <button type="submit" class="bg-surface-container-low p-4 rounded-lg border-2 border-dashed border-outline-variant/20 flex flex-col items-center justify-center gap-3 group hover:border-primary/50 transition-all min-h-[240px]">
        <div class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center text-on-surface-variant group-hover:text-primary transition-colors">
            <span class="material-symbols-outlined text-3xl">add</span>
        </div>
        <p class="text-sm font-semibold text-on-surface-variant group-hover:text-white transition-colors">Create Playlist</p>
    </button>
</form>
</section>
    </main>
    <!-- BottomNavBar / Player Bar Shell -->
    <footer
        class="fixed bottom-0 w-full h-24 z-50 bg-[#1a1a1a]/60 backdrop-blur-[20px] flex justify-between items-center px-6 shadow-[0_-4px_40px_rgba(0,0,0,0.5)] font-['Plus_Jakarta_Sans'] text-sm">
        <!-- Currently Playing -->
        <div class="flex items-center gap-4 w-[30%]">
            <div class="w-14 h-14 rounded bg-surface-container-highest overflow-hidden">
                <img alt="Neon Nights" class="w-full h-full object-cover"
                    data-alt="Minimalist digital art featuring neon green geometric shapes against a dark charcoal void"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuADStUtXUvkFtDV9P7r_UAVdZ3SUg_dVx8zsLejPdXnoIUMulr_atQVeKVsMsBXb1NxYi9RwZpJWGspnvLSAOQ_pxEDaTv1_M_UhJTL6zEPhSU3Gl-UdenBe8s4g_0JwMfcMufc5VU5qSpLp6EE29e2-iyWKRpgQQ-3ivSvs23dYeTsPeVBH5GSiM1C_nIk_MCP1B9YKRoQzFHSu5U1FlggBZY6buienTL2BmCmU_K2iuprbiCuZZV86RLRVSaCMdRWyGvSgdMJj37u" />
            </div>
            <div>
                <h4 class="text-on-surface font-bold truncate">Neon Nights</h4>
                <p class="text-xs text-on-surface-variant truncate">The Synthesists</p>
            </div>
            <button class="ml-2 text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-xl">favorite</span>
            </button>
            </form>
        </div>
        <!-- Player Controls -->
        <div class="flex flex-col items-center gap-2 w-[40%]">
            <div class="flex items-center gap-6">
                <button class="text-on-surface-variant hover:text-white transition-colors">
                    <span class="material-symbols-outlined">shuffle</span>
                </button>
                <button class="text-on-surface hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">skip_previous</span>
                </button>
                <button
                    class="w-10 h-10 rounded-full bg-on-surface text-background flex items-center justify-center hover:scale-110 active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-3xl"
                        style="font-variation-settings: 'FILL' 1;">play_circle</span>
                </button>
                <button class="text-on-surface hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">skip_next</span>
                </button>
                <button class="text-on-surface-variant hover:text-white transition-colors">
                    <span class="material-symbols-outlined">repeat</span>
                </button>
            </div>
            <div class="w-full flex items-center gap-2 text-[10px] text-on-surface-variant">
                <span>1:24</span>
                <div class="h-1 flex-1 bg-surface-container rounded-full overflow-hidden">
                    <div class="h-full bg-primary w-1/3 rounded-full"></div>
                </div>
                <span>3:45</span>
            </div>
        </div>
        <!-- Extra Actions -->
        <div class="flex items-center justify-end gap-4 w-[30%] text-on-surface-variant">
            <button class="hover:text-primary transition-colors"><span
                    class="material-symbols-outlined">lyrics</span></button>
            <button class="hover:text-primary transition-colors"><span
                    class="material-symbols-outlined">queue_music</span></button>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-xl">volume_up</span>
                <div class="w-24 h-1 bg-surface-container rounded-full overflow-hidden">
                    <div class="h-full bg-on-surface-variant group-hover:bg-primary w-2/3 rounded-full"></div>
                </div>
            </div>
            <button class="hover:text-primary transition-colors"><span
                    class="material-symbols-outlined">fullscreen</span></button>
        </div>
    </footer>
    <!-- FAB for Create New (Mobile) -->
    <button
        class="md:hidden fixed bottom-28 right-6 w-14 h-14 bg-primary text-on-primary rounded-full shadow-lg flex items-center justify-center z-50 active:scale-90 transition-transform">
        <span class="material-symbols-outlined text-3xl">add</span>
    </button>
</body>

</html>
