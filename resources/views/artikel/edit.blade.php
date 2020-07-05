@extends('layouts.master')
@section('title', 'Tambah artikel')
    
@section('content')
    <div class="container">
        <form>
        <div class="form-group">
            <label for="Judul">Judul</label>
            <input type="text" class="form-control" id="Judul">
        </div>
        <div class="form-group">
            <label for="Isi">Isi</label>
            <textarea class="form-control" id="Isi" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input type="text" class="form-control" id="Tag">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection