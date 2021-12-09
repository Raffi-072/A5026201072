@extends('layout.bahagia')

@section('title', 'Tugas CRUD-Query Builder')
@section('judulhalaman', 'Edit Tugas')

@section('konten')

    <a href="/tugas"> Kembali</a>

    <br />
    <br />

    @foreach ($tugas as $t)
        <form action="/tugas/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->ID }}"> <br />
            IDPegawai <select name="id_pegawai">
                @foreach ($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $t->IDPegawai) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" value="{{ $t->Tanggal }}"
                        required="required" />
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

            NamaTugas <input type="text" name="nama_tugas" required="required" value="{{ $t->NamaTugas }}"> <br />
            Status <input type="text" name="status" required="required" pattern="[A-Za-z]{1}" placeholder="Y/N"
                value="{{ $t->Status }}"><br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach


    </body>

@endsection
