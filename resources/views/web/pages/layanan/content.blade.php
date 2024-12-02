<div class="container mt-4">
    <h2>unduh file formulir pelayanan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Layanan</th>
                <th>link akses</th>
                <th>Syarat Mekanisme</th>
            </tr>
        </thead>
        <tbody>
            @foreach($layanan as $dokumen)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dokumen->nama_layanan }}</td>
                <td>
                    <a href="{{ $dokumen->link_akses }}" target="_blank" class="btn btn-primary">
                        Klik Disini
                    </a>
                </td>
                <td>
                    @if($dokumen->syarat_mekanisme)
                        <a href="{{ route('layanan.syarat_mekanisme', $dokumen->id) }}" class="btn btn-info">
                            Lihat Syarat & Mekanisme
                        </a>
                    @else
                        <span>Tidak Ada Syarat & Mekanisme</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>