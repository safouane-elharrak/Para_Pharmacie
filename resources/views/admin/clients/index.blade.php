@extends('layouts.admin')
@section('content')
<section>
<div class="row justify-content-center">
  <div class="col-12">
    <div class="card">
        <div class="card-header">
          <h1 class="float-left user">Clients</h1>
          <a class="btn btn-sm btn-success float-right mybtn" href="{{route('admin.clients.create')}}" role="button"><i class="fas fa-plus"></i></a>
        </div>
    </div> 
  </div>  
</div>
<div class="card">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Adresse Mail</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
  <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
        <a class="btn btn-sm btn-primary" href="{{route('admin.clients.edit',$user->id)}}" role="button"><i class="far fa-edit"></i></a>
        <button type="button" class="btn btn-sm btn-danger"
        onclick="event.preventDefault();
        document.getElementById('delete-user-form-{{$user->id}}').submit()"><span class="fa fa-trash"></span></button>
        <form id="delete-user-form-{{$user->id}}" action="{{route('admin.clients.destroy',$user->id)}}" method="POST" style="display:none">
        @csrf
        @method('DELETE')
        </form>
      </td>
   </tr>
  @endforeach
  </tbody>
</table>
{{$users->Links()}}
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
</section>
@endsection