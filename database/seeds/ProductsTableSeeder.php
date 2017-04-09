<?php

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::where('is_active', 1)->delete();
        ProductCategory::where('is_active', 1)->delete();
        ProductCategory::create([
            'category_id'   => '1',
            'name'          => 'Мясо, Птица',
            'description'   => 'Мясные продукты и курица',
            'image_path'    => '/uploads/meat-or-chicken',
            'is_active'     => 1,
        ]);
        ProductCategory::create([
            'category_id'   => '2',
            'name'          => 'Овощи, фрукты',
            'description'   => 'Овощи и фрукты',
            'image_path'    => '/uploads/vegetables-and-fruits',
            'is_active'     => 1,
        ]);

        $productsMeatOrChicken = [
            ['говядина', '800', '/image/beef.jpg'],
            ['свинина', '600', '/image/pig.png'],
            ['телятина', '800', '/image/veal.png'],
        ];
        $productsVegetablesAndFruits = [
            ['помидоры', '200', '/image/tomato.jpg'],
            ['яблоки', '45', '/image/apple.png'],
            ['огурцы', '70', '/image/cucumbers.png'],
        ];
        foreach ($productsMeatOrChicken as $key => $product) {
            Product::create([
                'product_categories_id' => '1',
                'name' => $product[0],
                'price' => $product[1],
                'image_path' => $product[2],
                'is_active' => 1,
            ]);
        }
        foreach ($productsVegetablesAndFruits as $key => $product) {
            Product::create([
                'product_categories_id' => '2',
                'name' => $product[0],
                'price' => $product[1],
                'image_path' => $product[2],
                'is_active' => 1,
            ]);
        }
    }
}
