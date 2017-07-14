<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PodcastCrawlerService;

class PodcastCrawlerController extends Controller
{
    private $service;

    public function __construct(PodcastCrawlerService $podcastCrawlerService)
    {
        $this->service = $podcastCrawlerService;
    }

    public function index(Request $request)
    {
        return response()->json($this->service->getByName($request->query()));
    }
}
