<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Aurora Alpha',
                'description' => 'Sepatu running ringan dan nyaman untuk aktivitas harian.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Beta',
                'description' => 'Desain stylish cocok untuk olahraga dan jalan-jalan.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Gamma',
                'description' => 'Material breathable menjaga kaki tetap sejuk.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Delta',
                'description' => 'Sol empuk dan anti slip untuk kenyamanan ekstra.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Epsilon',
                'description' => 'Pilihan warna menarik untuk gaya sporty Anda.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Zeta',
                'description' => 'Ringan, kuat, dan tahan lama untuk segala aktivitas.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
        ];
        return view('products.product', [
            'products' => $products,
        ]);
    }

    public function detail($id)
    {
        $products = [
            [
                'name' => 'Aurora Alpha',
                'description' => 'Sepatu running ringan dan nyaman untuk aktivitas harian.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Beta',
                'description' => 'Desain stylish cocok untuk olahraga dan jalan-jalan.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Gamma',
                'description' => 'Material breathable menjaga kaki tetap sejuk.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Delta',
                'description' => 'Sol empuk dan anti slip untuk kenyamanan ekstra.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Epsilon',
                'description' => 'Pilihan warna menarik untuk gaya sporty Anda.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
            [
                'name' => 'Aurora Zeta',
                'description' => 'Ringan, kuat, dan tahan lama untuk segala aktivitas.',
                'image' => 'https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680',
            ],
        ];
        $index = $id - 1;
        if (!isset($products[$index])) {
            abort(404);
        }
        $product = $products[$index];
        return view('products.product-detail', ['product' => $product, 'id' => $id]);
    }
}
