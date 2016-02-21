@extends('layouts.shoplayout')

	
@section("indexcontent")
	<div id="center" class="column">
	  	<a href="#" class="banner"><img src="images/bigbanner.jpg" alt="" width="572" height="236" /></a><br />
	  	<div id="content">
			<img src="images/title2.gif" alt="" width="540" height="29" /><br />
			<p>Dolor sit amet, consetetur sadipscing elitr, seddiam nonumy eirmod tempor. invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur <br /></p>
			<img src="images/title3.gif" alt="" width="540" height="26" class="pad25" />
			<div class="stuff">

				@foreach($latestItems5 as $item)
				<div class="item">
					<img src="{{URL::to('images')}}/{{$item['image_path']}}" alt="" width="124" height="90" />
					<a href="{{URL::to('product')}}/{{$item['item_name']}}" class="name product" data-productid="{{$item['id']}}" name="_token" value="{{ csrf_token() }}" data-url="{{URL::to('product')}}/{{$item['id']}}">{{$item['item_name']}}</a>
					<span>{{$item['price']}}</span>
					<a href="#"><img src="images/zoom.gif" alt="" width="53" height="19" /></a><a href="#"><img src="images/cart.gif" alt="" width="71" height="19" /></a>
				</div>
				@endforeach
			</div>
		</div>
	  </div>
@endsection