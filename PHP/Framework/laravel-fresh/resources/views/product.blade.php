<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 24px;
            max-width: 800px;
            margin: 40px auto;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 16px;
            background: #fafafa;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            text-align: center;
            transition: box-shadow 0.2s;
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
    </style>
</head>
<body>
    <h1 style="text-align:center;">Product List</h1>
    <div class="container">
        @for ($i = 1; $i <= 8; $i++)
            <div class="card">
                <img src="https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680" alt="Product Image">
                <h2>Product {{ $i }}</h2>
                <p>Description for Product {{ $i }}. This is a sample description for the product card number {{ $i }}.</p>
                <a href="{{ url('product/detail/'.$i) }}">View Detail</a>
            </div>
        @endfor
    </div>
</body>
</html>