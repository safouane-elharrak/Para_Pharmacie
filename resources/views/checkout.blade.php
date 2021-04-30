@extends('layouts.admin')
@section('title', 'Checkout')
@section('content')
<div class="card"style=" width:75%;margin-left:13%;">
        <div class="card-header" >
           <div class="app-title" style="margin-left:35%">
            <h1><i class="fas fa-user"></i> Informations Personnelles</h1>
        </div>
    </div>
</div>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                </div>
            </div>
            <form action="{{ route('checkout.place.order') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <header class="card-header bg-dark">
                                <h4 class="card-title mt-2" style="color:white;margin-left:35%;margin-top:15px">Détails de la facturation</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>Prenom</label>
                                        <input value="{{ auth()->user()->name }}" disabledtype="text" class="form-control" name="first_name">
                                    </div>
                                    <div class="col form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Adresse</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Ville</label>
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Pays</label>
                                        <input type="text" class="form-control" name="country">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Code postal</label>
                                        <input type="text" class="form-control" name="post_code">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Numero de telephone</label>
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Adresse mail</label>
                                    <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" disabled>
                                    <small class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec personne.</small>
                                </div>
                                <div class="form-group">
                                    <label>Order Notes</label>
                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header bg-dark" >
                                        <h4 class="card-title mt-2" style="color:white;margin-left:32%;margin-top:15px">Votre commande</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt>Total cost: </dt>

                                         <!-- On parcourt les produits du panier en session : session('basket') -->         
                                            <dd class="text-right h5 b" >{{ $total}}</dd>
                                    </dl>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Effectuer commande</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop