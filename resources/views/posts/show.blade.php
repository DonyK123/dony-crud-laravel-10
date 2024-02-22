<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - Dony kurniawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: lightgray;
            font-family: Arial, sans-serif; /* Mengganti font family */
        }
        .card-custom {
            border: none;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .card-custom img {
            width: 50%;
            border-radius: 10px;
            margin-bottom: 20px; /* Menambahkan ruang antara gambar dan judul */
        }
        .card-custom hr {
            border-top: 1px solid #ccc;
        }
        .card-custom h4 {
            margin-top: 20px;
            color: #333; /* Warna judul */
        }
        .card-custom p {
            margin-top: 10px;
            color: #666; /* Warna konten */
        }
    </style>
</head>
<body>
    @include('layouts.app')

    <div class="container mt-5 mb-5 ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-custom roun   ded- rounded-5">
                    <div class="card-body text-center rounded- rounded-5 border
                    border-dark border-5">
                        <img src="{{ asset('storage/posts/'.$post->image) }}" alt="{{ $post->title }}">
                    </div>
                    <div class="card-body text-center border
                    border-dark border-5 mt-2   ">
                        <h4>{{ $post->title }}</h4>
                    </div>
                    <div class="card-body text-center rounded-top rounded-5 border
                    border-dark border-5 mt-2   ">
                    <p>{!! $post->content !!}</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
