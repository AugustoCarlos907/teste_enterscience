<?php 

namespace App\Repositories;

use App\Models\Artist;
use App\Repositories\Interfaces\ArtistInterface;
use Illuminate\Support\Facades\Request;

class ArtistRepository implements ArtistInterface
{
    public function getArtists( $filters = [] , $perPage){

        // return Artist::all();
        $query = Artist::query();

        if(!empty($filters['name'])){
            $query->where('name', 'like', '%'.$filters['name'].'%');
        }

        if (!empty($filters['tipo'])) {
            $query->where('tipo', $filters['tipo']);
        }
        return $query->paginate($perPage);
    }
}