<?php
$file = 'resources/views/your-library.blade.php';
$content = file_get_contents($file);

// We replace everything between 
// <!-- Featured: Liked Songs --> up to </section>
// Wait, the structural tag is <section class="grid ... gap-6">
$pattern = '/(<!-- Featured: Liked Songs -->.*?)(?=<\/section>)/is';

$replacement = '<!-- Featured: Liked Songs -->
<div class="col-span-2 row-span-1 p-6 rounded-lg bg-gradient-to-br from-[#4410a8] to-[#9167e8] flex flex-col justify-between group cursor-pointer relative overflow-hidden">
<div class="absolute -right-4 -bottom-4 w-32 h-32 opacity-20 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[8rem]" style="font-variation-settings: \'FILL\' 1;">favorite</span>
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
    <form method="POST" action="{{ route(\'playlist.destroy\', $playlist->id) }}" class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
        @csrf
        @method(\'DELETE\')
        <button type="submit" class="w-8 h-8 rounded-full bg-error text-white flex items-center justify-center hover:scale-110 transition-transform" title="Delete Playlist" onclick="return confirm(\'Are you sure you want to delete this playlist?\')">
            <span class="material-symbols-outlined text-sm">delete</span>
        </button>
    </form>
</div>
@endforeach

<!-- Empty State / Add New Card -->
<form method="POST" action="{{ route(\'playlist.store\') }}" class="contents">
    @csrf
    <button type="submit" class="bg-surface-container-low p-4 rounded-lg border-2 border-dashed border-outline-variant/20 flex flex-col items-center justify-center gap-3 group hover:border-primary/50 transition-all min-h-[240px]">
        <div class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center text-on-surface-variant group-hover:text-primary transition-colors">
            <span class="material-symbols-outlined text-3xl">add</span>
        </div>
        <p class="text-sm font-semibold text-on-surface-variant group-hover:text-white transition-colors">Create Playlist</p>
    </button>
</form>
';

$newContent = preg_replace($pattern, $replacement, $content);
file_put_contents($file, $newContent);
echo "Replaced library layout.";
