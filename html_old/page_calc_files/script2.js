//http://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript?page=3&tab=votes#tab-top
function URL2JSON(url){
   var obj={};
   function arr_vals(arr){
      if (arr.indexOf(',') > 1){
         var vals = arr.slice(1, -1).split(',');
         var arr = [];
         for (var i = 0; i < vals.length; i++)
            arr[i]=vals[i];
         return arr;
      }
      else
         return arr.slice(1, -1);
   }
   function eval_var(avar){
      if (!avar[1])
          obj[avar[0]] = '';
      else
      if (avar[1].indexOf('[') == 0)
         obj[avar[0]] = arr_vals(avar[1]);
      else
         obj[avar[0]] = avar[1];
   }
   if (url.indexOf('?') > -1){
      var params = url.split('?')[1];
      if(params.indexOf('&') > 2){
         var vars = params.split('&');
         for (var i in vars)
            eval_var(vars[i].split('='));
      }
      else
         eval_var(params.split('='));
   }
   return obj;
}
function URL2JSON_RET(par){//вывод из массива(избежание undefined)
	obj=URL2JSON(location.href)
	r='';
	for (var key in obj){
		if (key==par){
			r=obj[key];
		}
	}
	return r;
}
//var URL2JSON=url2json(location.href);
//console.log(URL2JSON);
//alert(URL2JSON_RET('cat_id'));

/*
//загрузка с геопозиционированными данными
function map1_geocity(city){
	geocoder=new ymaps.geocode(
		city,{results:1}
	);
	geocoder.then(
		function(res){
			coord=res.geoObjects.get(0).geometry.getCoordinates();
			name=res.geoObjects.get(0).properties.get('name');
			//alert(name);
			$('#city_do_list').append('<div><a href=\"javascript:void(0)\" rel=\"'+name+'|||'+coord+'\">'+name+'</a></div>');
			//alert(coord);
		}
	);
}
ymaps.load(function(){//после загрузки всей КАРТЫ
	//map1_geocity('Набережные Челны');
});
*/

function map1_dialog_display(par){
	if (par=='hide'){
		$('#map1 .dial .content').slideUp(400,function(){
			$('#map1 .zanoves').fadeOut(300);
		});
		$('#map1 .dial .header .arrow').attr('id','act');
	}else if (par=='show'){
		$('#map1 .dial .content').slideDown(400,function(){
			$('#map1 .zanoves').fadeIn(300);
		});
		$('#map1 .dial .header .arrow').attr('id','');
	}
}

function map1_move(par){
	if (par=='step_2'){
		o=$('#dostavka_calc #step_2 button').offset();
		ident_top=o.top-$(window).height()/2;
	}else if (par=='step_3'){
		o=$('#dostavka_calc #tovar_id').offset();
		ident_top=o.top-$(window).height()/2;
	}
	$('body,html').animate({scrollTop:ident_top},400);
}

