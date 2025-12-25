<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artists = [
            [
                'name' => 'The Beatles',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 1000000.00,
                'imagem' => 'https://example.com/beatles.jpg',
            ],
            [
                'name' => 'Beyoncé',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop/R&B',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/beyonce.jpg',
            ],
            [
                'name' => 'Coldplay',
                'tipo' => 'banda',
                'estilo_musical' => 'Pop Rock',
                'cache_base' => 800000.00,
                'imagem' => 'https://example.com/coldplay.jpg',
            ],
            [
                'name' => 'Adele',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop/Soul',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/adele.jpg',
            ],
            [
                'name' => 'Queen',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 950000.00,
                'imagem' => 'https://example.com/queen.jpg',
            ],
            [
                'name' => 'Ed Sheeran',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop',
                'cache_base' => 700000.00,
                'imagem' => 'https://example.com/edsheeran.jpg',
            ],
            [
                'name' => 'U2',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/u2.jpg',
            ],
            [
                'name' => 'Taylor Swift',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop/Country',
                'cache_base' => 950000.00,
                'imagem' => 'https://example.com/taylorswift.jpg',
            ],
            [
                'name' => 'The Rolling Stones',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 1000000.00,
                'imagem' => 'https://example.com/rollingstones.jpg',
            ],
            [
                'name' => 'Bruno Mars',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop/Funk',
                'cache_base' => 800000.00,
                'imagem' => 'https://example.com/brunomars.jpg',
            ],
            [
                'name' => 'Red Hot Chili Peppers',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/rhcp.jpg',
            ],
            [
                'name' => 'Lady Gaga',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/ladygaga.jpg',
            ],
            [
                'name' => 'Foo Fighters',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 800000.00,
                'imagem' => 'https://example.com/foofighters.jpg',
            ],
            [
                'name' => 'Drake',
                'tipo' => 'cantor',
                'estilo_musical' => 'Hip-Hop',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/drake.jpg',
            ],
            [
                'name' => 'Imagine Dragons',
                'tipo' => 'banda',
                'estilo_musical' => 'Pop Rock',
                'cache_base' => 750000.00,
                'imagem' => 'https://example.com/imaginedragons.jpg',
            ],
            [
                'name' => 'Rihanna',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop/R&B',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/rihanna.jpg',
            ],
            [
                'name' => 'Linkin Park',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 800000.00,
                'imagem' => 'https://example.com/linkinpark.jpg',
            ],
            [
                'name' => 'Ariana Grande',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/arianagrande.jpg',
            ],
            [
                'name' => 'Maroon 5',
                'tipo' => 'banda',
                'estilo_musical' => 'Pop Rock',
                'cache_base' => 800000.00,
                'imagem' => 'https://example.com/maroon5.jpg',
            ],
            [
                'name' => 'Justin Bieber',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/justinbieber.jpg',
            ],
            [
                'name' => 'Metallica',
                'tipo' => 'banda',
                'estilo_musical' => 'Metal',
                'cache_base' => 950000.00,
                'imagem' => 'https://example.com/metallica.jpg',
            ],
            [
                'name' => 'Billie Eilish',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop',
                'cache_base' => 800000.00,
                'imagem' => 'https://example.com/billieeilish.jpg',
            ],
            [
                'name' => 'Green Day',
                'tipo' => 'banda',
                'estilo_musical' => 'Punk Rock',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/greenday.jpg',
            ],
            [
                'name' => 'Shakira',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop/Latino',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/shakira.jpg',
            ],
            [
                'name' => 'The Weeknd',
                'tipo' => 'cantor',
                'estilo_musical' => 'R&B/Pop',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/theweeknd.jpg',
            ],
            [
                'name' => 'Guns N’ Roses',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 950000.00,
                'imagem' => 'https://example.com/gunsnroses.jpg',
            ],
            [
                'name' => 'Katy Perry',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/katyperry.jpg',
            ],
            [
                'name' => 'AC/DC',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/acdc.jpg',
            ],
            [
                'name' => 'Dua Lipa',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop',
                'cache_base' => 800000.00,
                'imagem' => 'https://example.com/dualipa.jpg',
            ],
            [
                'name' => 'Pearl Jam',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/pearljam.jpg',
            ],
            [
                'name' => 'Sam Smith',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop/Soul',
                'cache_base' => 800000.00,
                'imagem' => 'https://example.com/samsmith.jpg',
            ],
            [
                'name' => 'The Killers',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 800000.00,
                'imagem' => 'https://example.com/thekillers.jpg',
            ],
            [
                'name' => 'Post Malone',
                'tipo' => 'cantor',
                'estilo_musical' => 'Hip-Hop/Pop',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/postmalone.jpg',
            ],
            [
                'name' => 'Bon Jovi',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/bonjovi.jpg',
            ],
            [
                'name' => 'Madonna',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop',
                'cache_base' => 950000.00,
                'imagem' => 'https://example.com/madonna.jpg',
            ],
            [
                'name' => 'Nirvana',
                'tipo' => 'banda',
                'estilo_musical' => 'Grunge',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/nirvana.jpg',
            ],
            [
                'name' => 'Harry Styles',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop',
                'cache_base' => 850000.00,
                'imagem' => 'https://example.com/harrystyles.jpg',
            ],
            [
                'name' => 'The Who',
                'tipo' => 'banda',
                'estilo_musical' => 'Rock',
                'cache_base' => 900000.00,
                'imagem' => 'https://example.com/thewho.jpg',
            ],
            [
                'name' => 'Elton John',
                'tipo' => 'cantor',
                'estilo_musical' => 'Pop/Rock',
                'cache_base' => 950000.00,
                'imagem' => 'https://example.com/eltonjohn.jpg',
            ],
        ];

        foreach ($artists as $artist) {
            \App\Models\Artist::create($artist);
        }
    }
}
