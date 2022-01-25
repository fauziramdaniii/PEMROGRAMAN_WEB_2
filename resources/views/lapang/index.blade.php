@extends("layout.app")

@section("content")
<center><h3>Data Lapangan</h3>
<center><a href="/lapang/create" class="btn btn-dark">Tambah Lapangan</a>
<div class="col-sm-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
</div>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
              <td>No</td>
                <td>Lapang</td>
                <td> Jumlah </td>
                <td colspan="2"><center>Aksi </td>
            </tr>
        </thead>
        <tbody>
            @foreach($lapangs as $lapang)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$lapang->name}}</td>
                <td>{{$lapang->lapangs->count(  )  }} Penyewa </td>
                <td>
                    <a href="/lapang/{{$lapang->id}}/edit/" class="btn btn-info">Edit</a>
                </td>
                <td>
                    <form action="/lapang/{{$lapang->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-dark" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop