<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data = [
            'listBuku' => [
                'Pychology Of Money',
                'Rich Dad & Poor Dad'
            ]
        ];

        return view('list-buku', $data);
    }

    public function detail($id)
    {
        return view('detail-buku', [
            'id' => $id
        ]);

    }
};
