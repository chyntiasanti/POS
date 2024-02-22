<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
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
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .transaction-list {
            list-style: none;
            padding: 0;
        }

        .transaction-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .transaction-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Transaksi</h1>
        <ul class="transaction-list">
            <li class="transaction-item">
                <strong>ID Transaksi:</strong> 000001<br>
                <strong>Nama Pelanggan:</strong> Chyntia Santi<br>
                <strong>Total Harga:</strong> $50.00
            </li>
            <li class="transaction-item">
                <strong>ID Transaksi:</strong> 000002<br>
                <strong>Nama Pelanggan:</strong> Reyhan Iqbal<br>
                <strong>Total Harga:</strong> $75.00
            </li>
            <!-- Tambahkan transaksi lain sesuai kebutuhan -->
        </ul>
    </div>
</body>
</html>
