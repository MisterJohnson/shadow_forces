<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article1 = Article::create([
            'type' => 'normal',
            'title' => 'title.1',
            'label' => 'label.1',
            'link' => 'link.1',
            'description' => 'description.1',
            'background_image' => 'shadowrun-cyberpunk-futuristic-cartoon-wallpaper.jpg',
            'dimension' => 'square'
        ]);

        $article2 = Article::create([
            'type' => 'normal',
            'title' => 'title.2',
            'label' => 'label.2',
            'link' => 'link.2',
            'description' => 'description.2',
            'background_image' => '147608-Shadowrun-cyberpunk-748x473.jpg',
            'dimension' => 'square'
        ]);

        $article3 = Article::create([
            'type' => 'normal',
            'title' => 'title.3',
            'label' => 'label.3',
            'link' => 'link.3',
            'description' => 'description.3',
            'background_image' => '1473661939_Street Samurai.jpg',
            'dimension' => 'square'
        ]);

        $article4 = Article::create([
            'type' => 'normal',
            'title' => 'title.4',
            'label' => 'label.4',
            'link' => 'link.4',
            'description' => 'description.4',
            'background_image' => 'Shadowrun-Returns.jpg',
            'dimension' => 'square'
        ]);

        $article5 = Article::create([
            'type' => 'normal',
            'title' => 'title.5',
            'label' => 'label.5',
            'link' => 'link.5',
            'description' => 'description.5',
            'background_image' => 'darkcity-1.jpg',
            'dimension' => 'horizontal_rectangle'
        ]);

        $article6 = Article::create([
            'type' => 'normal',
            'title' => 'title.6',
            'label' => 'label.6',
            'link' => 'link.6',
            'description' => 'description.6',
            'background_image' => 'darkcity-2.jpg',
            'dimension' => 'horizontal_rectangle'
        ]);

        $article7 = Article::create([
            'type' => 'normal',
            'title' => 'title.7',
            'label' => 'label.7',
            'link' => 'link.7',
            'description' => 'description.7',
            'background_image' => 'skyline_1.jpg',
            'dimension' => 'square'
        ]);

        $article8 = Article::create([
            'type' => 'normal',
            'title' => 'title.8',
            'label' => 'label.8',
            'link' => 'link.8',
            'description' => 'description.8',
            'background_image' => 'shop-slider-image-2.jpg',
            'dimension' => 'square'
        ]);
    }
}
