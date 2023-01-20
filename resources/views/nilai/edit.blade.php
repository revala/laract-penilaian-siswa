@extends('main.layout')
@section('content')
<center>
    <h2>TAMBAH LIST NILAI</h2>
    <form action="/nilai/update/{{ $nilai->id }}" method="POST">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">GURU MAPEL</td>
                <td class="bar">
                    <select name="mengajar_id">
                    @foreach($mengajar as $men)
                    <option value="{{ $men->id }}" @if ($men->id == $nilai->mengajar_id) selected @endif>
                        {{ $men->guru->nama_guru }} {{ $men->mapel->nama_mapel }} {{ $men->kelas->nama_kelas }}  
                    </option>
                @endforeach
                </select>
                </td>
            </tr>

            <tr>
                <td class="bar">NAMA SISWA</td>
                <td class="bar">
                    <select name="siswa_id">
                    @foreach($siswa as $sis)
                    <option value="{{ $sis->id }}" @if($sis->id == $nilai->siswa_id) selected @endif>
                        {{ $sis->nama_siswa }}
                    </option>
                @endforeach
                </select>
                </td>
            </tr>

            <tr>
                <td class="bar">UH</td>
                <td class="bar"><input type="text" name="uh" value="{{ $nilai->uh }}"></td>
            </tr>

            <tr>
                <td class="bar">UTS</td>
                <td class="bar"><input type="text" name="uts" value="{{ $nilai->uts }}"></td>
            </tr>

            <tr>
                <td class="bar">UAS</td>
                <td class="bar"><input type="text" name="uas" value="{{ $nilai->uas }}"></td>
            </tr>


            <tr>
                <td colspan="2">
                    <center><button type="submit" class="button-primary">SIMPAN</button></center>
                </td>
            </tr>
        </table>
    </form>
</center>
@endsection