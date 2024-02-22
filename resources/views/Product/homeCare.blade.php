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
        <h1>Catalogue Home Care</h1>
        <div class="products">
            <div class="product">
                <h2>Sabun Mandi</h2>
                <p>Sabun mandi membersihkan dan menyegarkan kulit dengan busa lembut dan aroma wangi.</p>
                <p>Price: Rp 10.000</p>
            </div>
            <div class="product">
                <h2>Pasta Gigi</h2>
                <p> Pasta gigi membersihkan gigi, mencegah pembusukan, dan memberikan kesegaran napas dengan rasa menyegarkan.</p>
                <p>Price: Rp 8.000</p>
            </div>
            <div class="product">
                <h2>Deodoran</h2>
                <p> Deodoran melawan bau badan dengan mengontrol keringat dan memberikan kesegaran dengan aroma yang menyenangkan.</p>
                <p>Price: Rp 20.000</p>
            </div>
            <!-- Add more products as needed -->
        </div>
    </div>
</body>
</html>
