@extends("layout.app")

@section("content")
<h3>Lihat Data Lapang #{{$lapang->name}}</h3>
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
                <td>Nama</td>
                <td>Lapang</td>
                <td colspan=2></td>
            </tr>
        </thead>
        <tbody>
            @if($lapang->jadwals)
            @foreach($lapang->jadwals as $jadwal)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$jadwal->code}}</td>
                <td>{{$jadwal->name}}</td>
                <td>
                    <a href="/lapang/{{$lapang->id}}/edit/" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="/lapang/{{$lapang->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
@stop