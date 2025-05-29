<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function getNews(){
        // Make request for a NewsAPI with authentication
        $response = Http::withHeaders([
            'X-Api-Key' => env('NEWS_API_KEY'),
        ])->get('https://newsapi.org/v2/everything', [
            'q' => 'artificial intelligence',
            'from' => '2025-05-28',
            'to' => '2025-05-28',
            'sortBy' => 'popularity'
        ]);

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([
                'error' => 'Error to find news.',
                'status' => $response->status(),
                'message' => $response->body()
            ], $response->status());
        }
    }   
}
