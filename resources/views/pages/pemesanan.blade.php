<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Aset Hardware</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <a href="{{ route('hardware.print') }}" class="btn btn-rounded btn-danger">Print to PDF</a>
                            <a href="{{ route('export.hardware') }}" class="btn btn-primary">Export to Excel</a>
                        </div>
                        <a href="{{ route('TambahDataHardware.create') }}" type="button" class="btn btn-rounded btn-success">
                            <i class="bi bi-plus-square" style="margin-right: 5px">Tambah Data</i>
                        </a>
                    </div>

                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table datatable table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No Aset</th>
                                    <th>No Inventaris</th>
                                    <th>Tahun</th>
                                    <th>Jenis</th>
                                    <th>Merek</th>
                                    <th>Proc</th>
                                    <th>RAM</th>
                                    <th>HDD</th>
                                    <th>IP</th>
                                    <th>User</th>
                                    <th>Unit</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <th>Windows</th>
                                    <th>Office</th>
                                    <th>Garansi</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hardware as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->no_inventaris }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td>{{ $item->merek }}</td>
                                    <td>{{ $item->proc }}</td>
                                    <td>{{ $item->ram }}</td>
                                    <td>{{ $item->hdd }}</td>
                                    <td>{{ $item->ip }}</td>
                                    <td>{{ $item->user }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>{{ $item->lokasi }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->windows }}</td>
                                    <td>{{ $item->office }}</td>
                                    <td>{{ $item->garansi }}</td>
                                    <td>
                                        <a href="{{ route('edit-data-hardware',$item->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        {{-- <i class="bi bi-pencil-square"></i> --}}
                                        <a href="{{ route('delete-data-hardware', $item->id) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill" style="color: red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>