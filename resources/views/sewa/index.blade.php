@extends('layout.app')
<?php $no=1 ?>
@section ("content")
<h3><center>Data Sewa</h3>
    <center><a href="/sewa/create" class="btn btn-dark">Sewa Lapang </a>
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
            <th> No WA </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sewas as $sewa)
        <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $sewa->name }} </td>
            <td> {{ $sewa->date }} </td>
            <td> {{ $sewa->clock_start }} </td>
            <td> {{ $sewa->clock_finish }} </td>
            <td> {{ $sewa->day }} </td>
            <td> {{ $sewa->wa}}
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
            