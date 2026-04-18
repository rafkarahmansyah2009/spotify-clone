<?php
$files = glob('database/migrations/*_create_playlists_table.php');
if (!empty($files)) {
    rename($files[0], 'database/migrations/2026_04_17_100922_create_playlists_table.php');
}
