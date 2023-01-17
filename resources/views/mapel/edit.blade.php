@extends('main.layout')
@section('content')
<center>
    <h2>EDIT DATA MATA PELAJARAN</h2>
    <form action="/mapel/update/{{ $mapel->id }}" method="POST">
    @csrf
    <table width="50%">
        <tr>
            <td class="bar">MATA PELAJARAN</td>
            <td class="bar"><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
        </tr>
        
        <tr>
            <td colspan="2">
                <center><button type="submit" class="button-primary">UBAH</button></center>
            </td>
        </tr>
    </table>
    </form>
</center>
@endsection