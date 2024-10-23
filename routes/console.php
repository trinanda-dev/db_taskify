<?php

use App\Console\Commands\RunWeeklySeeders;
use Illuminate\Support\Facades\Artisan;

Artisan::command('schedule:run', function () {
    // Schedule the weekly seeder tasks
    $schedule->command(RunWeeklySeeders::class)->weeklyOn(0, '08:00');
})->describe('Run the Laravel scheduler');
