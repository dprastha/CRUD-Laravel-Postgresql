@extends('layout.default')

@section('content')

<section>
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Surat Masuk</h4>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Id Pegawai</th>
                                    <th>Perihal</th>
                                    <th>Penerima</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                               
                                @forelse($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->id_pegawai }}</td>
                                    <td>{{ $item->perihal }}</td>
                                    <td>{{ $item->penerima }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>
                                        <a href="{{ route('suratkeluar.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('suratkeluar.destroy', $item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center p-5">
                                        Data tidak tersedia
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endSection()