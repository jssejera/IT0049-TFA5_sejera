<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function (): void {
    $this->comment('Build clearly. Test carefully.');
})->purpose('Display an inspiring message');
