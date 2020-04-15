<html>
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
        <style>
            html, body {
                background-color: #fff;
                background-image: url("../images/banner.png");
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                
            }   
            .container{
                color: #ffffff;
            }     

            .isi{
                color: #ffffff;
            }
        </style>
                <title>Covid 19 Kuisioner</title>

    </head>
    <body class="d-flex flex-column justify-content-center">
        <div class="container">
            <h2 class="text-center mb-4">List Pengguna</h2>
            @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="isi">
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Jawaban Ya</td>
                        <td>Jawaban Tidak</td>
                        <td>Keterangan</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="isi">
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->yes_answer}}</td>
                            <td>{{$user->no_answer}}</td>
                            <td>
                                @if($user->yes_answer <= 7)
                                {{"Potensi tertular rendah"}}
                                @elseif($user->yes_answer <= 14)
                                {{"Anda berpotensi tertular"}}
                                @else
                                {{"Potensi tertular sangat tinggi"}}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/">
                <button class="btn btn-danger">KEMBALI</button>
            </a>
        </div>
    </body>
</html>
