@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2> Afficher les produits</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Retour</a>
        </div>
    </div>


    <!--Medias-->
    <div class="media p-5 " style="background:#FEFEE2;  padding:100px;">
  <img class="mr-3" style="width:150px;height:150px" src="{{ asset('./storage/product/'. $product->file_path ) }}" alt="First slide">
  <div class="media-body">
    <h5 class="mt-0">Produit Numero :  {{ $product->id }} </h5>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nom:</strong>
                {{ $product->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>prix:</strong>
                {{ $product->price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>reference:</strong>
                {{ $product->reference }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description:</strong>
                {{ $product->description }}
            </div>
        </div>
  </div>
</div>
    <!--endmedias-->
    </div>
    </div>
                     <!-- sweet alerte -->     
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@endsection
<style>

.media{
  height:100%;
  transition:0.5s;
  cursor:pointer;
  margin-right:0px;
}

.media:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.media-body{
  height:80px;  
}

.media::before, .media::after {

  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(255, 255, 255, 0.1);
  content: '';
  pointer-events: none;
}
.media::before {
  transform-origin: left top;
}

.media::after {
  transform-origin: right bottom;
}
.media:hover::before, .media:hover::after, .media:focus::before, .media:focus::after {
  transform: scale3d(1, 1, 1);
}
</style>
