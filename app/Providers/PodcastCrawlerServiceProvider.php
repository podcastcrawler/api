<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PodcastCrawler\PodcastCrawler;
use PodcastCrawler\Provider\Itunes;

class PodcastCrawlerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PodcastCrawler::class, function($app) {
            return new PodcastCrawler(new Itunes);
        });
    }
}
