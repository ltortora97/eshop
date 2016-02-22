@extends('layouts.shoplayout')

	
@section("indexcontent")
<div id="center" class="column">
	  	<div id="content">
			<div id="about">
				<p class="tree">
					<a href="{{URL('/')}}/category/{{$categoryInfo[0]['id']}}" class="category" data-item="{{$categoryInfo[0]["id"]}}" name="_token" value="{{ csrf_token() }}">{{$categoryInfo[0]['category_name']}}</a>
					>  {{$itemDetail[0]['item_name']}}</p>
				<div class="photos">
					<img src="{{URL::to('images')}}/{{$itemDetail[0]['image_path']}}" alt="" width="227" height="215" /><br />
					<a href="#" class="moreph">more photos</a>
					<a href="#" class="comments">View Comments (27)</a>
				</div>
				<div class="description">
					<p><u>{{$itemDetail[0]['item_name']}}</u> <span class="price">{{$itemDetail[0]['price']}}</span></p>
					<p>{{$itemDetail[0]['description']}}</p>
					<p><strong>Short features:</strong></p>
					<ul id="features">
						<li class="color"><span>Dolor sit amet</span>1234</li>
						<li><span>Consetetur sadipscing</span>1234</li>
						<li class="color"><span>Seddiam</span>1234</li>
						<li><span>Nonumy eirmod</span>1234</li>
						<li class="color"><span>Dolor sit amet</span>1234</li>
						<li><span>Lorem ipsum dolor</span>1234</li>
						<li class="color"><span>Dolor sit amet</span>1234</li>
						<li><span>Seddiam</span>1234</li>
						<li class="color"><span>Nonumy eirmod</span>1234</li>
					</ul><br><br>
					<a href="#" >
						<img class="add2cart" src="{{URL::to('images/cart.gif')}}" alt="" width="71" height="19" />

					</a>

				</div>
			</div>
			{{--<img src="{{URL::to('images/title6.gif')}}" alt="" width="537" height="23" class="pad25" />--}}

		</div>
	  </div>
@endsection