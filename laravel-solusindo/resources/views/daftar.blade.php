<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Lockscreen | Klorofil - Free Bootstrap Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('klorofil')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('klorofil')}}/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('klorofil')}}/assets/vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('klorofil')}}/assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('klorofil')}}/assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('klorofil')}}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('klorofil')}}/assets/img/favicon.png">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box lockscreen clearfix">
                    <div class="content">
                        @if(Session('sukses'))<div class="alert alert-success">{{session('sukses')}}</div>@endif
                        <h3 class="text-center">Daftar Akun</h3><br>
                        <form action="{{route('daftarPost')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama"><br>
                                <input type="email" class="form-control" name="email" placeholder="Masukan Email"><br>
                                <input type="password" class="form-control" name="password" placeholder="Masukan Password"><br>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat"><br>
                                <input type="number" class="form-control" name="telepon" placeholder="Masukan No Hand Phone">
                            </div>
                            <button class="btn btn-primary form-control">Daftar</button>
                            <p class="text-center">Sudah punya akun <a href="{{route('index')}}">klik ini</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>
