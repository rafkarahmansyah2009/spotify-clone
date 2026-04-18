<?php
$files = glob('database/migrations/*.php');
foreach ($files as $file) {
    if(!file_exists($file)) continue;
    $content = file_get_contents($file);
    $content = str_replace("->string('image_url')", "->text('image_url')", $content);
    $content = str_replace("->string('cover_url')", "->text('cover_url')", $content);
    $content = str_replace("->string('file_url')", "->text('file_url')", $content);
    file_put_contents($file, $content);
}
echo 'Replaced';
