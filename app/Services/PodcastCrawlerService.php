<?php

namespace App\Services;

use Illuminate\Http\Request;
use PodcastCrawler\PodcastCrawler;

class PodcastCrawlerService
{
    private $library;

    public function __construct(PodcastCrawler $podcastCrawler)
    {
        $this->library = $podcastCrawler;
    }

    public function getByName(array $parameters)
    {
        $library = $this->library;

        if (isset($parameters['limit']) && !empty($parameters['limit'])) {
            $library->limit($parameters['limit']);
        }

        return $library->get($parameters['name']);
    }
}
