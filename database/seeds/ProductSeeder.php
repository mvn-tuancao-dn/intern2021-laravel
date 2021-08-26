<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Golden Lotus tea',
                'price' => 10,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 10,
            ],
            [
                'name' => 'Vietnamese Coffe',
                'price' => 11,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 29,
            ],
            [
                'name' => 'Jasmine tea',
                'price' => 12,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 30,
            ],
            [
                'name' => 'Lemon Tea',
                'price' => 13,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 40,
            ],
            [
                'name' => 'Esspreso',
                'price' => 14,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 40,
            ],
            [
                'name' => 'Latte',
                'price' => 15,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 40,
            ],
            [
                'name' => 'Capppuchino',
                'price' => 16,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 40,
            ],
            [
                'name' => 'Matcha Latte',
                'price' => 17,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 40,
            ],
            [
                'name' => 'Ice Latte',
                'price' => 18,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 40,
            ],
            [
                'name' => 'Ice Caramel Latte',
                'price' => 19,
                'description' => 'Sản phẩm tốt nhất năm 2021',
                'image' => 'capuchino.png',
                'quantity' => 40,
            ],
        ];
        foreach ($products as $product) {
            \App\Product::create([
                'name' => $product['name'],
                'price' => $product['price'],
                'description' => $product['description'],
                'image' => $product['image'],
                'quantity' => $product['quantity']
            ]);
        }
    }
}
