@extends('layouts.admin')
@section('content')

<style>
.first-slide,.second-slide,.third-slide{
    width: 100%;
    height: 600px
}
</style>
<section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner" id="one">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/1-a.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/2-a.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/3-a.jpeg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/slogant.jpg" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <h3>A Propos</h3>
                        <span>De notre parapharmacie</span>
                        <p>Ca fait plus que 50ans que notre pharmacie existe, notre nom est un signe de confiance </p>

                    </div>
               
            </div>
        </div>
    </div>
    </div>
    <!-- end about -->
<!-- brand -->
<div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Nos produits</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">

        <div class="container">
           <div class="row ">
             @foreach($produits as $produit)
               <div class="col-md-4 col-md-4">
                  <div class="card card-block">
     
                  <img class="mr-3" style="height:250px;width:100%" src="{{ asset('./storage/product/'. $produit->file_path ) }}" alt="photoproduit">
				 <div class="course-box" >
                      <h2><strong>{{ $produit->title }}</strong></h2>	
                      <a href="{{ route('admin.products.show',$produit->id) }}" class="text-sm text-gray-700 underline">details</a>
			
                         <div class="text-muted">
					      <a class="course-likes m-l-10" href="#"></a>
				         </div>
                         <span style="font-size:15px;"class="badge badge-danger">{{ number_format($produit->price, 2, ',', ' ') }} dh TTC</span>
                        <p>{{ $produit->description }}</p>
               <form  method="POST" action="{{ url('basket/add/'.$produit->id) }}">
               @csrf
                </div>
               <div class="align-text-bottom ml-4">
               <div class="form-group-row">
                <input type="hidden" id="id" name="id" value="{{ $produit->id }}">
                   <label for="quantity">Quantité</label>      
                   <input id="quantity" name="quantity" type="number" value="1" min="1">  
                   <button class="btn waves-effect btn-warning"  style="width:20%;height:30px; right:0px;justify-content:center;" type="submit" ><i style="justify-content:center; top:0px;"class="fas fa-cart-arrow-down"></i>
                   </button>
			   </div>
               </div>
			</form>        
             </div>
          </div>
        @endforeach
			</div>
          </div>
									
                        
    </div>

    <!-- end brand -->
   <!-- clients -->
   <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Que dit nos clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>younes Piro<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Excellent service efficace à tous égards: commande, traitement et livraison</i>
                                    </p>
                                    <div class="full text_align_center ">
                                        <img src="images/stars.jpeg" style="height:120px;width:170px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due Joerge<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Juste un excellent service. Excellents prix. Excellents délais de livraison. Chaque fois sans faute.</i>
                                    </p>
                                    <div class="full text_align_center ">
                                        <img src="images/stars.jpeg" style="height:120px;width:170px">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Laura markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Facilement commandé et livré comme indiqué. Service excellent.</i>
                                    </p>
                                    <div class="full text_align_center ">
                                        <img src="images/stars.jpeg" style="height:120px;width:170px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- end clients -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contactez nous</h2>
                    </div>
                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Votre nom" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Votre adresse email" type="text" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Votre numero de telephone" type="text" name="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="votre propre message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    @if (session('success'))
     <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
     @endif

     @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    </div>
                 <!-- sweet alerte -->     
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


@endsection
<style>

div [class^="col-"]{
  padding:20px;
  

}

.card{
	
	margin-left:-20px;
  height:100%;
	padding:20px;
  transition:0.5s;
  cursor:pointer;
}
.card-title{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
}
.card-title i{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
  color:#ffa710
}
.card-title i:hover{
  transform: scale(1.25) rotate(100deg); 
  color:#18d4ca;
  
}
.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.card-text{
  height:80px;  
}
.align-text-bottom{
  margin-top:auto;
}
.card::before, .card::after {
  position: absolute;
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
.card::before {
  transform-origin: left top;a
}

.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
}
</style>