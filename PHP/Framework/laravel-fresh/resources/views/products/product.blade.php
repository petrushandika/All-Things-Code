@extends('layout')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        display: flex;
        flex-direction: column;
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 16px;
    }
    .grid-card {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        width: 100%;
    }
    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 16px;
        background: #fafafa;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        text-align: center;
        transition: box-shadow 0.2s;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }
    .card:hover {
        box-shadow: 0 4px 16px rgba(0,0,0,0.12);
    }
    .card img {
        width: 100%;
        max-width: 200px;
        height: auto;
        margin-bottom: 12px;
        border-radius: 8px;
    }
    .card h2 {
        font-size: 1.2em;
        margin: 10px 0 6px 0;
    }
    .card p {
        color: #555;
        font-size: 0.98em;
    }
    .card a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 18px;
        background: #007bff;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-size: 0.98em;
        transition: background 0.2s;
    }
    .card a:hover {
        background: #0056b3;
    }
    @media (max-width: 1100px) {
        .grid-card {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    @media (max-width: 900px) {
        .grid-card {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 600px) {
        .grid-card {
            grid-template-columns: 1fr;
        }
    }
</style>
<div class="container">
    <h1 style="text-align:center;">Product List</h1>
    <div class="grid-card">
        @foreach ($products as $index => $product)
            <div class="card">
                    <img src="{{ $product['image'] }}" alt="Product Image">
                    <div style="font-weight:bold; color:#007bff; margin-bottom:8px; font-size:1.1em;">
                        {{ formatCurrency($product['price']) }}
                    </div>
                    <h2>{{ $product['name'] }}</h2>
                    <p>{{ $product['description'] }}</p>
                    <a href="{{ url('/product/' . ($index + 1)) }}">View Detail</a>
            </div>
        @endforeach
    </div>
</div>
@endsection