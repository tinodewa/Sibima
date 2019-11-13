@extends('layouts/dashboard')
@section('title', 'Artikel')

@section('css')
<style>
    button{
        border: none;
    }
</style>
@endsection

@section('content')
<form action="{{ route('admin.artikel.update', $article->id)}}" enctype="multipart/form-data" method="POST">
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Edit Artikel</h4>
                    </div>
                    <div class="card-body">
                        <div class="paket">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif
                            {{ csrf_field() }}  
                            {{ method_field('PUT') }} 
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Foto Artikel</label>
                                            <input type="file" data-upload="" accept="image/*" class="" name="image_thumbnail">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label>Kategori</label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="category" id="exampleRadios1" value="umum" {{ $article->category == 'umum' ? 'checked' : ''}}  >
                                                    <span class="form-check-sign"></span>
                                                    Umum
                                                </label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="category" id="exampleRadios2" value="pembangunan" {{ $article->category == 'pembangunan' ? 'checked' : ''}}>
                                                    <span class="form-check-sign"></span>
                                                    Pembangunan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" name="title" placeholder="" value="{{ old('title', $article->title) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>User Post</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Tanggal Post</label>
                                            <input type="datetime-local" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>Konten</label>
                                            <textarea class="form-control" name="content" rows="4" cols="50">
                                                {{ old('content', $article->content) }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Nama Reporter</label>
                                            <input type="text" class="form-control" name="reporter" placeholder="" value="{{ old('reporter', $article->reporter) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Nama Editor</label>
                                            <input type="text" class="form-control" name="editor" placeholder="" value="{{ old('editor', $article->editor) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="ml-3 control-icon btn-fill btn-info" data-toggle="modal" data-target="#myModal2" href="#">
                                Simpan
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mini Confirmation -->
    <div class="modal fade modal-mini modal-primary" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                </div>
                <div class="modal-body text-center">
                    <p>Apakah anda sudah yakin?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn control-icon btn-fill btn-info">Ya</button>
                    <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</form>
    <!--  End Confirmation -->
@endsection

@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection