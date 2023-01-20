@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST NILAI</h2>
        @if(session('user')->role == 'guru')
        <a href="/nilai/create" class="button-primary">TAMBAH DATA</a>
        @endif
        @if(session('success'))
        <p class="text-success">{{ session('success') }}</p>
        @endif

        @if(session('success'))
        <p class="text-success">{{ session('error') }}</p>
        @endif

        <table cellPadding="10">
            <tr>
                <th>NO</th>
                <th>GURU-MAPEL-KELAS</th>
                <th>NAMA SISWA</th>
                <th>UH</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>NA</th>
                @if(session('user')->role == 'guru')
                <th>ACTION</th>
                @endif
            </tr>
            @foreach($nilai as $n)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $n->mengajar->guru->nama_guru }} {{ $n->mengajar->mapel->nama_mapel }} {{ $n->mengajar->kelas->nama_kelas }}</td>
                <td>{{ $n->siswa->nama_siswa }}</td>
                <td>{{ $n->uh }}</td>
                <td>{{ $n->uts }}</td>
                <td>{{ $n->uas }}</td>
                <td>{{ $n->na }}</td>
                @if(session('user')->role == 'guru')
                <td>
                    <a href="/nilai/edit/{{ $n->id }}" class="button-warning">EDIT</a>
                    <a href="/nilai/destroy/{{ $n->id }}" onclick="return confirm('Yakin hapus?')" class="button-danger">HAPUS</a>
                </td>
                @endif
            </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection