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

        $json = File::get("database/data/products.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Product::create([
                "product_id" => $obj->product_id,
                'product_categories_id' => $obj->product_categories_id,
                'name'      => $obj->name,
                'price'     => $obj->price,
                'features'  => $obj->features,
                'is_active' => $obj->is_active,
            ]);
        }
    }
}
