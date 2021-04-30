@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Ajouter un nouveau produit</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Retour</a>
        </div>
        </div>
    </div>

@if ($errors->any())
    <div class="alert alert-danger">
    <strong>Whoops!</strong> Une erreur est survenu.<br><br>
    <ul>
 @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
 @endforeach
    </ul>
    </div>
@endif

    <form enctype="multipart/form-data" action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nom:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Nom">
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>image:</strong>
                <input type="file" name="file_path" required class="form-control" >
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>prix:</strong>
                    <input type="text" name="price" class="form-control" placeholder="prix">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>reference:</strong>
                    <input type="text" name="reference" class="form-control" placeholder="reference">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <input type="text" name="description" class="form-control" placeholder="description">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>

    </form>
    </div>
                     <!-- sweet alerte -->     
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@endsection