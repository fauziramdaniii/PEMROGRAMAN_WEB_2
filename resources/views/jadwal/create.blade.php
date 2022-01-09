@extends('layout.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h3> Tambah Sewa </h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div> <br />
        @endif
        <form method="post" action="/jadwal">
            @csrf
            <div class="form-group">
                <label for="name"> Nama </label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="date"> Tanggal </label>
                <input type="date" class="form-control" name="date" required>
            </div>
            <div class="form-group">
                <label for="clock_start"> Mulai Jam </label>
                <input type="time" class="form-control" name="clock_start" required>
            </div>
            <div class="form-group">
                <label for="clock_finish"> Selesai Jam </label>
                <input type="time" class="form-control" name="clock_finish" required>
            </div>
            <div class="form-group">
                <label for="day"> Hari </label>
                <input type="text" class="form-control" name="day" required>
            </div>
            <div class="form-group">
                <label for="description"> Keterangan </label>
                <input type="text" class="form-control" name="description" required>
            </div>
            <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
@endsection
