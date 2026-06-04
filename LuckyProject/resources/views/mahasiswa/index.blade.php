<h1>Data Mahasiswa</h1>

<table border="1" cellpadding ="10">
    <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Foto</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
        <th>Aksi</th>
    </tr>
    @foreach (%Mahasiswa as $key => $mhs)
    <tr>
        <td>{{$key +1}}</td>
        <td>{{$Mhs->nama_Mahasiswa}}</td>
        <td>{{$Mhs->NPM}}</td>
        <td>
            @if($mhs->foto)
                <img src="{{ assets('storage/fotos/' . $mhs->foto) }}" alt="Foto" width="100">
            @else
                <p>Foto tidak tersedia</p>
            @endif
        </td>
        <td>{{ $mhs->prodi->nama_prodi ?? '_' }}</td>
        <td>
            <a href="{{ route('mahasiswa.edit', )}}"
    </tr>
    @endforeach
</table>