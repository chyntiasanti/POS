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
        <h1>Catalogue Baby Kid</h1>
        <div class="products">
            <div class="product">
                <h2>Tisu Basah</h2>
                <p>Tisu basah adalah kain lembut yang dibasahi dengan cairan pembersih untuk membersihkan dan menyegarkan kulit.</p>
                <p>Price: Rp 88.000</p>
            </div>
            <div class="product">
                <h2>Botol Susu</h2>
                <p> Botol susu adalah wadah yang digunakan untuk memberi makan bayi dengan formula susu atau ASI.</p>
                <p>Price: Rp 45.000</p>
            </div>
            <div class="product">
                <h2>Bedak Bayi</h2>
                <p> Bedak bayi memberikan perlindungan lembut dan kenyamanan, menjaga kulit bayi tetap kering dan lembut.</p>
                <p>Price: Rp 20.000</p>
            </div>
            <!-- Add more products as needed -->
        </div>
    </div>
</body>
</html>
