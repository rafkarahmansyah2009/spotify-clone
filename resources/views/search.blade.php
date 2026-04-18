<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sonic Minimalist - Search</title>
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
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #262626;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #484847;
        }
    </style>
</head>

<body class="bg-background text-on-surface select-none">
    <!-- SideNavBar -->
    <aside
        class="h-full w-64 fixed left-0 top-0 bg-[#0e0e0e] flex flex-col p-6 gap-4 font-['Plus_Jakarta_Sans'] tracking-tight hidden md:flex z-50">
        <div class="text-2xl font-bold text-[#1ED760] mb-8">Sonic Minimalist</div>
        <nav class="flex flex-col gap-2">
            <a class="flex items-center gap-4 p-3 rounded-lg transition-colors text-[#adaaaa] hover:text-white hover:bg-[#1a1a1a]"
                href="{{ route('home') }}">
                <span class="material-symbols-outlined" data-icon="home">home</span>
                <span>Home</span>
            </a>
            <a class="flex items-center gap-4 p-3 rounded-lg transition-all duration-300 ease-in-out text-white font-bold bg-[#1a1a1a]"
                href="{{ route('search') }}">
                <span class="material-symbols-outlined" data-icon="search"
                    style="font-variation-settings: 'FILL' 1;">search</span>
                <span>Search</span>
            </a>
            <a class="flex items-center gap-4 p-3 rounded-lg transition-colors text-[#adaaaa] hover:text-white hover:bg-[#1a1a1a]"
                href="{{ route('library') }}">
                <span class="material-symbols-outlined" data-icon="library_music">library_music</span>
                <span>Library</span>
            </a>
        </nav>
        <div class="mt-8">
            <form method="POST" action="{{ route('playlist.store') }}" class="contents">
                @csrf
                <button type="submit"
                    class="w-full py-4 bg-primary text-on-primary font-bold rounded-full transition-transform active:scale-95">
                    Create Playlist
                </button>
            </form>
        </div>
    </aside>
    <!-- TopAppBar -->
    <header
        class="fixed top-0 right-0 w-full md:w-[calc(100%-16rem)] z-40 bg-[#0e0e0e]/60 backdrop-blur-xl flex justify-between items-center px-8 h-16 font-['Plus_Jakarta_Sans']">
        <div class="flex items-center gap-4 flex-1">
            <div class="relative w-full max-w-md group">
                <span
                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant group-focus-within:text-primary transition-colors"
                    data-icon="search">search</span>
                <input
                    class="w-full bg-surface-container-high border-none rounded-full py-2.5 pl-12 pr-4 text-sm focus:ring-1 focus:ring-primary/20 focus:bg-surface-bright transition-all placeholder:text-on-surface-variant/50"
                    placeholder="What do you want to play?" type="text" />
            </div>
        </div>
        <div class="flex items-center gap-6">
            <button class="text-white hover:opacity-80 transition-all">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <button class="text-white hover:opacity-80 transition-all">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
            </button>
            <div class="h-8 w-8 rounded-full overflow-hidden bg-surface-container border border-outline-variant/20">
                <img alt="User Profile" class="w-full h-full object-cover"
                    data-alt="Professional studio portrait of a young man with a slight smile and modern hairstyle, neutral clean background"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDcM5_CHflDueOa5Ul5vR9TyXBWTuMzFEgKDIPGGmRyo65nV7XnUgdVRiZ_evL9tP8a9M4jXK44Iir1sDbvsSGw04jX7E2wDgMJCVd4EpVU3ktkKn45QzRWjroDZQABHz1Q6bP0EhvOzz-40cb_GBzFyFWRxKNCV90s5B3f-KdXR8vShYp3vm3JwnVoe-8OayanYya2XhHWndjMxNVxeNTG0bgfnJo408qxELk4R546whhRbAGdjIUDjEIoPlSSLghsA74zBW3XD4T" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-0 md:ml-64 pt-24 pb-32 px-8 min-h-screen">
        <!-- Hero Section / Top Results (Asymmetric Layout) -->
        <section class="mb-12">
            <h2 class="text-3xl font-extrabold tracking-tight mb-8">Recent Searches</h2>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Main Result -->
                <div
                    class="md:col-span-5 bg-surface-container-low rounded-lg p-8 group hover:bg-surface-container transition-colors cursor-pointer relative overflow-hidden">
                    <div
                        class="absolute -right-12 -bottom-12 w-48 h-48 bg-primary/10 blur-3xl rounded-full group-hover:bg-primary/20 transition-all">
                    </div>
                    <div class="relative z-10">
                        <img alt="Top Result"
                            class="w-24 h-24 rounded-lg shadow-2xl mb-6 transition-transform group-hover:scale-105"
                            data-alt="Artistic album cover featuring abstract neon pulses of light against a deep velvet background, minimalist typography"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCk9GNeX_Hj0SPtvYy_BFGRVnejZvMlR_kTivjcam0QN0NkkxakvdXPVFH39zM7iMTbAeLhiUYGYOYCH_CorU3LPcz0c54gwJfGxw-QaIEkXuylFsOfmWxzUO-o93vTqqyAGZxpsbPYQiMWp_zEcfXRCG2KN67LEBkxShhaaQSolNBI1nAIeJrL0jJNNmN46ZPXNT5tPmbETt4CWYWihL6eQz2LAk8cCkTf8kAfF8D418hOjbOXtjj3JXWEsZbRv1eGQmGQX07nOf3m" />
                        <h3 class="text-4xl font-bold mb-2">Midnight Pulse</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-on-surface-variant">Artist</span>
                            <span class="w-1 h-1 rounded-full bg-on-surface-variant"></span>
                            <span
                                class="px-2 py-0.5 bg-surface-container-highest rounded text-xs font-bold uppercase tracking-widest">Playlist</span>
                        </div>
                    </div>
                </div>
                <!-- Mini Grid Results -->
                <div class="md:col-span-7 grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <div
                        class="bg-surface-container-low p-4 rounded-lg hover:bg-surface-container transition-colors cursor-pointer flex flex-col items-center text-center">
                        <img alt="Podcast" class="w-full aspect-square rounded-full mb-4 object-cover"
                            data-alt="Close-up of a vintage microphone in a dark moody studio with warm amber bokeh lights in background"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHqKQ7ONyETzlAmsyBnb1tWmMZdmaCt2-qTGzIoKLVIIz2xWoQbqFOOPrRoXHl7nJGxA6BSnFsbKH1M7m3vb_k6xGnBS09n5FsFLW35Smc6xFdqHPhQEo-28SYBYBy5-U2Y1HZA5WwGP3f9bNJusJT5dxjZrKJLcab2e8WzVhfKbZfsY_QsDmq4o2Wm8dMsfnMYG3NsryyNxYnTjbSOPe6oNVUybptzeswdrcV8hxPBhWeDSOIZqRaL6TQTp_P3yQfUCV93GGc5tk6" />
                        <span class="font-bold text-sm">Mindscape</span>
                        <span class="text-xs text-on-surface-variant">Podcast</span>
                    </div>
                    <div
                        class="bg-surface-container-low p-4 rounded-lg hover:bg-surface-container transition-colors cursor-pointer flex flex-col items-center text-center">
                        <img alt="Artist" class="w-full aspect-square rounded-full mb-4 object-cover"
                            data-alt="Professional audio mixer board with glowing green and red LEDs in a dark recording studio environment"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_QclWu4NylR-_t_NkzajVCVkwemlZtcAV584rgg9RgvkmqmVZPnAf7I3cHPhlUUrg7p75lplDuUn6PTH5DAgjiYC2QBZjhKL7QOpnpQdyc-7D3t4V8QLTgSANxmGLVuiNKCcb_iy9iVSH581cwIwd_yyYWxddiQUDfq8HTbXyZg1qmxd3j5kwf09qep9Nml5knjdLVoav-miv3F9PS1UQdZc94ue6HrzDcnxbmzqWHOFuKNGWoxI3POXdRXN5TG3iH6kdtL35upQv" />
                        <span class="font-bold text-sm">Neo Soul</span>
                        <span class="text-xs text-on-surface-variant">Artist</span>
                    </div>
                    <div
                        class="bg-surface-container-low p-4 rounded-lg hover:bg-surface-container transition-colors cursor-pointer flex flex-col items-center text-center">
                        <img alt="Radio" class="w-full aspect-square rounded-full mb-4 object-cover"
                            data-alt="Electronic music festival stage at night with intense green laser lights and a silhouetted crowd"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkCvWAG_c6HRAYQYw4Zx_3epY6A823B7hrplF1m9jLw0n00BCCIJUHUgeg9rdAL42hBgv_G8XEgMZ_AWrp1RlLgrckP00oNCLGKhfzcmDDWy43waIJwSyTeO8RsTfEfx9vJfrz756JhTY9RoF_w6-3krsSAyhwo_8VsWzqyQt9hbtRLHRSRCfGhxoZolgUpavjSdhWOy0SjRPSH4Nhoey8IrffOenBVxw_XkanOgcua1eNZKa4hMTZ-N6PEAsXu9K4zNpMhjJf1_a7" />
                        <span class="font-bold text-sm">Deep Techno</span>
                        <span class="text-xs text-on-surface-variant">Radio</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Browse All Grid -->
        <section>
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-extrabold tracking-tight">Browse all</h2>
                <button class="text-sm font-bold text-on-surface-variant hover:text-white transition-colors">See
                    all</button>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                <!-- Category Cards -->
                <div
                    class="h-48 rounded-lg bg-[#E13300] relative overflow-hidden group cursor-pointer p-4 transition-transform hover:scale-[1.02]">
                    <span class="text-2xl font-bold tracking-tight">Podcasts</span>
                    <img alt="Podcasts"
                        class="absolute -right-4 -bottom-2 w-28 h-28 rotate-[25deg] shadow-xl group-hover:rotate-[15deg] transition-transform"
                        data-alt="Modern sleek podcast microphone on a boom arm with vibrant studio lighting and pop filter"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBjyaCLWLmUxsZ_aQUhWe0qbG3ds_N75XYn-csFuYYxfD33wlwzLVtrej3vKzYvARG8gxrv9gz3yxLf1DRs_hlFsPrY6Ton8FGsWrNoJjlbUSs4hiFudto7_TcCmtWRX21SJA0qW2SCvFtdUppQ23sM5Nt7SsBR37EalPis2uYCsb9atYZSDrN1YYhdkjPmK7dGHHQc4TdC6sEZHZBJaMB5pB12EX9gwwyWbFKfEWyrtPc31J-02rtHOzfc9ufn0wArfNlHQmecA1u" />
                </div>
                <div
                    class="h-48 rounded-lg bg-[#1E3264] relative overflow-hidden group cursor-pointer p-4 transition-transform hover:scale-[1.02]">
                    <span class="text-2xl font-bold tracking-tight">Pop</span>
                    <img alt="Pop"
                        class="absolute -right-4 -bottom-2 w-28 h-28 rotate-[25deg] shadow-xl group-hover:rotate-[15deg] transition-transform"
                        data-alt="Dynamic shot of a pop singer on stage with colorful bright spotlights and stage fog"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFyo9K0i-Rhbt1ebiXJ3YlqaGJxueFrk2RNURb2PGzlOesplHTxa3O1BOWP1pQP2ftOFYvTwVgpiemH44Pm31TRRlATKaE93C86h1GPGrt9ifJj_qVFexPhKeunGhvf0nljnvcC4OwxqYL0FOpNuVkBAu0J9eXWqrd3GnopvacWoHk49i7UMGTr9r4wh-PBoGo1LeO6agH4DAS6H7Dz_jXGgrHx53SSIEkFOmLPaKHAu9FaKyVebN5jTpfdkacBBMOgIpxGFcliinx" />
                </div>
                <div
                    class="h-48 rounded-lg bg-[#E8115B] relative overflow-hidden group cursor-pointer p-4 transition-transform hover:scale-[1.02]">
                    <span class="text-2xl font-bold tracking-tight">Hip-Hop</span>
                    <img alt="Hip-Hop"
                        class="absolute -right-4 -bottom-2 w-28 h-28 rotate-[25deg] shadow-xl group-hover:rotate-[15deg] transition-transform"
                        data-alt="Detailed close-up of a high-end turntable needle playing a vinyl record with atmospheric lighting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBo1GHuzxAnQV9XCXrusyGJwS_6_IGiz60KQb2edy-uNNcOpOT5bJtG85CYlb2Ns5nnIo-XdFbgavw9TKNukkb3Gyad4aMxRZPlrcvscfX-ICrGQWO_uaY6ngRDDqlgZfcN3Gkbbv11a6ebhLZKDtytH4jq8xfDaQQOGFLJWlZJvEV2oBslF9Gi5n5yg9ITpx6s7wSbeyyqtGhK5mHMUGc2QoTeUjVYuH8kTtEvX_K41biB9R97uS6PdlOOT7bH69Wu_BxXdMi3mI-K" />
                </div>
                <div
                    class="h-48 rounded-lg bg-[#148A08] relative overflow-hidden group cursor-pointer p-4 transition-transform hover:scale-[1.02]">
                    <span class="text-2xl font-bold tracking-tight">Rock</span>
                    <img alt="Rock"
                        class="absolute -right-4 -bottom-2 w-28 h-28 rotate-[25deg] shadow-xl group-hover:rotate-[15deg] transition-transform"
                        data-alt="Close-up of electric guitar strings being played with a pick under dramatic concert lighting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGm8EHfr4bvz50GpxIEGbQjSRdyQzVW3WE8HLU1YPRGVX2RLo82UZe7lV838zNc_inyMQs_gDDjksztCn0R0nn7C8LJj5dYan3VDcv4ywYmxX_lVJ8BYfqcW4aLG65haq_2AoXCYv1t3yBrr06EBoZwDBjgIQcX14YwRgLmt-DtgNuz6Uram6E3oO0F37TtxDRuXwCf7O5sURrxB-cO8SsRUI5alPP8V3-h54Vdg4nSe38XzCi6bqzbAXP6HkN9ilFI1q35Z7aS_F_" />
                </div>
                <div
                    class="h-48 rounded-lg bg-[#BC5900] relative overflow-hidden group cursor-pointer p-4 transition-transform hover:scale-[1.02]">
                    <span class="text-2xl font-bold tracking-tight">Mood</span>
                    <img alt="Mood"
                        class="absolute -right-4 -bottom-2 w-28 h-28 rotate-[25deg] shadow-xl group-hover:rotate-[15deg] transition-transform"
                        data-alt="Soft hazy image of sunlight streaming through a window with dust motes dancing in the air"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBq69Hu5uql-zl_KFAcE-_CxEyv76LSnjb0BEnhhbLfkcIALm5OAPNlsPH6GtA5Mk7QPhCgx4TC7Go9V2ebX9iRazHysHU_uuUj5u-hnUHMGejfdnU2B2r7TATQoXpKtwb9qyGk8iJie_Rh0oQCG9uho6zBNCXe8ROz__2NeXRrI_97f5sU0KAQ9t8VYYJNvLQ18ZgrgKWDjF9d_xipQUTP-6fqqTZNaHht46r3Kw7jA-ReTYgaDHzMnV9sUykOZuMs1tWVvg9hNk4u" />
                </div>
                <div
                    class="h-48 rounded-lg bg-[#7D4B32] relative overflow-hidden group cursor-pointer p-4 transition-transform hover:scale-[1.02]">
                    <span class="text-2xl font-bold tracking-tight">Indie</span>
                    <img alt="Indie"
                        class="absolute -right-4 -bottom-2 w-28 h-28 rotate-[25deg] shadow-xl group-hover:rotate-[15deg] transition-transform"
                        data-alt="Authentic acoustic guitar leaning against a brick wall in a sunlight loft apartment"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCko1iQc_pNSNgZoiDhNNoQJvh4MyXYbaZkPqIPYWrBqxRO7G6hIV6Ftxg0MvqE-yG09jbW3zMEC9JuX-XDLWniJ7iWSNUGEk15VkxHBDhdlo6K00ikcXOt-ooZPUwB-9PHr1vqxifRJ7j7AwJ_VvoaoZiJSbH8qVOVgoZNSs4wLQLHRYLz4ujHWax9Cu-VXracP2ckQYNneqGyl5-83PEUKwH5KZIsohvAgPV1Di1THZL-bsrqMVWpeSdtOHwywk5rGjG18wI9yxIx" />
                </div>
                <div
                    class="h-48 rounded-lg bg-[#503750] relative overflow-hidden group cursor-pointer p-4 transition-transform hover:scale-[1.02]">
                    <span class="text-2xl font-bold tracking-tight">Classical</span>
                    <img alt="Classical"
                        class="absolute -right-4 -bottom-2 w-28 h-28 rotate-[25deg] shadow-xl group-hover:rotate-[15deg] transition-transform"
                        data-alt="Grand piano keys in focus with shallow depth of field in a classic concert hall"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDct2PvxdjLsaujA30GudsW3g5oNqRWh7RwyCOerugww9IKVAVWA9X-0FOfs1n1jb55EUqbX5t05oIOR3pvOtmSEJjHVX5GNWRDCTHm-3Q-dSoB_aFvhPmHtihy-URcq0l-uM85XURmwgvH8aXqAQyjtFtde2xpW3zF5l0t_WJ5ps0Nb18CJ8YrTHJLfv9LkaHzkjkAYjRPUpBQtcb3ZRroSH1XZKxND5sM1JtaAk2Ce2a2oeawpG75iDv0dk0bJmPce1m4GTrgopMQ" />
                </div>
                <div
                    class="h-48 rounded-lg bg-[#006450] relative overflow-hidden group cursor-pointer p-4 transition-transform hover:scale-[1.02]">
                    <span class="text-2xl font-bold tracking-tight">Jazz</span>
                    <img alt="Jazz"
                        class="absolute -right-4 -bottom-2 w-28 h-28 rotate-[25deg] shadow-xl group-hover:rotate-[15deg] transition-transform"
                        data-alt="Golden saxophone close-up with soft reflections of blue and purple neon club lights"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1z_zlPrabCboGkpE4D7wlF7Hpk-SvvmiGzcNXHJ1KyCo8uhBUKuDVfHsl56G845UB-QWZiRn068J-U57bc1OgB4xg1VSu6jhQnl-EUHe_cBoFp-QpaN-APOI4m3DCFgA2OVF812OdcSxLi_SNm6TSUUeOYYoluCkDUtpA-94zdKIqiFodvhZfMdeQedtJudS-xnDMaqeQEJchlJat1XdpVqnmmKE-AcpWJ6lOeKRNTR5LGJ6vqswTFY3caq7wcyWKB-cq9nd8X6Jf" />
                </div>
            </div>
        </section>
    </main>
    <!-- BottomNavBar / Player Bar -->
    <footer
        class="fixed bottom-0 w-full h-24 z-50 bg-[#1a1a1a]/60 backdrop-blur-[20px] flex justify-between items-center px-6 font-['Plus_Jakarta_Sans'] text-sm shadow-[0_-4px_40px_rgba(0,0,0,0.5)]">
        <!-- Currently Playing -->
        <div class="flex items-center gap-4 w-1/3">
            <div class="h-14 w-14 rounded bg-surface-container-highest overflow-hidden">
                <img alt="Playing Now" class="w-full h-full object-cover"
                    data-alt="Miniature abstract neon album art pulsing with green and black tones"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzHXbjzEoevJx-sP1MRVWuOsBqOMqxlXHGOxqEp0KWCSw57dPTCjSuykP1Fw9pivKUP42zWsXGmzaHZlZkbC33DW7QxoT6k6oGLmTJRgrEPq1-xk7CXY46gfG3CFSwhlH2xv2Zwq-hsDpLCXu7Okgz3mQjzpA0pDuBbIi2DwUW8ZsNICq5I33_3nRsGmW8tDBE9sZSNQhxVnmlsc_9MHNqVcUlQq0bWuy0q3kznTylAqx4_hngREtidyOUg7WEzFCOcg4eGQ3YBadg" />
            </div>
            <div>
                <div class="font-bold text-white hover:underline cursor-pointer">Midnight Pulse</div>
                <div class="text-xs text-on-surface-variant hover:text-white hover:underline cursor-pointer">Ether-X
                </div>
            </div>
            <button class="ml-4 text-primary">
                <span class="material-symbols-outlined" data-icon="favorite"
                    style="font-variation-settings: 'FILL' 1;">favorite</span>
            </button>
        </div>
        <!-- Controls -->
        <div class="flex flex-col items-center gap-2 w-1/3">
            <div class="flex items-center gap-6">
                <button class="text-on-surface-variant hover:text-white transition-colors">
                    <span class="material-symbols-outlined" data-icon="shuffle">shuffle</span>
                </button>
                <button class="text-white hover:opacity-80 transition-all">
                    <span class="material-symbols-outlined" data-icon="skip_previous"
                        style="font-variation-settings: 'FILL' 1;">skip_previous</span>
                </button>
                <button
                    class="h-10 w-10 bg-white text-black rounded-full flex items-center justify-center hover:scale-105 active:scale-95 transition-transform">
                    <span class="material-symbols-outlined text-2xl" data-icon="play_arrow"
                        style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                </button>
                <button class="text-white hover:opacity-80 transition-all">
                    <span class="material-symbols-outlined" data-icon="skip_next"
                        style="font-variation-settings: 'FILL' 1;">skip_next</span>
                </button>
                <button class="text-on-surface-variant hover:text-white transition-colors">
                    <span class="material-symbols-outlined" data-icon="repeat">repeat</span>
                </button>
            </div>
            <div class="flex items-center gap-2 w-full max-w-lg">
                <span class="text-[10px] text-on-surface-variant w-10 text-right">1:24</span>
                <div class="h-1 flex-1 bg-surface-variant rounded-full relative group cursor-pointer">
                    <div class="absolute inset-y-0 left-0 w-1/3 bg-primary rounded-full group-hover:bg-secondary">
                    </div>
                </div>
                <span class="text-[10px] text-on-surface-variant w-10">3:45</span>
            </div>
        </div>
        <!-- Volume/Extras -->
        <div class="flex items-center justify-end gap-4 w-1/3">
            <button class="text-on-surface-variant hover:text-white">
                <span class="material-symbols-outlined text-xl" data-icon="mic_external_on">mic_external_on</span>
            </button>
            <button class="text-on-surface-variant hover:text-white">
                <span class="material-symbols-outlined text-xl" data-icon="queue_music">queue_music</span>
            </button>
            <div class="flex items-center gap-2 group">
                <span class="material-symbols-outlined text-xl text-on-surface-variant group-hover:text-white"
                    data-icon="volume_up">volume_up</span>
                <div class="w-24 h-1 bg-surface-variant rounded-full cursor-pointer overflow-hidden">
                    <div class="h-full w-2/3 bg-white group-hover:bg-primary transition-colors"></div>
                </div>
            </div>
            <button class="text-on-surface-variant hover:text-white">
                <span class="material-symbols-outlined text-xl" data-icon="fullscreen">fullscreen</span>
            </button>
        </div>
    </footer>
</body>

</html>
