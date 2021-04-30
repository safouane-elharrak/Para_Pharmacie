@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <div class="card">
        <div class="card-header">
          <h1 class="float-left user"><strong>Produits</strong></h1>
          <a class="btn btn-sm btn-success float-right mybtn" href="{{ route('admin.products.create') }}" role="button">Create</a>
        </div>
    </div> 
  </div>  
</div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card">
<table class="table">
    
        <tr>
            <th>No</th>
            <th>Photo</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>reference</th>
            <th>description</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img style="width:150px;height:150px" src="{{ asset('./storage/product/'. $product->file_path ) }}" alt="First slide"></td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->reference }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="{{ route('admin.products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.products.show',$product->id) }}"><i class="fas fa-eye"></i></a>

                    <a class="btn btn-primary" href="{{ route('admin.products.edit',$product->id) }}"><i class="far fa-edit"></i></a>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    </div>
    <style>
.card{
    box-shadow: 0 2px 4px rgba(204, 204, 204, 0.8);
    margin: 0px 60px 30px 60px !important;
}
.mybtn{
  margin-top:7px;
}
.user{
  margin-top:7px;
}
</style>
    {!! $products->links() !!}
 <!-- sweet alerte -->     
 @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@endsection