

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
							<img src="{{URL::to('images/zoom.gif')}}" alt="" width="53" height="19" /></a>
						<a href="#" >
							<img class="add2cart" src="{{URL::to('images/cart.gif')}}" alt="" width="71" height="19" />
						</a>
					</div>
					@endforeach

				@else
					not any products for this category
				@endif


			</div>
		</div>
	  </div>
