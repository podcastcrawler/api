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

    public function documentation()
    {
        return view('documentation');
    }

    public function index(Request $request)
    {
        try {
            $data = $this->service->getByName($request->query());

            if (isset($data['result_count']) && $data['result_count'] === 0) {
                return response()->json($data, 404);
            }

            return response()->json($data);
        } catch (Exception $except) {
            return response()->json($data, 500);
        }
    }

    public function find(Request $request)
    {
        try {
            $data = $this->service->findByUrl($request->query());

            return response()->json($data);
        } catch (Exception $except) {
            return response()->json($data, 500);
        }
    }
}
