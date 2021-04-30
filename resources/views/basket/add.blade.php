<!--main area-->
@extends("layouts.vitrine")
@section('content')
<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Cart</span></li>
        </ul>
    </div>
    <div class=" main-content-area">

        <div class="wrap-iten-in-cart">
        @if(Session::has('success-message'))
        <div class="alert alert-success">
           <strong> Success </strong>{{ Session::get('success-message') }}
       </div>
        @endif
        @if(Cart::count() > 0)
            <h3 class="box-title">Products Name</h3>
            <ul class="products-cart">
            @foreach(Cart::content() as $item)
            <li class="pr-cart-item">
                    <div class="product-image">
                        <figure><img src="images/logo2" alt="{{ $item->title }}"></figure>
                    </div>
                    <div class="product-name">
                        <a class="link-to-product" href="#">{{ $item->title }}</a>
                    </div>
                    <div class="price-field produtc-price"><p class="price">{{ $item->price }}</p></div>
                    <div class="quantity">
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="{{ $item->quantity }}" data-max="120" pattern="[0-9]*">									
                            <a class="btn btn-increase" href="#"></a>
                            <a class="btn btn-reduce" href="#"></a>
                        </div>
                    </div>
                    <div class="price-field sub-total"><p class="price">{{ $item->price }}</p></div>
                    <div class="delete">
                        <a href="#" class="btn btn-delete" title="">
                            <span>Delete from your cart</span>
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>		
            @endforeach
							
            </ul>
            @else
            <p>No item in cart</p>
            @endif
        </div>

        </div>

    </div><!--end main content area-->
</div><!--end container-->

</main>
<!--main area-->
@endsection