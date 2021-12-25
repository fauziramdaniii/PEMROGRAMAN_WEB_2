@extends('layout.app')
<?php $no=1 ?>
@section ("content")
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
        </tr>
        @endforeach
    </tbody>
</table>
@stop

            