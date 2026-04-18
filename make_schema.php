<?php

function replaceInFile($file, $search, $replace) {
    if(!file_exists($file)) return;
    $content = file_get_contents($file);
    $content = str_replace($search, $replace, $content);
    file_put_contents($file, $content);
}

// 1. Update Artist Migration
$artistMigration = glob('database/migrations/*_create_artists_table.php')[0];
replaceInFile($artistMigration, '$table->id();', '$table->id();
            $table->string(\'name\');
            $table->string(\'image_url\')->nullable();
            $table->string(\'type\')->default(\'Artist\');');

// 2. Update Album Migration
$albumMigration = glob('database/migrations/*_create_albums_table.php')[0];
replaceInFile($albumMigration, '$table->id();', '$table->id();
            $table->foreignId(\'artist_id\')->constrained()->onDelete(\'cascade\');
            $table->string(\'title\');
            $table->string(\'cover_url\')->nullable();
            $table->string(\'type\')->default(\'Album\');
            $table->string(\'genre\')->nullable();');

// 3. Update Song Migration
$songMigration = glob('database/migrations/*_create_songs_table.php')[0];
replaceInFile($songMigration, '$table->id();', '$table->id();
            $table->foreignId(\'album_id\')->constrained()->onDelete(\'cascade\');
            $table->string(\'title\');
            $table->integer(\'duration\')->nullable(); // in seconds
            $table->string(\'file_url\')->nullable();');

// 4. Update Playlist Migration
$playlistMigration = glob('database/migrations/*_create_playlists_table.php')[0];
replaceInFile($playlistMigration, '$table->id();', '$table->id();
            $table->string(\'name\');
            $table->string(\'description\')->nullable();
            $table->string(\'cover_url\')->nullable();');

// 5. Update playlist_song Migration
$playlistSongMigration = glob('database/migrations/*_create_playlist_song_table.php')[0];
replaceInFile($playlistSongMigration, '$table->id();', '$table->id();
            $table->foreignId(\'playlist_id\')->constrained()->onDelete(\'cascade\');
            $table->foreignId(\'song_id\')->constrained()->onDelete(\'cascade\');');

// Models
replaceInFile('app/Models/Artist.php', 'use HasFactory;', 'use HasFactory;
    protected $fillable = [\'name\', \'image_url\', \'type\'];
    public function albums() { return $this->hasMany(Album::class); }');

replaceInFile('app/Models/Album.php', 'use HasFactory;', 'use HasFactory;
    protected $fillable = [\'artist_id\', \'title\', \'cover_url\', \'type\', \'genre\'];
    public function artist() { return $this->belongsTo(Artist::class); }
    public function songs() { return $this->hasMany(Song::class); }');

replaceInFile('app/Models/Song.php', 'use HasFactory;', 'use HasFactory;
    protected $fillable = [\'album_id\', \'title\', \'duration\', \'file_url\'];
    public function album() { return $this->belongsTo(Album::class); }');

replaceInFile('app/Models/Playlist.php', 'use HasFactory;', 'use HasFactory;
    protected $fillable = [\'name\', \'description\', \'cover_url\'];
    public function songs() { return $this->belongsToMany(Song::class); }');

echo "Migrations and models configured.";
