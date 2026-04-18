<?php
$content = file_get_contents('resources/views/home.blade.php');

// Replace Playlists (Made For You)
$playlistRegex = '/<!-- Carousel Items -->.*?(?=<\/div>\s*<\/section>)/is';
$playlistReplacement = '
<!-- Carousel Items -->
@foreach($playlists as $playlist)
<a href="{{ route(\'library\') }}" class="flex-shrink-0 w-48 bg-surface-container-low p-4 rounded-xl hover:bg-surface-container transition-all cursor-pointer group block">
<div class="relative aspect-square mb-4 rounded-lg overflow-hidden shadow-2xl">
<img alt="{{ $playlist->name }}" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ $playlist->cover_url }}"/>
<button class="absolute bottom-2 right-2 h-12 w-12 rounded-full bg-primary flex items-center justify-center shadow-xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
<span class="material-symbols-outlined text-on-primary text-3xl" style="font-variation-settings: \'FILL\' 1;">play_arrow</span>
</button>
</div>
<h3 class="font-bold text-on-surface truncate">{{ $playlist->name }}</h3>
<p class="text-on-surface-variant text-sm mt-1 line-clamp-2">{{ $playlist->description }}</p>
</a>
@endforeach
</div>';
$content = preg_replace($playlistRegex, $playlistReplacement, $content);

// Replace Albums (Recently Played)
$albumRegex = '/<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">.*?<\/section>/is';
$albumReplacement = '<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
@foreach($albums as $album)
<a href="{{ route(\'album\') }}" class="group cursor-pointer block">
<div class="aspect-square rounded-lg overflow-hidden mb-3 shadow-lg">
<img alt="Album Cover" class="h-full w-full object-cover" src="{{ $album->cover_url }}"/>
</div>
<p class="font-bold truncate">{{ $album->title }}</p>
<p class="text-xs text-on-surface-variant">{{ $album->type }} • {{ $album->genre }}</p>
</a>
@endforeach
</div>
</section>';
$content = preg_replace($albumRegex, $albumReplacement, $content);

file_put_contents('resources/views/home.blade.php', $content);
echo "Replaced loops";
