<?php 


namespace App\Services;

use App\Repositories\Interfaces\ArtistInterface;

class ArtistService{

    // Dependency Injection of the ArtistRepository
    protected $artistRepository;
    public function  __construct(ArtistInterface $artistRepository ){
        $this->artistRepository = $artistRepository;
    }

    
    public function getArtists( $filters = [] , $perPage ){
        return $this->artistRepository->getArtists($filters , $perPage);
    }

}