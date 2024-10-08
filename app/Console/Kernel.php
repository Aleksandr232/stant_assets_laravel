<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            SitemapGenerator::create(config('app.url'))
                ->writeToFile(public_path('sitemap.xml'));
        })->daily()->at('16:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
