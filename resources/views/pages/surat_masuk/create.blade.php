@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Tambah Surat Masuk</strong>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('suratmasuk.store') }}" method="POST">
         @csrf
         {{-- Id --}}
         <div class="form-group">
            <label for="id_pegawai" class="form-control-label">Id pegawai</label>
            <select name="id_pegawai" id="id_pegawai" class="form-control @error('id_pegawai') is-invalid @enderror">
               @foreach ($items as $item)
                  <option value="{{ $item->id_pegawai }}">{{ $item->id_pegawai }} - {{$item->nama}}</option>
               @endforeach
            </select>
            @error('id_pegawai') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Perihal --}}
         <div class="form-group">
            <label for="perihal" class="form-control-label">Perihal</label>
            <input type="text" 
            name="perihal" 
            id="perihal" 
            value="{{ old('perihal') }}" class="form-control @error('perihal') is-invalid @enderror">
            @error('perihal') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- pengirim --}}
         <div class="form-group">
            <label for="pengirim" class="form-control-label">Pengirim</label>
            <input type="text" 
            name="pengirim" 
            id="pengirim" 
            value="{{ old('pengirim') }}" class="form-control @error('pengirim') is-invalid @enderror">
            @error('pengirim') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- tanggal --}}
         <div class="form-group">
            <label for="tanggal" class="form-control-label">Tanggal</label>
            <input type="date" 
            name="tanggal" 
            id="tanggal" 
            value="{{ old('tanggal') }}" class="form-control @error('tanggal') is-invalid @enderror">
            @error('tanggal') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Tambah Surat Masuk
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()