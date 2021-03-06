@extends('layouts.shopmenu')
@section('content')
@include('alerts.success')


<!-- ==========================  PRODUCT ================================== -->
<div class="col-xs-12 col-sm-12 col-md-9 ">
<div class="body-content outer-top-xs cnt-home">
	<div class='container'>
		<div class='row outer-bottom-sm'>
			

			<div class='col-md-9 '>
				<div class="search-result-container">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active " id="grid-container">
							<div class="category-product  inner-top-vs">
								<div class="row">									

@foreach($itemdetalles as $itemdetalle)	
<div class="col-sm-6 col-md-4 wow fadeInUp">
	

	<div class="product">		
		<div class="product-image">
			<div class="image">
				@if($itemdetalle->imagen1 == "sin-foto.jpg")
				<a href="item-detalle-{{ $itemdetalle->slug }}"><img src="storage/productos/{{$itemdetalle->imagen1}}" data-echo="storage/productos/{{$itemdetalle->imagen1}}" class="" alt="" height="180" width="180" ></a>
			@elseif($itemdetalle->imagen1 != "sin-foto.jpg")
				<a href="item-detalle-{{ $itemdetalle->slug }}"><img src="{{$itemdetalle->imagen1}}" data-echo="{{$itemdetalle->imagen1}}" class="" alt="" height="180" width="180" ></a>
			@endif
			</div><!-- /.image -->			
			             		   
		</div><!-- /.product-image -->
			
		<div class="product-info text-left">
			<h3 class="name"><a href="item-detalle-{{ $itemdetalle->slug }}">{!! $itemdetalle->descripcion !!}</a></h3>
			<div class="">
				@for ($i=1; $i <= 5 ; $i++)
                      <span class="celeste glyphicon glyphicon-star{{ ($i <= $itemdetalle->rating_cache) ? '' : '-empty'}}"></span>
                    @endfor
                    {{ number_format($itemdetalle->rating_cache, 1)}}
			</div>
			<div class="description"></div>
			<div class="product-price">	
			<span class="price">${!! $itemdetalle->precioventa !!}</span>
			<span class="price-before-discount">${!! $itemdetalle->precio2 !!}</span>					
			</div><!-- /.product-price -->
		</div><!-- /.product-info -->

<div class="cart clearfix animate-effect">
	<div class="action">
		<ul class="list-unstyled">
		<!-- cuadno el stock es mayor que cero que me diga que puedo agregar , caso contrario que diga agotado-->
		@if($itemdetalle->stockactual > 0)
			<li class="add-cart-button btn-group">
				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
				<i class="fa fa-shopping-cart"></i>			
				</button>
				<button onclick="AgregarItem({{$itemdetalle->id}});"  class="btn btn-primary" type="button" >Agregar</button>
				
			</li>  
			@else
			<li class="add-cart-button btn-group">
				<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
				<i class="fa fa-shopping-cart"></i>			
				</button>
				<a href="#"	class="btn btn-danger" type="button">Agotado</a>
			</li>  
		@endif      
		    <li class="lnk wishlist">
			 	<a class="add-to-cart" href="#" title="Wishlist">
					<i class="icon fa fa-heart"></i>
				</a>
			</li>
			<li class="lnk">
				<a class="add-to-cart" href="detail.html" title="Compare">
					<i class="fa fa-retweet"></i>
				</a>
			</li>
		</ul>
	</div><!-- /.action -->
</div><!-- /.cart -->
	</div><!-- /.product -->
     



</div><!-- /.item -->
	 @endforeach
		
		
									</div><!-- /.row -->
									{!! $itemdetalles->render() !!}	
								</div><!-- /.category-product -->
							</div><!-- /.tab-pane -->
						</div><!-- /.tab-pane #list-container -->
					</div><!-- /.tab-content -->
				</div><!-- /.search-result-container -->

			</div><!-- /.col -->
		</div><!-- /.row -->
	</div>
	</div>	
<!-- ==========================  PRODUCT ================================== -->

@endsection