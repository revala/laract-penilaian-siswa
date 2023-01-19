@extends('main.layout')
@section('content')
<center>
    <h2>TAMBAH DATA MENGAJAR</h2>
    <form action="/mengajar/store" method="POST">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">NAMA GURU</td>
                <td class="bar">
                    <select name="guru_id">
                        <option value="" class="text-danger" disabled selected hidden>PILIH NAMA GURU</option>
                    @foreach($guru as $gur)
                    <option value="{{ $gur->id }}">{{ $gur->nama_guru }}</option>
                @endforeach
                </select>
                </td>
            </tr>

            <tr>
                <td class="bar">MATA PELAJARAN</td>
                <td class="bar">
                    <select name="mapel_id">
                        <option value="" disabled selected hidden>PILIH MATA PELAJARAN</option>
                    @foreach($mapel as $map)
                    <option value="{{ $map->id }}">{{ $map->nama_mapel }}</option>
                @endforeach
                </select>
                </td>
            </tr>

            <tr>
                <td class="bar">KELAS</td>
                <td class="bar">
                    <select name="kelas_id">
                        <option value="" disabled selected hidden>PILIH KELAS</option>
                    @foreach($kelas as $kel)
                    <option value="{{ $kel->id }}">{{ $kel->nama_kelas }}</option>
                @endforeach
                </select>
                </td>
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