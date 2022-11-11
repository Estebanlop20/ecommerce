@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-md-12"> 

            @if(session(',message'))
                <div class="alert alert-secess">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Categoria
                        <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Agregar Categoria</a>
                    </h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
</div>
@endsection