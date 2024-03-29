@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <title>Category</title>
    

    <style>
        .body {
            background-color: #065f44
        }
        .card {
            border: none;
            border-radius: auto;
            padding: 10px;
            transition: 0.5s;
            cursor: pointer;
        }
        .card-text{
            height:auto;  
        }
        .card-title{  
            font-size:15px;
            transition:1s;
            cursor:pointer;
        }
        .card-title i{  
            font-size:15px;
            transition:1s;
            cursor:pointer;
            color:#ffa710
        }
        .card-title :hover{
            transform: scale(1.25) rotate(100deg); 
            color:#18d4ca;
        }
        .card:hover{
            transform: scale(1.05);
            box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
        }
        .card::before, .card::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: scale3d(0, 0, 1);
            transition: transform .3s ease-out 0s;
            background: rgba(255, 255, 255, 0.1);
            content: '';
            pointer-events: none;
        }
        .card::before {
            transform-origin: left top;
        }
        .card::after {
            transform-origin: right bottom;
        }
        .card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
            transform: scale3d(1, 1, 1);
        }
        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            padding: auto;
            box-sizing: border-box;
            font-size: 16px;
        }

        @media screen and (max-width: 768px) {
            footer {
                font-size: 14px;
                padding: 10px;
            }
        }
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .content {
            min-height: calc(100vh - 50px); /* Menyesuaikan tinggi konten dengan navbar dan footer */
            /* tambahkan padding-bottom untuk memberi ruang pada footer */
            padding-bottom: 50px; /* ganti angka sesuai kebutuhan */
            display: flex; /* Menjadikan konten sebagai flex container */
            flex-direction: column; /* Mengatur tata letak konten secara vertikal */
            align-items: center; /* Mengatur konten agar berada di tengah-tengah secara horizontal */
        }
    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        /* tambahkan padding dan gaya lain sesuai kebutuhan */
        padding: 0px;
        background-color: #8BACAA;
        text-align: center;
    }

    footer p {
        margin-top: 0;
        margin-bottom: 0;
    }

    .content {
            min-height: calc(100vh - 50px); /* Menyesuaikan tinggi konten dengan navbar dan footer */
            /* tambahkan padding-bottom untuk memberi ruang pada footer */
            padding-bottom: 50px; /* ganti angka sesuai kebutuhan */
            display: flex; /* Menjadikan konten sebagai flex container */
            flex-direction: column; /* Mengatur tata letak konten secara vertikal */
            align-items: center; /* Mengatur konten agar berada di tengah-tengah secara horizontal */
        }
    </style>
    </head>



    <body>
    <div class="container mt-2">
    <div class="row">
        @foreach ($category as $item)
        <div class="col-md-3 mt-4">
            <div class="card card-block">
              <a href="{{'/category/'.$item->slug }}">
                <h4 class="card-title text-center mt-3 mb-3"><i class="material-icons">{{$item->category}}</i></h4>
                <img src="{{asset($item->image)}}" style="background-position: center; width: 285px; height: 195px;">
              </a>
            </div>
          </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
             </script>
    </body>
</html>
@endsection