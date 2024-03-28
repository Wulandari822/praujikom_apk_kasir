<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aplikasi Kasir @yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
    .navbar{
        background-color: #223e9c;
    }
    .navbar-brand{
        color: #fff;
    }
    .main {
        height: 100vh;
    }

    .sidebar {
        background-color: #223e9c;
        height: 760px;
    }

    .sidebar h2{
        text-decoration: none;
        padding: 20px 20px;
        color:#fff;
        display: block;
        text-align: center;
    }
    .sidebar a{
        text-decoration: none;
        padding: 20px 20px;
        color:#fff;
        display: block;
    }

    .sidebar a:hover{
        color: #F4EAD5;
    }

    .sidebar a.active{
        color: #F4EAD5;
        border-right : solid 4px #655D8A;
    }
    
    .books {
        background-color: #223e9c;
    }

    .card-data{
        border-radius: 5px;
        padding: 20px 30px;
        border: solid 1px;
        color: #fff;
    }

    .card-data i {
        font-size: 50px;
    }

    .desc{
        font-size: 30px;
    }

    .count{
        font-size: 30px;
    }

    .category{
        background-color: #223e9c;
    }
    .user{
        background-color: #223e9c;
    }
</style>

<body>



        <div class="body-main h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 p-2  collapse d-lg-block" 
                id="navbarSupportedContent">
                    <h2 href=""><i class="bi bi-cart4"></i> </h2>
                    <a href="/dashboard">
                    <i class="bi bi-house p-2"></i>Dashboard</a>
                    <a href="/pembelian"><i class="bi bi-display p-2"></i></i>Pembelian</a>
                    <a href="/users"><i class="bi bi-person p-2"></i></i>User</a>  
                    <a href="/produk"><i class="bi bi-box-fill p-2"></i> Produk</a>
                    
                </div>
                <div class="content col-lg-9 p-5 ">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
