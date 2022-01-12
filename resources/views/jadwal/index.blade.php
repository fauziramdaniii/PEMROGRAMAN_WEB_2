@extends('layout.app')
<?php $no=1 ?>
@section ("content")
<br>
<h3>Data Sewa</h3>
    <a href="/jadwal/create" class="btn btn-danger"> Tambah Sewa </a><br>
    <div class="col-sm-12"> <br>

        @if (session()->get('success'))
            <div class="alert alert-sucess">
                {{ session()->get('sucess') }}
            </div>
        @endif
    </div>
<table class="table table-striped">
    <thead>
        <tr>
            <th> No </th>
            <th> Nama </th>
            <th> Tanggal </th>
            <th> Mulai Jam</th>
            <th> Selesai Jam </th>
            <th> Hari </th>
            <th> Keterangan </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jadwals as $jadwal)
        <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $jadwal->name }} </td>
            <td> {{ $jadwal->date }} </td>
            <td> {{ $jadwal->clock_start }} </td>
            <td> {{ $jadwal->clock_finish }} </td>
            <td> {{ $jadwal->day }} </td>
            <td> {{ $jadwal->description}}
                <td>
                    <a href="/jadwal/{{ $jadwal->id }}/edit/" class="btn btn-info"> Edit</a>
                </td>
                <td>
                    <form action="/jadwal/{{ $jadwal->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-dark" type="submit"> Delete</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
            