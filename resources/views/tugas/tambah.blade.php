@extends('layout.bahagia')

@section('title','Tugas CRUD-Query Builder')
@section('judulhalaman','Menambah Data Tugas')

@section('konten')

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="id_pegawai" required="required"> <br/>
        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale: 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>

		NamaTugas <input type="text" name="nama_tugas" required="required"> <br/>
		Status <input type="text" name="status" required="required" pattern="[A-Za-z]{1}" placeholder="Y/N"><br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>

@endsection
