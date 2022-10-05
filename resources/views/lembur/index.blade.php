@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @include('layouts/_flash')
                <table>
                    <td>
                        <h6 class="m-0 font-weight-bold text-primary">Data Lembur</h6>
                    </td>
                    <a href="{{ route('lembur.create') }}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah Data
                    </a>
            </div>
            </table>

        </div>
        <div class="card-body">
            <div class="table-container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Klamin</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp @foreach ($lembur as $data)
                            <tr>
                                <td>{{ $data->nip }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->ttl }}</td>
                                <td>{{ $data->jk }}</td>
                                <td>{{ $data->jabatan }}</td>
                                <td>
                                    <form action="{{ route('lembur.destroy', $data->id) }}" method="post">
                                        @csrf @method('delete')
                                        <a href="{{ route('lembur.edit', $data->id) }}"
                                            class="btn btn-sm btn-outline-success">
                                            Edit
                                        </a> |
                                        <a href="{{ route('lembur.show', $data->id) }}"
                                            class="btn btn-sm btn-outline-warning">
                                            Show
                                        </a> |
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Apakah Anda Yakin?')">Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
