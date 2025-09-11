<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Detail</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .detail-container {
            max-width: 500px;
            margin: 40px auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 24px;
            background: #fafafa;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            text-align: center;
        }
        img {
            width: 100%;
            max-width: 250px;
            border-radius: 8px;
            margin-bottom: 16px;
        }
        h2 { margin-bottom: 10px; }
        p { color: #555; }
        a {
            display: inline-block;
            margin-top: 18px;
            padding: 8px 18px;
            background: #007bff;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
        }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="detail-container">
        <img src="https://atmos.co.id/cdn/shop/files/AURORA_CT8012-104_PHSLH000-2000_1360x.png?v=1733818680" alt="Product Image">
        <h2>Product {{ $id }}</h2>
        <p>This is the detail page for Product {{ $id }}. You can add more information here.</p>
        <a href="{{ url('/product') }}">Back to Product List</a>
    </div>
</body>
</html>