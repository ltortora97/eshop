

<?php
//echo '<pre>';
//print_r($categoryname);
//echo count($details);
?>



	<div id="center" class="column">

	  	<div id="content">
			<h1>Products in  {{$categoryname[0]['category_name']}}</h1>
			<div class="stuff">

				@if (count($details) > 0)

					@foreach($details as $itemDetails)
					<div class="item">
						<img src="{{URL::to('images')}}/{{$itemDetails['image_path']}}" alt="" width="124" height="90" />
						<a href="{{URL::to('product')}}/{{$itemDetails['item_name']}}" class="name product" data-productid="{{$itemDetails['id']}}" data-url="{{URL::to('product')}}/{{$itemDetails['id']}}" name="_token" value="{{ csrf_token() }}">{{$itemDetails['item_name']}}</a>
						<span>{{$itemDetails['price']}}</span>
						<a href="#">
							<img src="images/zoom.gif" alt="" width="53" height="19" /></a>
						<a href="#">
							<img src="images/cart.gif" alt="" width="71" height="19" />
						</a>
					</div>
					@endforeach

				@else
					not any products for this category
				@endif

				{{--<div class="item">--}}
					{{--<img src="images/pic2.jpg" alt="" width="124" height="111" />--}}
					{{--<a href="{{URL::to('product')}}" class="name">Name Product</a>--}}
					{{--<span>$850</span>--}}
					{{--<a href="#"><img src="images/zoom.gif" alt="" width="53" height="19" /></a><a href="#"><img src="images/cart.gif" alt="" width="71" height="19" /></a>--}}
				{{--</div>--}}
				{{--<div class="item">--}}
					{{--<img src="images/pic3.jpg" alt="" width="124" height="89" />--}}
					{{--<a href="{{URL::to('product')}}" class="name">Name Product</a>--}}
					{{--<span>$400</span>--}}
					{{--<a href="#"><img src="images/zoom.gif" alt="" width="53" height="19" /></a><a href="#"><img src="images/cart.gif" alt="" width="71" height="19" /></a>--}}
				{{--</div>--}}
				{{--<div class="item">--}}
					{{--<img src="images/pic4.jpg" alt="" width="124" height="89" />--}}
					{{--<a href="{{URL::to('product')}}" class="name">Name Product</a>--}}
					{{--<span>$350</span>--}}
					{{--<a href="#"><img src="images/zoom.gif" alt="" width="53" height="19" /></a><a href="#"><img src="images/cart.gif" alt="" width="71" height="19" /></a>--}}
				{{--</div>--}}
				{{--<div class="item">--}}
					{{--<img src="images/pic5.jpg" alt="" width="124" height="97" />--}}
					{{--<a href="{{URL::to('product')}}" class="name">Name Product</a>--}}
					{{--<span>$250</span>--}}
					{{--<a href="#"><img src="images/zoom.gif" alt="" width="53" height="19" /></a><a href="#"><img src="images/cart.gif" alt="" width="71" height="19" /></a>--}}
				{{--</div>--}}
				{{--<div class="item">--}}
					{{--<img src="images/pic6.jpg" alt="" width="124" height="111" />--}}
					{{--<a href="{{URL::to('product')}}" class="name">Name Product</a>--}}
					{{--<span>$2250</span>--}}
					{{--<a href="#"><img src="images/zoom.gif" alt="" width="53" height="19" /></a><a href="#"><img src="images/cart.gif" alt="" width="71" height="19" /></a>--}}
				{{--</div>--}}
			</div>
		</div>
	  </div>
