<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
</head>

<body style="background-color: #f2f2f2">
    <div class="container">
        <br>
        <header>
            <div style="text-align: center;">
                <img src="{{ URL::asset('/image/tamtam.png') }}" alt="foto raffi" width="100px">

                <h1>Muhammad Raffi Priyadiantama</h1>

                <h1>5026201072</h1>
            </div>
        </header>

        <div class="row">
            <div class="col-sm-3 text-center">
                <div>
                    <h3>Menu</h3>
                </div>
                <div>
                    <ul class="nav nav-pills nav-justified flex-column">
                        <li class="nav-item">
                            <a class="btn btn-default nav-link" href="/pegawai">Pegawai</a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="btn btn-default nav-link" href="/absen">Absen</a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="btn btn-default nav-link" href="/tugas">Tugas</a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="btn btn-default nav-link" href="/agen">Agen</a>
                        </li>
                        <br>
                    </ul>
                </div>
            </div>

            <div class="col-sm-9 text-justify" style="background-color: #ffffff">
                <h3>@yield('judulhalaman')</h3>

                @section('konten')

                @show
            </div>
        </div>
        <br>
        <br>
        <footer>
            <center><span> ©2021 Hak Cipta Oleh 5026201073 - Muhammad Raffi Priyadiantama</span></center>
        </footer>
    </div>

</body>

</html>
