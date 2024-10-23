<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illmuniate\Support\Facades\Artisan;

class RunWeeklySeeders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:weekly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'run weekly seeders every Sunday at 08:00';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Mejalankan semua seeder yang dibutuhkan
        Artisan::call('db:seed', ['--class' => 'GudangJakartaSeeder']);
        Artisan::call('db:seed', ['--class' => 'TaskGudangBintanSeeder']);
        Artisan::call('db:seed', ['--class' => 'TaskAdminMarketingSeeder']);
        Artisan::call('db:seed', ['--class' => 'TaskAdminSaleSeeders']);
        Artisan::call('db:seed', ['--class' => 'TaskKepalaTokoSeeder']);
        Artisan::call('db:seed', ['--class' => 'TaskManajemenSeeder']);
    }
}
