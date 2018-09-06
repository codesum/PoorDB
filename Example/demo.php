<?php
require_once '../vendor/autoload.php';

$path = __DIR__ . "/data.json";

$file = new \Codesum\PoorDB\FileSystem\File($path);

dump($file->read());
