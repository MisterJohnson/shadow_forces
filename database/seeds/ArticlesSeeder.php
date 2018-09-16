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
            'title' => 'articles.title.1',
            'label' => 'articles.label.1',
            'link' => 'articles.link.1',
            'description' => 'articles.description.1',
            'background_image' => 'shadowrun-cyberpunk-futuristic-cartoon-wallpaper.jpg',
            'dimension' => 'square'
        ]);

        $article2 = Article::create([
            'type' => 'normal',
            'title' => 'articles.title.2',
            'label' => 'articles.label.2',
            'link' => 'articles.link.2',
            'description' => 'articles.description.2',
            'background_image' => '147608-Shadowrun-cyberpunk-748x473.jpg',
            'dimension' => 'square'
        ]);

        $article3 = Article::create([
            'type' => 'normal',
            'title' => 'articles.title.3',
            'label' => 'articles.label.3',
            'link' => 'articles.link.3',
            'description' => 'articles.description.3',
            'background_image' => '1473661939_Street Samurai.jpg',
            'dimension' => 'square'
        ]);

        $article4 = Article::create([
            'type' => 'normal',
            'title' => 'articles.title.4',
            'label' => 'articles.label.4',
            'link' => 'articles.link.4',
            'description' => 'articles.description.4',
            'background_image' => 'Shadowrun-Returns.jpg',
            'dimension' => 'square'
        ]);

        $article5 = Article::create([
            'type' => 'normal',
            'title' => 'articles.title.5',
            'label' => 'articles.label.5',
            'link' => 'articles.link.5',
            'description' => 'articles.description.5',
            'background_image' => 'darkcity-1.jpg',
            'dimension' => 'horizontal_rectangle'
        ]);

        $article6 = Article::create([
            'type' => 'normal',
            'title' => 'articles.title.6',
            'label' => 'articles.label.6',
            'link' => 'articles.link.6',
            'description' => 'articles.description.6',
            'background_image' => 'darkcity-2.jpg',
            'dimension' => 'horizontal_rectangle'
        ]);

        $article7 = Article::create([
            'type' => 'normal',
            'title' => 'articles.title.7',
            'label' => 'articles.label.7',
            'link' => 'articles.link.7',
            'description' => 'articles.description.7',
            'background_image' => 'skyline_1.jpg',
            'dimension' => 'square'
        ]);

        $article8 = Article::create([
            'type' => 'normal',
            'title' => 'articles.title.8',
            'label' => 'articles.label.8',
            'link' => 'articles.link.8',
            'description' => 'articles.description.8',
            'background_image' => 'shop-slider-image-2.jpg',
            'dimension' => 'square'
        ]);
    }
}
