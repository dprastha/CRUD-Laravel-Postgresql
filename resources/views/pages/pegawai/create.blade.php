@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Tambah Pegawai</strong>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('pegawai.store') }}" method="POST">
         @csrf
         {{-- Id --}}
         <div class="form-group">
            <label for="id_pegawai" class="form-control-label">Id pegawai</label>
            <input type="text" 
            name="id_pegawai" 
            id="id_pegawai" 
            value="{{ old('id_pegawai') }}" class="form-control @error('id_pegawai') is-invalid @enderror">
            @error('id_pegawai') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Nama --}}
         <div class="form-group">
            <label for="nama" class="form-control-label">Nama Pegawai</label>
            <input type="text" 
            name="nama" 
            id="nama" 
            value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- jumlah_surat_masuk --}}
         <div class="form-group">
            <label for="jumlah_surat_masuk" class="form-control-label">Jumlah Surat Masuk</label>
            <input type="number" 
            name="jumlah_surat_masuk" 
            id="jumlah_surat_masuk" 
            value="0" class="form-control @error('jumlah_surat_masuk') is-invalid @enderror">
            @error('jumlah_surat_masuk') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- jumlah_surat_keluar --}}
         <div class="form-group">
            <label for="jumlah_surat_keluar" class="form-control-label">Jumlah Surat Keluar</label>
            <input type="number" 
            name="jumlah_surat_keluar" 
            id="jumlah_surat_keluar" 
            value="0" class="form-control @error('jumlah_surat_keluar') is-invalid @enderror">
            @error('jumlah_surat_keluar') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Tambah Pegawai
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()