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

/*
	$(document).on('click','.add2cart',function(e)
	{
		var value,sumValue;
		var productName = $(this).data('productname');
		//alert(productName);


		if(typeof Cookies.get(productName)==='undefined')
		{
			//alert('not exisit');
			// value =1
			Cookies.set(productName, 1, { expires: date });

			if(typeof Cookies.get('sum')==='undefined')
			{
			//	alert('sum not exisit');
				Cookies.set(sum, 1, { expires: date });
			}
			else
			{
			//	alert('sum exist');//increment by 1
				sumValue = Number(Cookies.get('sum'))+1;
			//	alert(sumValue + 'sum value now');
				Cookies.set('sum', sumValue, { expires: date });
			}
		}
		else
		{
			//alert('exist');
			//value increment by 1
			value = Number(Cookies.get(productName))+1;
		//	alert(value + 'value now');
			Cookies.set(productName, value, { expires: date });


			//alert(Cookies.get("sum") + '111111111111');
			if(typeof Cookies.get('sum')==='undefined')
			{
			//	alert('sum not exisit');
				Cookies.set(sum, 1, { expires: date });
			}
			else
			{
			//	alert('sum exist');//increment by 1
				sumValue = Number(Cookies.get('sum'))+1;
			//	alert(sumValue + 'sum value now');
				Cookies.set('sum', sumValue, { expires: date });
			}
		}




		var date = new Date();
		var minutes = 30;
		date.setTime(date.getTime() + (minutes * 60 * 1000));
	//	Cookies.set(productName, 'value', { expires: date });
	//	Cookies.set('sum', 'value', { expires: date });



		//document.cookie='"' + productid + '"username=John Doe; expires=Thu, 18 Dec 2013 12:00:00 UTC"';
		//document.cookie="Ausername=John Doe; expires=Thu, 18 Dec 2013 12:00:00 UTC";
		//document.cookie="username=John Doe";
		e.preventDefault();
	});



*/


});