<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Covid 19 Kuisioner</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">

        <!-- Styles -->
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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: #ffffff;
            }
            .isi{
                color: #ffffff;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .links{

            padding-top: 70px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    COVID 19 - RISK TEST
                </div>
                <div class="isi">
                    <h3>Ayo ikut serta berpartisipasi dalam kegiatan mengenali lebih lanjut resiko terkena COVID - 19</h3>
                    <h4>AYO SEBELUM TERLAMBAT !!</h4>
                </div>

                <div class="links">
                    
                    <a href="/kuisioner"><button class="btn btn-danger">LIST PARTISIPAN</button></a>
                    <a href="/form"><button class="btn btn-success">AYO MULAI !</button></a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
