<?php
require_once "phar://../iron_worker.phar";

$worker = new IronWorker();

$worker->upload("worker/", 'ffmpeg.php', "FFmpeg-Flv");