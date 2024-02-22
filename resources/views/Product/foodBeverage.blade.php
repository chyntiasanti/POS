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
        <h1>Catalogue Food Beverage</h1>
        <div class="products">
            <div class="product">
                <h2>Pizza</h2>
                <p>Pepperoni adalah salah satu jenis pizza yang paling populer di dunia. Ia terdiri dari adonan pizza yang dipanggang dengan saus tomat, keju mozzarella, dan pepperoni, yaitu irisan daging sapi yang diasinkan dan diasapi.</p>
                <p>Price: Rp 98.000</p>
            </div>
            <div class="product">
                <h2>Dimsum</h2>
                <p> Siomay adalah bola daging cincang (biasanya ikan atau ayam) yang dibungkus dalam daun sawi atau kulit pangsit.</p>
                <p>Price: Rp 15.000</p>
            </div>
            <div class="product">
                <h2>Martabak</h2>
                <p> Martabak adalah hidangan Indonesia yang terdiri dari adonan tipis yang diisi dengan telur, daging, dan bumbu..</p>
                <p>Price: Rp 20.000</p>
            </div>
            <!-- Add more products as needed -->
        </div>
    </div>
</body>
</html>
