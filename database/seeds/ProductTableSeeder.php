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
        $product = new \App\Product([
        	'imagePath' => 'https://brain-images-ssl.cdn.dixons.com/9/4/10180949/u_10180949.jpg',
        	'title' => 'HP 15-da0503sa 15.6"',
        	'description' => 'Top features: - Responsive and reliable in everything you do - Sleek and portable wherever you take it - Stay connected and entertained with an extended battery life',
        	'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://brain-images-ssl.cdn.dixons.com/9/4/10180949/u_10180949.jpg',
        	'title' => 'HP 15-da0503sa 15.6"',
        	'description' => 'Top features: - Responsive and reliable in everything you do - Sleek and portable wherever you take it - Stay connected and entertained with an extended battery life',
        	'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://brain-images-ssl.cdn.dixons.com/9/4/10180949/u_10180949.jpg',
        	'title' => 'HP 15-da0503sa 15.6"',
        	'description' => 'Top features: - Responsive and reliable in everything you do - Sleek and portable wherever you take it - Stay connected and entertained with an extended battery life',
        	'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://brain-images-ssl.cdn.dixons.com/9/4/10180949/u_10180949.jpg',
        	'title' => 'HP 15-da0503sa 15.6"',
        	'description' => 'Top features: - Responsive and reliable in everything you do - Sleek and portable wherever you take it - Stay connected and entertained with an extended battery life',
        	'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://brain-images-ssl.cdn.dixons.com/9/4/10180949/u_10180949.jpg',
        	'title' => 'HP 15-da0503sa 15.6"',
        	'description' => 'Top features: - Responsive and reliable in everything you do - Sleek and portable wherever you take it - Stay connected and entertained with an extended battery life',
        	'price' => 10
        ]);

        $product->save();
        
        $product = new \App\Product([
        	'imagePath' => 'https://brain-images-ssl.cdn.dixons.com/9/4/10180949/u_10180949.jpg',
        	'title' => 'HP 15-da0503sa 15.6"',
        	'description' => 'Top features: - Responsive and reliable in everything you do - Sleek and portable wherever you take it - Stay connected and entertained with an extended battery life',
        	'price' => 10
        ]);

        $product->save();
    }
}