$('#dostavka_calc').ready(function(){//после загрузки контейнера
	$(document).on('change','#dostavka_calc #city_ot',function(){
		$('#dostavka_calc #step_2').hide();
		$('#dostavka_calc #step_3').hide();

		multiRoute.model.setReferencePoints([
			map1_start(),
		]);
		
		$('#dostavka_calc #city_ot_id').val(map1_start('id'));
	});

	$(document).on('click','#map1 #city_do_list a',function(){
		//скрываем шаги
		$('#dostavka_calc #step_2').hide();
		$('#dostavka_calc #step_3').hide();

		$('#map1 #city_do_list a').attr('id','');//очищаем активность списка города доставки
		$(this).attr('id','act');

		$('#dostavka_calc #city_do').val(map1_finish('name'));
		$('#dostavka_calc #reis_id').val(map1_finish('id'));

		par=$(this).html();
		//console.log(map1_start('name')+' - '+par);
		multiRoute.model.setReferencePoints([
			map1_start('name'),par
		]);	

		map1_dialog_display('hide');
	});

	//map1_city_do_list();

	$(document).on('click','#map1 .dial .header,#map1 .dial .footer button',function(){
		display=$('#map1 .dial .content').css('display');
		if (display=='block'){
			map1_dialog_display('hide');
		}else{
			map1_dialog_display('show');
		}
	});

	//===Селекты
	//div2 для того чтобы контент не сьезжал(оверфлов)
	$('.selectmain').prepend('<div class=sel>'+
		'<div class=arrow></div>'+
		'<div class=div1><div class=div2></div></div>'+
	'</div>');
	function selectmain_change(ths){
		tx=ths.find('option:selected').text();
		if (tx==''){
			tx='&nbsp;';
		}
		parent1=ths.parent();
		parent1.find('.sel .div2').html(tx);
	}
	$(document).on('change','.selectmain select',function(){
		selectmain_change($(this));
	});
	$('.selectmain select').each(function(){
		//$(this).trigger('change');
		selectmain_change($(this));
	});
	//Селекты==
	
	$(document).on('click','#dostavka_calc #step_2 button',function(){
		$('#dostavka_calc #step_3').show();
		$('#dostavka_calc #step_3 .content').hide();
		$('#dostavka_calc #step_3 .loader').show();
		$('#dostavka_calc #step_3 .result_dostavka2').hide();
		$('#dostavka_calc #step_3 .result_dostavka').removeClass('animated bounceIn');

		//Расчет товаров
		$('#dostavka_calc #tovar_calc').hide();
		
		$.ajax({
			type:'GET',
			url:'/option/plugin/yandexmapdostavka/option/ajax.php?task=result_dostavka',
			data:{
				'city_ot_id':$('#dostavka_calc #city_ot_id').val(),
				'city_do':$('#dostavka_calc #city_do').val(),
				'reis_id':$('#dostavka_calc #reis_id').val(),
				'latlong':$('#dostavka_calc #latlong').val(),
				'dist':$('#dostavka_calc #dist').val(),
				'benzovoz':$('#dostavka_calc #benzovoz').val(),
			},
			success:function(data){
				map1_move('step_2');

				d=data.split('|||');

				//alert(data);
				$('#dostavka_calc #step_3 .result_dostavka span').html(d[0]);
				$('#dostavka_calc #step_3 .result_dostavka2 .cena_litr').html(d[1]);
				$('#dostavka_calc #step_3 .result_dostavka2 .cena_tonna').html(d[2]);
				
				$('#dostavka_calc #step_3 .content').show();
				$('#dostavka_calc #step_3 .loader').hide();

				$('#dostavka_calc #step_3 .result_dostavka').addClass('animated bounceIn');//zoomInUp,zoomIn,flipInY,flipInX,fadeInDown,bounce
			}
		});
	});
	
	//После появления результата доставки
	$(document).on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend','#dostavka_calc #step_3 .result_dostavka',function(){
		$('#dostavka_calc #step_3 .result_dostavka2').show();

		//может не выходить если у категории нет товаров
		$.ajax({
			type:'GET',
			url:'/option/plugin/yandexmapdostavka/option/ajax.php?task=tovar_calc&act=list',
			data:{'cat_id':map1_start('cat_id')},
			success:function(data){
				if (data!=''){
					$('#dostavka_calc #tovar_id').html(data);
					selectmain_change($('#dostavka_calc #tovar_id'));
					$('#dostavka_calc #tovar_calc').slideDown();

					map1_balloonContentBody='';
					if ($('#map1_balloonContentHeader').length){//может отсутствовать если выбрана точка
						map1_balloonContentBody=$('#map1_balloonContentHeader').html();
					}
					$('#dostavka_calc #tovar_calc .past').html( map1_balloonContentBody+' ('+$('#map1_balloonContentBody').html()+')' );
					
					$('#dostavka_calc #tovar_calc .result').hide();
				}
			}
		});
	});
	
	$(document).on('change','#dostavka_calc #tovar_id',function(){
		map1_move('step_3');

		tovar_id=$(this).val();
		benzovoz=$('#dostavka_calc #step_2 #benzovoz').val();
		result_dostavka=$('#dostavka_calc #step_3 .result_dostavka span').html();
		$('#dostavka_calc #tovar_calc .result').html('');
		if (tovar_id!=''){
			$.ajax({
				type:'GET',
				url:'/option/plugin/yandexmapdostavka/option/ajax.php?task=tovar_calc&act=result',
				data:{
					'tovar_id':tovar_id,
					'benzovoz':benzovoz,
					'result_dostavka':result_dostavka,
				},
				success:function(data){
					$('#dostavka_calc #tovar_calc .result').html(data);
					
					$('#dostavka_calc #tovar_calc .result').show();
				}
			});
		}
	});
});