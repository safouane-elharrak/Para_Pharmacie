@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Modifier un produit</h2>
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
        <form action="{{ route('admin.products.update',$product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nom:</strong>
                        <textarea class="form-control" style="height:150px"  name="title" placeholder="Nom">{{ $product->title }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>prix:</strong>
                        <textarea class="form-control" style="height:150px" name="price" placeholder="prix">{{ $product->price  }}</textarea>
                    </div>
                </div>    
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>reference:</strong>
                        <textarea class="form-control" style="height:150px" name="reference" placeholder="Reference">{{ $product->reference }}</textarea>
                    </div>
                </div>    
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>description:</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="description">{{ $product->description }}</textarea>
                    </div>
                </div>    
               
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>
        
@endsection             <!-- sweet alerte -->     
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

        