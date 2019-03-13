<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new \App\Product([
            'imagePath' => "http://localhost/test/public/images/iceberg.jpg",
            'title' => 'Poster Iceberg',
            'description' => 'Le TDAH est comme un iceberg: seul 1/6 des problèmes est visible. Ce poster plastifié au format A3 liste les troubles associés et les conséquences du TDAH.',
            'price' => '7€'
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => "http://localhost/test/public/images/tips.jpg",
            'title' => 'Poster tips',
            'description' => 'Poster destiné aux enseignants. Onze trucs pour capter et maintenir l\'attention d\'un élève.',
            'price' => '5€'
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => "http://localhost/test/public/images/blanc.jpg",
            'title' => 'Article numéro 3',
            'description' => 'Article 3',
            'price' => '30€'
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => "http://localhost/test/public/images/blanc.jpg",
            'title' => 'Article numéro 4',
            'description' => 'Article 4',
            'price' => '40€'
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => "http://localhost/test/public/images/blanc.jpg",
            'title' => 'Article numéro 5',
            'description' => 'Article 5',
            'price' => '50€'
        ]);
        $products->save();

        $products = new \App\Product([
            'imagePath' => "http://localhost/test/public/images/blanc.jpg",
            'title' => 'Article numéro 6',
            'description' => 'Article 6',
            'price' => '60€'
        ]);
        $products->save();
    }
}
