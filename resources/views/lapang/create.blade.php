@extends('layout.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h3> Tambah Lapang </h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div> <br />
        @endif
        <form method="post" action="/lapang">
            @csrf
            <div class="form-group">
                <label for="name"> Lapang </label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
@endsection
