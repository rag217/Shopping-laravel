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
              'imagePath' => 'http://outfitideashq.com/wp-content/uploads/2014/07/women-wearing-super-skinny-jeans-240x300.jpeg',
	      'title'=> 'Skinny Jeans Women',
	      'description'=> 'great fit',
	      'price'=> '12',
       
           
]);

	$product->save();
 $product = new \App\Product([
              'imagePath' => 'http://outfitideashq.com/wp-content/uploads/2014/07/women-straight-legged-jeans-226x300.jpg',
	      'title'=> 'Slim Jeans Women',
	      'description'=> 'great fit',
	      'price'=> '22',
       
           
]);

	$product->save(); $product = new \App\Product([
              'imagePath' => 'http://outfitideashq.com/wp-content/uploads/2014/07/Boyfriend-jeans-300x300.jpg',
	      'title'=> 'Relaxed Jeans Women',
	      'description'=> 'great fit',
	      'price'=> '36',
       
           
]);

	$product->save(); $product = new \App\Product([
              'imagePath' => 'http://www.destinyman.com/wp-content/uploads/2016/07/Denim-stretch-.jpg',
	      'title'=> 'Skinny Jeans Men',
	      'description'=> 'great fit',
	      'price'=> '72',
       
           
]);

	$product->save(); $product = new \App\Product([
              'imagePath' => 'http://images.usc.co.uk/images/imgzoom/64/64807829_xxl.jpg',
	      'title'=> 'Slim Jeans Men',
	      'description'=> 'great fit',
	      'price'=> '72',
       
           
]);

	$product->save(); $product = new \App\Product([
              'imagePath' => 'https://cdnb.lystit.com/photos/2013/01/09/zara-dark-blue-ripped-jeans-product-1-5993290-846332996.jpeg',
	      'title'=> 'Relaxed Jeans Men',
	      'description'=> 'great fit',
	      'price'=> '62',
       
           
]);

	$product->save();
    }
}
