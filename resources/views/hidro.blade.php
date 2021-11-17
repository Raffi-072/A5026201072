<html lang="en">

<head>
    <title>Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container {
            margin-top: 40px;
            border: 1px black;
            background-color: white;
            padding-bottom: 20px;
            padding-top: 20px;
        }

        body {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT344ejYmSn8B4Vsn-tVLyTb2yCkfKGUgqJCg&usqp=CAU");
        }

        div {
            font-family: Arial, Helvetica, sans-serif;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    function hidrostatis()
    {
        $gravitasi = $_POST["gravitasi"];
        $p = $_POST["p"];
        $h = $_POST["h"];

        $hasil = $gravitasi * $p * $h;
        echo $hasil;
    }
    ?>

    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col-xs-12 col-md-8">
                <h3>Hasil Akhir Perhitungan Tekanan Hidrostatis</h3>
                <br>
                <div class="row mt-3">
                    <label class="col-md-5">Gravitasi</label>
                    <span class="col-md-1">:</span>
                    <div class="col-md-6"> <?php echo $_POST["gravitasi"]; ?></div>
                </div>
                <div class="row mt-3">
                    <label class="col-md-5">Massa Jenis Zat Cair</label>
                    <span class="col-md-1">:</span>
                    <div class="col-md-6"><?php echo $_POST["p"]; ?></div>
                </div>
                <div class="row mt-3">
                    <label class="col-md-5">Ketinggian</label>
                    <span class="col-md-1">:</span>
                    <div class="col-md-6"><?php echo $_POST["h"]; ?></div>
                </div>
                <div class="row mt-3">
                    <label class="col-md-5">Hasil Tekanan Hidrostatis</label>
                    <span class="col-md-1">:</span>
                    <div class="col-md-6"><?php hidrostatis(); ?></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
