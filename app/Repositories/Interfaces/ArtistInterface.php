<?php

namespace App\Repositories\Interfaces;

interface ArtistInterface
{
    public function getArtists( $filters = [] , $perPage);
}
