<?php
// about.php
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Daftar Kuliner</title>
    <link rel="stylesheet" href="styles.css"> <!-- Gaya CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(8, 206, 251);
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .container:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transform: scale(1.02);
        }

        h1 {
            text-align: center;
            color: rgb(12, 12, 12);
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        h3 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: 500;
        }

        p {
            line-height: 1.8;
            text-align: justify;
            font-size: 16px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            display: flex;
            align-items: center;
            padding: 12px;
            margin: 8px 0;
            background-color: #ecf0f1;
            border-left: 5px solid #e74c3c;
            border-radius: 4px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        ul li:hover {
            background-color: #e74c3c;
            color: #fff;
            transform: translateX(5px);
        }

        ul li i {
            margin-right: 10px;
            font-size: 18px;
        }

        .highlight {
            background-color: #ffecb3;
            padding: 5px;
            border-radius: 4px;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            padding: 12px;
            background-color: #2c3e50;
            color: #fff;
            border-radius: 0 0 10px 10px;
            transition: all 0.3s ease;
        }

        footer a {
            color: #e74c3c;
            text-decoration: none;
            font-weight: 600;
        }

        footer a:hover {
            text-decoration: underline;
            transform: translateY(-2px);
        }

        footer:hover {
            background-color: #34495e;
        }

        /* Animasi ikon pada hover */
        .animated-icon {
            transition: transform 0.3s ease;
        }

        .animated-icon:hover {
            transform: rotate(360deg);
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Tentang Kami</h1>
        <p><span class="highlight">Selamat datang di Daftar Kuliner!</span> Kami adalah panduan terpercaya untuk
            menemukan berbagai macam kuliner tradisional yang menggugah selera. Jelajahi dunia rasa dan budaya kuliner
            Indonesia bersama kami.</p>

        <h3>Apa yang Kami Tawarkan:</h3>
        <ul>
            <li><i class="fas fa-utensils animated-icon"></i> Daftar Restoran dan Tempat Makan Terbaik</li>
            <li><i class="fas fa-receipt animated-icon"></i> Resep Autentik untuk Dicoba di Rumah</li>
            <li><i class="fas fa-comments animated-icon"></i> Ulasan Jujur dari Pengunjung</li>
            <li><i class="fas fa-globe animated-icon"></i> Panduan Kuliner Lokal dari Berbagai Daerah</li>
        </ul>

        <p>Dengan dedikasi untuk melestarikan tradisi kuliner nusantara, kami berkomitmen membantu Anda menemukan
            hidangan favorit dan menciptakan momen tak terlupakan bersama orang tercinta.</p>
    </div>

    <footer>
        <p>&copy; 2025 Daftar Kuliner. Semua Hak Cipta Dilindungi.</p>
        <p><a href="#">Hubungi Kami</a></p>
    </footer>

</body>

</html>