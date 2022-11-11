@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categoria
                        <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm text-white float-end">Regresar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="row">

                         
                         <div class="col-md-6 mb-3">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                            @error('name') <small class="text-dange">{{$message}}</small> @enderror
                         </div>
                         <div class="col-md-6 mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control">
                         </div>
                         <div class="col-md-6 mb-3">
                            <label>Descripcion</label>
                            <textarea name="Descripcion" class="form-control" rows="3"></textarea>
                         </div>
                         <div class="col-md-6 mb-3">
                            <label>Imagen</label>
                            <input type="file" name="imagen" class="form-control">
                         </div>
                        
                         <div class="col-md-6 mb-3">
                            <label>Estado</label><br/>
                            <input type="checkbox" name="Estado" />
                         </div>
                         <div class="col-md-12"> 
                                <h4>SEO Tags</h4>
                            </div>
                         <div class="col-md-12 mb-3">
                            <label>Meta Title</label>
                            <input type="text" name="Meta Title" class="form-control">
                         </div>
                         <div class="col-md-12 mb-3">
                            <label>Meta Keyword</label>
                            <input type="text" name="meta_keyword" class="form-control" rows="3"></textarea>
                         </div>
                         <div class="col-md-12 mb-3">
                            <label>Meta Descripcion</label>
                            <input type="text" name="meta_descripcion" class="form-control" rows="3"></textarea>
                         </div>
                         <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Guardar</button>
                         </div>

                         </div> 
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection