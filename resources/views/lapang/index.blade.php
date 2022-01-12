@extends('layout.app')
<?php $no=1 ?>
@section ("content")
<br>
<h3>Data Lapang</h3>
    <a href="/lapang/create" class="btn btn-danger"> Tambah Lapang</a><br>
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
            <th> Lapang </th>
            <th> Gambar </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lapangs as $lapang)
        <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $lapang->lapang }} </td>
            <td> {{ $lapang->gambar }} </td>
                <td>
                    <a href="/lapang/{{ $lapang->id }}/edit/" class="btn btn-info"> Edit</a>
                </td>
                <td>
                    <form action="/lapang/{{ $lapang->id }}" method="post">
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


            