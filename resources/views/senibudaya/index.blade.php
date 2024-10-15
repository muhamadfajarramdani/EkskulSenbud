@extends('layouts.app')

@section('title', 'Daftar Seni Budaya')

@section('content')
<div class="container mt-4" data-aos="fade-down">
    <div class="bg-gradient text-center p-4 mb-4 rounded">
        <h1 class="mb-0 text-white">Daftar Seni Budaya</h1>
    </div>

    <a href="{{ route('senbud.create') }}" class="btn btn-success mb-4 shadow-sm btn-add">
        <i class="fas fa-plus"></i> Tambah Seni Budaya
    </a>

    <div class="row">
        @foreach($senibudayas as $senibudaya)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-primary card-custom">
                    <div class="card-header text-white text-center" style="background: linear-gradient(90deg, #343a40, #9a8ab5);">
                        <h5 class="mb-0">{{ $senibudaya->nama }}</h5>
                    </div>
                    <div class="card-body">
                        <h6>Pembimbing: <span class="text-muted">{{ $senibudaya->pembimbing }}</span></h6>
                        <p><strong>Jadwal:</strong> <span class="text-muted">{{ $senibudaya->jadwal }}</span></p>
                        <p class="card-text">{{ $senibudaya->deskripsi }}</p>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('senbud.edit', $senibudaya->id) }}" class="btn btn-warning btn-sm rounded">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('senbud.hapus', $senibudaya->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus data seni budaya ini?');">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    body {
        background-color: #e9ecef;
    }

    .bg-gradient {
        background: linear-gradient(90deg, #343a40, #9a8ab5);
    }

    .btn-add {
        transition: background-color 0.3s;
    }

    .btn-add:hover {
        background-color: #28a745;
        box-shadow: 0 4px 15px rgba(0, 255, 0, 0.2);
    }

    .card-custom {
        background-color: #ffffff;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card-custom:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
    }

    .card-header {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .card-footer {
        background-color: #f8f9fa;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }

    .text-muted {
        color: #6c757d;
    }
</style>

@endsection
