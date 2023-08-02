@extends('layouts.index')

@section('content')
<br\>   
<a class="btn btn-info" href="{{ url('pets/create') }}">Tambah</a> 
<br\>
<table class="table-bordered" table>    
        <tr>
            <th>Hewan</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th colspan="2">AKSI</th>
        </tr>
        @foreach($datas as $key=>$value)
            <tr>
                <td>{{ $value->hewan }}</td>
                <td>{{ $value->jenis }}</td>
                <td>{{ $value->jumlah }}</td>
                <td><a class="btn btn-info" href="{{ url('pets/'.$value->id.'/edit') }}">Update</a></td>
                <td>
                <form action="{{ url('pets/'.$value->id) }}" method="POST">
                        @csrf 
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection