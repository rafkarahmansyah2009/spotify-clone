<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-background text-on-surface selection:bg-primary selection:text-on-primary">
    <!-- SideNavBar Shell -->
    <aside
        class="h-full w-64 fixed left-0 top-0 bg-[#0e0e0e] font-['Plus_Jakarta_Sans'] tracking-tight flex flex-col p-6 gap-4 z-50 hidden md:flex">
        <div class="text-2xl font-bold text-[#1ED760] mb-8">Sonic Minimalist</div>
        <nav class="flex flex-col gap-2">
            <a class="flex items-center gap-4 p-3 text-white font-bold hover:bg-[#1a1a1a] rounded-lg transition-all duration-300 ease-in-out"
                href="{{ route('home') }}">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
                <span>Home</span>
            </a>
            <a class="flex items-center gap-4 p-3 text-[#adaaaa] hover:text-white hover:bg-[#1a1a1a] rounded-lg transition-all duration-300 ease-in-out"
                href="{{ route('search') }}">
                <span class="material-symbols-outlined">search</span>
                <span>Search</span>
            </a>
            <a class="flex items-center gap-4 p-3 text-[#adaaaa] hover:text-white hover:bg-[#1a1a1a] rounded-lg transition-all duration-300 ease-in-out"
                href="{{ route('library') }}">
                <span class="material-symbols-outlined">library_music</span>
                <span>Library</span>
            </a>
        </nav>
        <div class="mt-8">
            <form method="POST" action="{{ route('playlist.store') }}" class="contents">
                @csrf
                <button type="submit"
                    class="w-full py-3 bg-surface-container-highest text-white rounded-full font-bold hover:scale-105 transition-transform flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">add</span>
                    Create Playlist
                </button>
            </form>
        </div>
        <div class="mt-auto opacity-40 text-xs flex flex-col gap-2">
            <p>Cookies</p>
            <p>Privacy Policy</p>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="md:ml-64 min-h-screen pb-32">
        <!-- TopAppBar Shell -->
        <header
            class="fixed top-0 right-0 w-full md:w-[calc(100%-16rem)] z-40 bg-[#0e0e0e]/60 backdrop-blur-xl flex justify-between items-center px-8 h-16 font-['Plus_Jakarta_Sans'] transition-all">
            <div class="flex items-center gap-4 flex-1 max-w-xl">
                <div class="relative w-full">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">search</span>
                    <input
                        class="w-full bg-surface-container-high border-none rounded-full py-2 pl-10 text-sm focus:bg-surface-bright focus:ring-1 focus:ring-primary/20 transition-all placeholder:text-on-surface-variant"
                        placeholder="Search for tracks, artists..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-6">
                <button class="text-white hover:opacity-80 transition-all"><span
                        class="material-symbols-outlined">notifications</span></button>
                <button class="text-white hover:opacity-80 transition-all"><span
                        class="material-symbols-outlined">settings</span></button>
                <div class="h-8 w-8 rounded-full overflow-hidden bg-surface-container-highest">
                    <img alt="User Profile" class="h-full w-full object-cover"
                        data-alt="portrait of a young professional man with a friendly expression, clean minimalist studio background, soft natural lighting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDokvAe2vz5egph0yTo6f41D4jkY1M8AfkA_ijS1YyQM9aN3CHQP5CoBa9NL349mq5cLQE7IX_xcinlHBHiFPbMw4LwXACky9MN1k59D1IAlVn3XXUtCN7b3i3byRf5HE9NPoS6NzCouH3vKbIWAAvn2heqE-fuMTITvPkOXwqWxooSyPaFmcrasvOC3oaorlb_RRdNBTJ3fW561UFKnGVZnY6riIFu034xgk_OozSX-KjAfGhPeVyzBvv16XkeS0Cvt45aIW2-SxGk" />
                </div>
            </div>
        </header>
        <!-- Content Area -->
        <div class="px-8 pt-24">
            <!-- Hero Gradient Background -->
            <div
                class="fixed inset-0 -z-10 bg-[radial-gradient(circle_at_20%_20%,_rgba(87,254,129,0.08)_0%,_transparent_50%)]">
            </div>
            <!-- Good Morning Section (Bento Grid) -->
            <section class="mb-12">
                <h1 class="text-3xl font-extrabold tracking-tight mb-6">Good Morning</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Quick Access Cards -->
                    <div
                        class="flex items-center bg-surface-container hover:bg-surface-container-highest rounded transition-colors group cursor-pointer overflow-hidden">
                        <div class="h-20 w-20 flex-shrink-0">
                            <img alt="Liked Songs" class="h-full w-full object-cover"
                                data-alt="vibrant abstract digital art with neon swirls of green and blue, high energy visual representation of electronic music"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKv05SnD7uNkVe4fZO3It1M1V1aSS6JVNIbuf_y9CAbfCMbd9MYRIiaKlwUjyeUXQb78tuh7dYBsQPBK-HRYuxdMHlCCvojxj1-Vsz7ot4AcvagjZ9g5l4FD0gAi4gGSv4UWB_Im9wW_m0YgGpcCVnrX-6y3vBT8RIFj3nTQm5rIvkDZRNlalW8nS-DAxYE6gfch034Bp9jsFLJ9X0fDqP9htzxY0iNf_xdrQTUxFCdAHrOpb9ADNfmMOVNP7fBCuGBV03gJeSKLJO" />
                        </div>
                        <div class="px-4 flex-1 flex justify-between items-center">
                            <span class="font-bold text-on-surface">Liked Songs</span>
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-all transform translate-y-2 group-hover:translate-y-0 h-10 w-10 rounded-full bg-primary flex items-center justify-center shadow-lg">
                                <span class="material-symbols-outlined text-on-primary"
                                    style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex items-center bg-surface-container hover:bg-surface-container-highest rounded transition-colors group cursor-pointer overflow-hidden">
                        <div class="h-20 w-20 flex-shrink-0">
                            <img alt="Daily Mix" class="h-full w-full object-cover"
                                data-alt="warm jazz club atmosphere with a close-up of a vintage saxophone, soft bokeh lights in background, moody cinematic lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2_VyC9Scaw94DBd6ao1RRk-aqG3LlZIjkB_mg5vMKeslOhvsVzDDuGACKobZgMqZVUspRM4oLxnjiyd95KfQdVFes39sDUV1pQB9uUA83OYJUiW3Kd0CFLjgHo1iYVzeTqu2Pk-tqOQFdEol9zsaHK__4957Gd6eV4NYl6WIFuMEUnfmJCXWh0WskvihJT9TcYgw3_c70ydlz7hUsBXdaneKWdoTBS9bztmoTBz1KfNilfH8w2o9sxgvD5gXje6pyWHPzTzxHayWr" />
                        </div>
                        <div class="px-4 flex-1 flex justify-between items-center">
                            <span class="font-bold text-on-surface">Daily Mix 1</span>
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-all transform translate-y-2 group-hover:translate-y-0 h-10 w-10 rounded-full bg-primary flex items-center justify-center shadow-lg">
                                <span class="material-symbols-outlined text-on-primary"
                                    style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex items-center bg-surface-container hover:bg-surface-container-highest rounded transition-colors group cursor-pointer overflow-hidden">
                        <div class="h-20 w-20 flex-shrink-0">
                            <img alt="Release Radar" class="h-full w-full object-cover"
                                data-alt="sleek modern architecture detail with sharp angles and dramatic shadows, minimalist black and white aesthetic"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvmRM7St8JnZhAnaGJTDEv9fa7uUbh9Tv0PCd__FBy4jF-qZmPVRogjAxB0DtUOYcn720zqxA5_cgLynnP28IICph4ejCLxN6m8gU0ngmcbldOutj0eoAR_XTY8DLVbGhCJxXzMmhGHA7ymDy5Dx31rgVXOgkEDK5xW0LWTm8es9ou8y4assIHeoEtj4o2lJg1oxx-UcEOucrGWJrIIitx1_kfUW_f8053Xkcaf4Rod6O32dTDkUXQ8ZfvsyukCcMGx4kKTWxCrj5h" />
                        </div>
                        <div class="px-4 flex-1 flex justify-between items-center">
                            <span class="font-bold text-on-surface">Release Radar</span>
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-all transform translate-y-2 group-hover:translate-y-0 h-10 w-10 rounded-full bg-primary flex items-center justify-center shadow-lg">
                                <span class="material-symbols-outlined text-on-primary"
                                    style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Made For You Section (Horizontal Carousel) -->
            <section class="mb-12">
                <div class="flex justify-between items-end mb-6">
                    <div>
                        <h2 class="text-2xl font-bold tracking-tight">Made For You</h2>
                        <p class="text-on-surface-variant text-sm">Personalized picks based on your recent listening.
                        </p>
                    </div>
                    <a class="text-sm font-bold text-on-surface-variant hover:underline uppercase tracking-widest text-[10px]"
                        href="#">Show all</a>
                </div>
                <div class="flex gap-6 overflow-x-auto hide-scrollbar -mx-2 px-2 pb-4">

                    <!-- Carousel Items -->
                    @foreach ($playlists as $playlist)
                        <a href="{{ route('library') }}"
                            class="flex-shrink-0 w-48 bg-surface-container-low p-4 rounded-xl hover:bg-surface-container transition-all cursor-pointer group block">
                            <div class="relative aspect-square mb-4 rounded-lg overflow-hidden shadow-2xl">
                                <img alt="{{ $playlist->name }}"
                                    class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="{{ $playlist->cover_url }}" />
                                <button
                                    class="absolute bottom-2 right-2 h-12 w-12 rounded-full bg-primary flex items-center justify-center shadow-xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                    <span class="material-symbols-outlined text-on-primary text-3xl"
                                        style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                                </button>
                            </div>
                            <h3 class="font-bold text-on-surface truncate">{{ $playlist->name }}</h3>
                            <p class="text-on-surface-variant text-sm mt-1 line-clamp-2">{{ $playlist->description }}
                            </p>
                        </a>
                    @endforeach
                </div>
        </div>
        </section>
        <!-- Recently Played Section (Bento Elements) -->
        <section class="mb-12">
            <div class="flex justify-between items-end mb-6">
                <h2 class="text-2xl font-bold tracking-tight">Recently Played</h2>
                <a class="text-sm font-bold text-on-surface-variant hover:underline uppercase tracking-widest text-[10px]"
                    href="#">See activity</a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach ($albums as $album)
                    <a href="{{ route('album') }}" class="group cursor-pointer block">
                        <div class="aspect-square rounded-lg overflow-hidden mb-3 shadow-lg">
                            <img alt="Album Cover" class="h-full w-full object-cover"
                                src="{{ $album->cover_url }}" />
                        </div>
                        <p class="font-bold truncate">{{ $album->title }}</p>
                        <p class="text-xs text-on-surface-variant">{{ $album->type }} • {{ $album->genre }}</p>
                    </a>
                @endforeach
            </div>
        </section>
        </div>
    </main>
    <!-- BottomNavBar / PlayerBar Shell -->
    <footer
        class="fixed bottom-0 w-full h-24 z-50 bg-[#1a1a1a]/60 backdrop-blur-[20px] flex justify-between items-center px-6 shadow-[0_-4px_40px_rgba(0,0,0,0.5)] font-['Plus_Jakarta_Sans'] text-sm">
        <!-- Now Playing Track Info -->
        <div class="flex items-center gap-4 w-1/3">
            <div class="h-14 w-14 rounded overflow-hidden shadow-lg">
                <img alt="Now Playing" class="h-full w-full object-cover"
                    data-alt="vibrant abstract digital art with neon swirls of green and blue, music visualization aesthetic"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDs1uJ7x_aftQfkVgEtFYuXJZ5hbmN1DNVggsxvhD3acGUKe9rYjjC9VwjgEOsSySSFDATirBXtcF2TsGiTNCxVitVTOc1KYpar9oFeinlu43nzpMacEGMqTtPPKKMCkwUzVvhF0nLv2wa58vHwyZwv0MVlXBTUYFFEq1OGq9p77f63LA1URojM1Qf2Q7vg9s3Kl72Iump_-9W974kRh0cgPxo1Nl8eydfO5r1w09t5HNZZ0A7pWJL9AWybSYzJHpc3qetFASmnh46Q" />
            </div>
            <div>
                <p class="font-bold text-white hover:underline cursor-pointer">Starlight Melodies</p>
                <p class="text-on-surface-variant text-xs hover:underline hover:text-white cursor-pointer">The
                    Minimalists</p>
            </div>
            <button class="text-on-surface-variant hover:text-primary transition-colors ml-2">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">favorite</span>
            </button>
        </div>
        <!-- Player Controls -->
        <div class="flex flex-col items-center gap-2 w-1/3">
            <div class="flex items-center gap-6">
                <button class="text-on-surface-variant hover:text-white transition-colors"><span
                        class="material-symbols-outlined text-lg">shuffle</span></button>
                <button class="text-white hover:text-white transition-colors"><span
                        class="material-symbols-outlined">skip_previous</span></button>
                <button
                    class="h-10 w-10 rounded-full bg-white text-black flex items-center justify-center hover:scale-105 active:scale-95 transition-all">
                    <span class="material-symbols-outlined"
                        style="font-variation-settings: 'FILL' 1;">play_circle</span>
                </button>
                <button class="text-white hover:text-white transition-colors"><span
                        class="material-symbols-outlined">skip_next</span></button>
                <button class="text-on-surface-variant hover:text-white transition-colors"><span
                        class="material-symbols-outlined text-lg">repeat</span></button>
            </div>
            <div class="flex items-center gap-2 w-full max-w-md">
                <span class="text-[10px] text-on-surface-variant">1:24</span>
                <div class="flex-1 h-1 bg-surface-container-highest rounded-full overflow-hidden group cursor-pointer">
                    <div class="h-full bg-primary w-1/3 group-hover:bg-primary-container relative">
                        <div
                            class="absolute right-0 top-1/2 -translate-y-1/2 h-3 w-3 bg-white rounded-full opacity-0 group-hover:opacity-100">
                        </div>
                    </div>
                </div>
                <span class="text-[10px] text-on-surface-variant">3:45</span>
            </div>
        </div>
        <!-- Secondary Controls -->
        <div class="flex items-center justify-end gap-4 w-1/3">
            <button class="text-on-surface-variant hover:text-white transition-colors"><span
                    class="material-symbols-outlined text-lg">mic</span></button>
            <button class="text-on-surface-variant hover:text-white transition-colors"><span
                    class="material-symbols-outlined text-lg">queue_music</span></button>
            <button class="text-on-surface-variant hover:text-white transition-colors"><span
                    class="material-symbols-outlined text-lg">devices</span></button>
            <div class="flex items-center gap-2 w-24">
                <span class="material-symbols-outlined text-on-surface-variant text-lg">volume_up</span>
                <div class="flex-1 h-1 bg-surface-container-highest rounded-full overflow-hidden group cursor-pointer">
                    <div class="h-full bg-on-surface-variant w-1/2 group-hover:bg-primary"></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Mobile Navigation (visible only on small screens) -->
    <nav
        class="md:hidden fixed bottom-24 left-4 right-4 h-16 bg-surface-container/90 backdrop-blur-xl rounded-full border border-outline-variant/10 flex justify-around items-center px-6 z-50">
        <a class="text-[#1ED760] flex flex-col items-center gap-1" href="{{ route('home') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
            <span class="text-[10px] font-bold">Home</span>
        </a>
        <a class="text-white flex flex-col items-center gap-1" href="{{ route('search') }}">
            <span class="material-symbols-outlined">search</span>
            <span class="text-[10px]">Search</span>
        </a>
        <a class="text-white flex flex-col items-center gap-1" href="{{ route('library') }}">
            <span class="material-symbols-outlined">library_music</span>
            <span class="text-[10px]">Library</span>
        </a>
    </nav>
</body>

</html>
