@extends("layout.app")
@section("content")
<div class="col-md-8 offset-md-2">
    <h3>Tambah Sewa</h3>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div><br>
    @endif
    
    <form method="post" action="/jadwal/{{$jadwal->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name"> Nama </label>
            <input type="text" class="form-control" name="name" required value="{{$jadwal->name}}">
        </div>
        <div class="form-group">
            <label for="date"> Tanggal </label>
            <input type="date" class="form-control" name="date" required value="{{$jadwal->date}}" >
        </div>
        <div class="form-group">
            <label for="clock_start"> Mulai Jam </label>
            <input type="time" class="form-control" name="clock_start" required value="{{$jadwal->clock_start}}">
        </div>
        <div class="form-group">
            <label for="clock_finish"> Selesai Jam </label>
            <input type="time" class="form-control" name="clock_finish" required value="{{$jadwal->clock_finish}}">
        </div>
        <div class="form-group">
            <label for="day"> Hari </label>
            <input type="text" class="form-control" name="day" required value="{{$jadwal->day}}">
        </div>
        <div class="form-group">
            <label for="wa"> WhatsUpp </label>
            <input type="text" class="form-control" name="wa" required value="{{$jadwal->wa}}">
        </div>
        <div class="form-group">
            <label for="code"> Lapang </label>
            <select name="lapang_id" class="form-control" id="">
                <option value="">== Pilih Lapang ==</option>
                @foreach($lapangs as $id => $name)
                <option value="{{$id}}" {{$id == $jadwal->lapang_id ? "selected" : ""}}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary"> Simpan </button>
    </form>
</div>
@endsection