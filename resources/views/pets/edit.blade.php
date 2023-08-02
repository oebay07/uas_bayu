@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('pets') }}">
        @csrf 
        Hewan : <input type="text" name="hewan"><br/>
        Jenis : <input type="text" name="jenis"><br/>
        Jumlah : <input type="text" name="jumlah"><br/>

        <button type="submit">SIMPAN</button>
    </form>
@endsection