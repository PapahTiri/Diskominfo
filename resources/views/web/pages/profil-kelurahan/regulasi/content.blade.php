<div class="container mt-4">
    <h2>Daftar Peraturan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Peraturan</th>
                <th>Tentang</th>
                <th>Nomor</th>
                <th>Tahun</th>
                <th>File Dokumen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($regulasi as $dokumen)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dokumen->peraturan }}</td>
                <td>{{ $dokumen->tentang }}</td>
                <td>{{ $dokumen->nomor }}</td>
                <td>{{ $dokumen->tahun }}</td>
                <td>
                        <a href="{{ asset('storage/uploads/regulasi/' . $dokumen->file_dokumen) }}" target="_blank" class="btn btn-primary">Lihat Dokumen</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>