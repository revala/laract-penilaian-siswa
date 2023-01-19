@extends('main.layout')
@section('content')
<center>
    <h2>EDIT DATA KELAS</h2>
    <form action="/kelas/update/{{ $kelas->id }}" method="POST">
    @csrf
    <table width="50%">
        <tr>
            <td class="bar">NAMA KELAS</td>
            <td class="bar"><input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"></td>
        </tr>
        
        <tr>
            <td class="bar">JURUSAN</td>
            <td class="bar">
                <select name="jurusan_id" id="">
                    <option value="" disabled>PILIH JURUSAN</option>
                @foreach($jurusan as $jur)
                @if($kelas->jurusan_id == $jur->id)
                <option value="{{ $jur->id }}" selected>{{ $jur->nama_jurusan }}</option>
                @else
                <option value="{{ $jur->id }}">{{ $jur->nama_jurusan }}</option>
                @endif
            @endforeach
        </select>
            </td>
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