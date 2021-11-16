<!DOCTYPE html>
<html lang="id">

<head>
    <title>Kalkulator Tekanan Hidrostatis dan GLBB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#hide").click(function () {
                $("#isi").toggle();
            });
        });

        $(document).ready(function () {
            $("#show").click(function () {
                $("#isii").toggle();
            });
        });
    </script>
    <style>
        .container {
            padding-top: 40px;
        }

        .btn-dark {
            background-color: rgb(0, 0, 0);
            border: 2px solid rgb(255, 255, 255);
            padding: 10px;
        }

        body {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT344ejYmSn8B4Vsn-tVLyTb2yCkfKGUgqJCg&usqp=CAU");
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">GLBB</div>
            <button id="hide">Tampilkan</button>
            <div class="card-body" id="isi">
                <div class="card-body">
                    <form action="formPhp" method="post" onsubmit="return showPhp()">
                        @csrf
                        <div class="form-group">
                            <label for="g">Masukkan Gravitasi</label>
                            <input type="number" class="form-control" id="g" name="g">
                        </div>
                        <div class="form-group">
                            <label for="v">Masukkan Kecepatan</label>
                            <input type="number" class="form-control" id="v" name="v">
                        </div>
                        <div class="form-group">
                            <label for="t">Masukkan Waktu</label>
                            <input type="number" class="form-control" id="t" name="t">
                        </div>
                        <div class="form-group">
                            <label for="s">Masukkan Posisi</label>
                            <input type="number" class="form-control" id="s" name="s">
                        </div>
                        <button type="submit" class="btn btn-dark">Jumlah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
