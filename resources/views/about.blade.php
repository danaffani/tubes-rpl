@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About SewaRuang.id</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Nunito', sans-serif;
            background-color: black;
            color: white;
        }
        .container {
            width: 80%;
            background-color: white;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            margin: 20px auto;
        }
        .text-content {
            width: 50%;
        }
        .text-content h1, .text-content p {
            color: black;
        }
        .image-content {
            width: 45%;
        }
        .image-content img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .btn {
            display: inline-block;
            background-color: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-content">
            <h1>About SewaRuang.id</h1>
            <p>Selamat datang di SewaRuang.id, platform penyewaan ruangan terdepan yang menawarkan solusi fleksibel dan modern untuk berbagai kebutuhan Anda! Apakah Anda mencari tempat untuk rapat bisnis, pelatihan profesional, atau acara kreatif, kami menyediakan beragam ruangan yang siap mendukung kesuksesan acara Anda. Dengan fasilitas lengkap seperti internet kecepatan tinggi, sistem audio-visual canggih, dan layanan katering opsional, setiap detail telah dipikirkan untuk memastikan kenyamanan dan efisiensi.</p>
            <p>Di SewaRuang.id, kami percaya bahwa ruang yang tepat dapat membuat perbedaan besar. Oleh karena itu, kami berkomitmen untuk memberikan pengalaman penyewaan yang mudah, cepat, dan menyenangkan. Lokasi strategis, desain interior yang ramah membuat kami menjadi pilihan utama bagi individu dan perusahaan yang menginginkan kualitas terbaik. Temukan ruang ideal Anda bersama kami dan bawa acara Anda ke level berikutnya!</p>
            <a href="{{ url('/') }}" class="btn">Back</a>
        </div>
        <div class="image-content">
            <img src="{{ asset('images/meeting room.jpg') }}" alt="Meeting Room">
        </div>
    </div>
</body>
</html>
@endsection