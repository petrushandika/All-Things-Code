<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if ($user) {
            $products = [
                [
                    'name' => 'NikeCourt Legacy Next Nature',
                    'description' => 'Sepatu wanita klasik terinspirasi budaya tenis, dibuat dengan 20% bahan daur ulang, desain retro dengan kulit sintetis tahan lama.',
                    'price' => 100000,
                    'image' => 'https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/f1f272c7-7c79-4fab-9d11-cdf96b67e0cf/WMNS+NIKE+COURT+LEGACY+NN.png',
                ],
                [
                    'name' => 'Nike Air Force 1',
                    'description' => 'Sepatu ikonik dengan desain klasik, empuk, dan nyaman dipakai sepanjang hari.',
                    'price' => 150000,
                    'image' => 'https://static.nike.com/a/images/t_prod/w_640,c_limit,q_auto/air-force-1.png',
                ],
                [
                    'name' => 'Adidas Ultraboost 22',
                    'description' => 'Sepatu lari dengan bantalan Boost responsif untuk kenyamanan maksimal.',
                    'price' => 200000,
                    'image' => 'https://assets.adidas.com/images/w_600,f_auto,q_auto/ultraboost-22.png',
                ],
                [
                    'name' => 'Puma Suede Classic',
                    'description' => 'Sepatu kasual dengan bahan suede premium, cocok untuk gaya sehari-hari.',
                    'price' => 120000,
                    'image' => 'https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa/global/356568/03/sv01/fnd/EEA/w/1000/h/1000/fmt/png',
                ],
                [
                    'name' => 'Converse Chuck Taylor All Star',
                    'description' => 'Sneakers legendaris dengan desain kanvas klasik dan sol karet yang kuat.',
                    'price' => 90000,
                    'image' => 'https://www.converse.id/media/catalog/product/chuck-taylor.png',
                ],
            ];

            foreach ($products as $product) {
                Product::updateOrCreate(
                    ['name' => $product['name']],
                    array_merge($product, ['user_id' => $user->id])
                );
            }
        }
    }
}
