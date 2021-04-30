<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Cart;

class Basket extends Model
{
    use HasFactory;
    public function store($id,$nom,$price)
    {
    Cart::add($id,$title,1,$price)->associate('App\Models\Product');
    session()->flash('success_message','Product added in cart !');
        return view('basket.add');
    }
}
