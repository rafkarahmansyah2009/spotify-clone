<?php
$files = glob('database/migrations/*_create_artists_table.php');
if (!empty($files)) {
    rename($files[0], 'database/migrations/2026_04_17_100921_create_artists_table.php');
}
