<?php

namespace App\Http\Controllers;

use App\Services\ArtistService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    protected $artistService;
    
    public function __construct(ArtistService $artistService){
        $this->artistService = $artistService;
    }
    public function index(Request $request): JsonResponse{
        $filters = $request->only(['name', 'tipo']);

        $artists = $this->artistService->getArtists($filters ,10 );

        return response()->json($artists);
    }
}
