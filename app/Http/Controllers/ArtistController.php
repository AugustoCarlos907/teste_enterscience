<?php

namespace App\Http\Controllers;

use App\Services\ArtistService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    // Dependency Injection of the ArtistService
    protected $artistService;
    
    public function __construct(ArtistService $artistService){
        $this->artistService = $artistService;
    }

    // List artists with optional filters
    public function index(Request $request): JsonResponse{
        $filters = $request->only(['name', 'tipo']);

        $artists = $this->artistService->getArtists($filters ,10 );

        return response()->json($artists);
    }
}
