<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Repositories\BasketSessionRepository;

class BasketController extends Controller
{
    

	protected $basketRepository; // L'instance BasketSessionRepository

    public function __construct (BasketSessionRepository $basketRepository) {
    	$this->basketRepository = $basketRepository;
    }

    # Affichage du panier
    public function show () {
    	return view("basket.show"); // resources\views\basket\show.blade.php
    }

    # Ajout d'un produit au panier
    public function add (Product $product, Request $request) {
    	
    	// Validation de la requête
    	$this->validate($request, [
    		"quantity" => "numeric|min:1"
    	]);

    	// Ajout/Mise à jour du produit au panier avec sa quantité
    	$this->basketRepository->add($product, $request->quantity);
		alert()->success('Produit ajouté au panier');
    	// Redirection vers le panier avec un message
    	return redirect()->route("basket.show");
    }

    // Suppression d'un produit du panier
    public function remove (Product $product) {

    	// Suppression du produit du panier par son identifiant
    	$this->basketRepository->remove($product);
		alert()->success('Produit retiré du panier');
    	// Redirection vers le panier
    	return back();
    }

    // Vider la panier
    public function empty () {

    	// Suppression des informations du panier en session
    	$this->basketRepository->empty();
		alert()->success('Panier vidé');
    	// Redirection vers le panier
    	return back();

    }

}
