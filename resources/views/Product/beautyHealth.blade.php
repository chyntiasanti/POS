<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            grid-gap: 30px;
        }

        .product {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product h2 {
            margin-top: 0;
        }

        .product p {
            margin: 10px 0;
            color: #828288
        }

        .product p1 {
            margin: 10px 0;
            color: #d3d3d3
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Catalogue Beauty Health</h1>
        <div class="products">
            <div class="product">
                <h2>Sunscreen</h2>
                <p>Sunscreen melindungi kulit dari sinar UV dengan menyaring dan menyerap radiasi matahari..</p>
                <p>Price: Rp 88.000</p>
            </div>
            <div class="product">
                <h2>Tonner</h2>
                <p> Tonner adalah cairan yang membersihkan sisa kotoran dan minyak setelah pencucian wajah.</p>
                <p>Price: Rp 45.000</p>
            </div>
            <div class="product">
                <h2>Mask</h2>
                <p> Masker adalah produk perawatan kulit yang digunakan untuk memberikan nutrisi, hidrasi, atau perawatan khusus sesuai kebutuhan kulit.</p>
                <p>Price: Rp 20.000</p>
            </div>
            <!-- Add more products as needed -->
        </div>
    </div>
</body>
</html>
