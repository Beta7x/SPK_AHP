@extends('template.master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Siswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Siswa Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card w-100">
                <div class="card-body tableIndex">
                    <table id="exam1" class="table table-hover table-bordered table-striped mt-8" data-export-title="Guru">
                        <thead>
                            <tr class="tableHeadRow">
                                <th style="width: 1rem">No</th>
                                <th>Nama Siswa</th>
                                <th>NISN</th>
                                {{-- <th>Jurusan</th> --}}
                                <th style="width: 7rem">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                                <tr>
                                    <td class="centerThingsColumn">{{ $no++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->nisn }}</td>
                                    {{-- <td>{{ $data->jurusan }}</td> --}}
                                    <td class="centerThingsColumn">
                                        <form action="{{ route('guru.delete', $data->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin akan hapus data')">
                                            @csrf @method('delete')
                                            <a href="{{ route('guru.edit', $data->id) }}"
                                                class="btn btn-warning btn-sm mr-1">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
