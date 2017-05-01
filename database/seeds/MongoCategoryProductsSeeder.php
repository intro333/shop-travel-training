<?php

use Illuminate\Database\Seeder;

class MongoCategoryProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('categories')->truncate();

        foreach ($this->getData() as $item) {
            DB::collection('categories')->insert($item);
        }
    }

    public function getData()
    {
        $data = [
            [
                "name"        => "Мясо, Птица",
                "description" => "Мясные продукты и курица",
                "image_path"  => "/uploads/meat-or-chicken",
                "is_active"   => "1",
                "products"    => [
                    [
                        "name"=> "говядина",
                        "price"=> "800",
                        "image_path"=> "/image/beef.jpg",
                        "is_active"=> 1
                    ],
                    [
                        "name"=> "свинина",
                        "price"=> "600",
                        "image_path"=> "/image/pig.jpg",
                        "is_active"=> 1
                    ],
                    [
                        "name"=> "телятина",
                        "price"=> "700",
                        "image_path"=> "/image/veal.jpg",
                        "is_active"=> 1
                    ]
                ]
            ],
            [
                "name"        => "Овощи, фрукты",
                "description" => "Овощи, фрукты",
                "image_path"  => "/uploads/vegetables-and-fruits",
                "is_active"   => "1",
                "products"    => [
                    [
                        "name"=> "помидоры",
                        "price"=> "200",
                        "image_path"=> "/image/tomato.jpg",
                        "is_active"=> 1
                    ],
                    [
                        "name"=> "яблоки",
                        "price"=> "45",
                        "image_path"=> "/image/apple.jpg",
                        "is_active"=> 1
                    ],
                    [
                        "name"=> "огурцы",
                        "price"=> "70",
                        "image_path"=> "/image/cucumbers.jpg",
                        "is_active"=> 1
                    ]
                ]
            ]
        ];

        return $data;
    }
}
