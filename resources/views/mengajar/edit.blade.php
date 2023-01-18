@extends('main.layout')
@section('content')
<center>
    <h2>EDIT DATA MENGAJAR</h2>
    <form action="/mengajar/update/{{ $mengajar->id }}" method="POST">
    @csrf
    <table width="50%">
        <tr>
            <td class="bar">NAMA GURU</td>
            <td class="bar">
                <select name="guru_id" id="">
                    <option value=""></option>
                @foreach($guru as $gur)
                @if($gur->id == $mengajar->guru_id)
                <option value="{{ $gur->id }}" selected>{{ $gur->nama_guru }}</option>
                @else
                <option value="{{ $gur->id }}">{{ $gur->nama_guru }}</option>
                @endif
            @endforeach
        </select>
            </td>
        </tr>

        <tr>
            <td class="bar">MATA PELAJARAN</td>
            <td class="bar">
                <select name="mapel_id" id="">
                    <option value=""></option>
                @foreach($mapel as $map)
                @if($map->id == $mengajar->mapel_id)
                <option value="{{ $map->id }}" selected>{{ $map->nama_mapel }}</option>
                @else
                <option value="{{ $map->id }}">{{ $map->nama_mapel }}</option>
                @endif
            @endforeach
        </select>
            </td>
        </tr>

        <tr>
            <td class="bar">KELAS</td>
            <td class="bar">
                <select name="kelas_id" id="">
                    <option value=""></option>
                @foreach($kelas as $kel)
                @if($kel->id == $mengajar->kelas_id)
                <option value="{{ $kel->id }}" selected>{{ $kel->nama_kelas }}</option>
                @else
                <option value="{{ $kel->id }}">{{ $kel->nama_kelas }}</option>
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