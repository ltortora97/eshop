$(document).ready(function()
{

	$(document).on('click','.category',function(e)
	{
		var item = $(this).data('item');
	//	alert(item);



		_url=$(this).attr('href');
	//	alert(_url);

		var _token=$(this).attr('value');
	//	alert(_token);

		e.preventDefault();

		jQuery.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': _token
			}
		});

		$.ajax(
		{
			method:"POST",
			url:_url,
			data:item,
			type:"html",
			success:function(html)
			{

			$('#center').html(html);


//				$('#alert_message').html();
//				var data = JSON.parse(data);//PARSE SERVER DATA AS ACTUAL JSON OBJECT
//
//				if(parseInt(data.status) === 200)
//				{
//					$('#alert_message').html(data.message);
//				}else{
//					$('#alert_message').html(data.message);
//				}
			}
		});
	});




	$(document).on('click','.product',function(e)
	{
		var productid = $(this).data('productid');
		//alert(productid);



		var _url=$(this).data('url');
		//alert(_url);




		var _token=$(this).attr('value');
		//alert(_token);



		jQuery.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': _token
			}
		});

		$.ajax(
			{
				method:"POST",
				url:_url,
				data:productid,
				type:"html",
				success:function(html)
				{

					$('#center').html(html);


//				$('#alert_message').html();
//				var data = JSON.parse(data);//PARSE SERVER DATA AS ACTUAL JSON OBJECT
//
//				if(parseInt(data.status) === 200)
//				{
//					$('#alert_message').html(data.message);
//				}else{
//					$('#alert_message').html(data.message);
//				}
				}
			});
		e.preventDefault();
	});

});