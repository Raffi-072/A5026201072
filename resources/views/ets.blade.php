<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Vaksinasi Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function vaksinasiForm() {
            var nama = document.registration.nama;
            var nik = document.registration.nik;
            var vaksin = document.registration.vaksin;
            var batch = document.registration.batch;


            if (nama_valid(nama)) {
                if (nik_valid(nik)) {
                    if (vaksin_valid(vaksin)) {
                        if (batch_valid(batch)) {
                            return true;
                        }
                    }
                }
            }
            return false;
        }

        function nama_valid(nama) {
            var letter = /^[A-Za-z\s]+$/;
            var let_len = nama.value.length;
            if (let_len == 0) {
                alert("Nama tidak boleh kosong");
                return false;
            }
            else if (let_len <= 16) {
                alert("Nama minimal 16 karakter");
                return false;
            }
            else if (nama.value.match(letter)) {
                nama.focus();
                return true;
            }
        }

        function nik_valid(nik) {
            var niks = /^[0-9]+$/;
            var nik_len = nik.value.length;
            if (nik_len == 0) {
                alert("NIK tidak boleh kosong");
                return false;
            }

            else if (nik_len != 16) {
                alert("NIK harus angka dan 16 digit")
                return false;
            }

            else if (nik.value.match(niks)) {
                nik.focus();
                return true;
            }
        }

        function vaksin_valid(vaksin) {
            if (vaksin.selectedIndex < 1) {
                alert("Jenis Vaksin tidak boleh kosong");
                vaksin.focus();
                return false;
            }
            else {
                return true;
            }
        }

        function batch_valid(batch) {
            var batchs = /^[A-Za-z0-9]+$/;
            if (batch.value.match(batchs)) {
                return true;
            }

            else {
                alert("No batch tidak boleh ada spasi , “;” ");
                batch.focus();
                return false;
            }
        }
    </script>
    <style>
        .container {
            margin-top: 40px;
            border: 1px black;
            background-color: white;
            padding-bottom: 20px;
        }

        body {
            background-image: url("https://i.redd.it/okj2vw7vrkx31.jpg");
            background-size: cover;
            padding-bottom: 50px;
        }

        div {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col-xs-12 col-md-8">
                <div class="form-warp">
                    <div>
                        Muhammad Raffi Priyadiantama
                        <br>
                        Raffi
                        <br>
                        5026201072
                    </div>
                    <h1 class="text-center">Form Input Peserta Vaksinasi</h1>
                    <br>
                    <form name="registration" onSubmit="return vaksinasiForm();" action="https://itemku.com/"
                        method="post"> @csrf
                        <div class="form-group row">
                            <label class="col-md-3" for="nama"><b>Nama Peserta</b></label>
                            <span class="col-md-1">:</span>
                            <input class="col-md-8" type="text" id="nama" name="nama">
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3" for="nik"><b>NIK</b></label>
                            <span class="col-md-1">:</span>
                            <input class="col-md-8" type="text" id="nik" name="nik">
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3" for="vaksin"><b>Jenis Vaksin</b></label>
                            <span class="col-md-1">:</span>
                            <select class="col-md-8" id="vaksin" name="vaksin">
                                <option> </option>
                                <option>AZ</option>
                                <option>Sinovac</option>
                                <option>Moderna</option>
                            </select>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3" for="batch"><b>No batch</b></label>
                            <span class="col-md-1">:</span>
                            <input class="col-md-8" type="text" id="batch" name="batch">
                        </div>

                        <div class="text-center col-sm">
                            <button type="submit" class="btn btn-primary col-4">Simpan</button>
                            <button type="reset" class="btn btn-success col-4">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
