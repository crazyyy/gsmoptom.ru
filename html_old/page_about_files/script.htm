function korzina(idcat,id,par){	
	kolvo=$("#tovar_col_"+id).val();
	kolvo=parseInt(kolvo);
	kolvo=parseFloat(kolvo);
	if (isNaN(kolvo)){kolvo=0;}
	
	if (par=='ravno'){
		if (kolvo<='0'){
			kolvo='1';
		}
	}
	
	if (kolvo=='0'){
		$("#tovar_res_"+id).find('#smena #vkor').hide();
		$("#tovar_res_"+id).find('#smena #but').show();
		
		$("#tovar_res_"+id).find('select').prop('disabled',false);
	}else{
		$("#tovar_res_"+id).find('#smena #vkor').show();
		$("#tovar_res_"+id).find('#smena #but').hide();
		
		$("#tovar_res_"+id).find('select').prop('disabled',true);
	}	
	
	//$("#tovar_col_"+id).val(kolvo);
	//alert(kolvo);
	
	$.ajax({
		url:"/modul/catalog/option/ajax.php?task=addkorzina",
		data:"idcat="+idcat+"&id="+id+"&kolvo="+kolvo,
		success:function(html){
			var html=html.split("^");
			var alltovar=html[0];
			var allcena=html[1]; 
			var cena=html[2];
			var summa=html[3];
			var tovar=html[4];
			
			if (alltovar=="0"){
				$("#korzina_img").attr("src","/modul/catalog/img/korzina.png");
			}else{
				$("#korzina_img").attr("src","/modul/catalog/img/korzina2.png");
			}

			if (par=='ravno'){
				html_code="<div style='font:19px/18px arial;color:#3c3c3c;text-align:center;padding-top:15px;'>"+tovar+" - в корзине!</div>"+
				"<div style='padding-top:20px;text-align:center;'>"+
					"<div><button onclick=\"dialog_close();\" style='background:#3c3c3c;color:#fff;padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;'>Продолжить</button> &nbsp;&nbsp;&nbsp;"+
					"<a href=\"javascript:void(0);\" onclick=\"Get('//korzina/');\" style='padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;'>Перейти в корзину</a></div>"+
				"</div>";
				dialog({data:html_code,width:"550",top:"-50"});
			}
			$(".alltovar").html(alltovar);
			$(".allcena").html(allcena);
		}
	});
}

/*продолжить если надо*/
$(function(){
	$('.catalog_pokup2 select').on('change',function(){
		parent1=$(this).parent().parent();		
	});
});

function kolkorzina(id,par){
 	kolvo=$("#korzina_tovar_col_"+id).val();
	kolvo=parseInt(kolvo);
	kolvo=parseFloat(kolvo);
	if (isNaN(kolvo)){kolvo=0;}
	
	if (par=='plus'){
		kolvo=kolvo+1;
	}else if (par=='minus'){
		kolvo=kolvo-1;
	}
 	cena=$("#cena"+id).val();
	if (kolvo<='0'){
		kolvo='1';
		$('#korzina_tovar_col_'+id).css({'background-color':'#ff0000'});
		$('#korzina_tovar_col_'+id).animate({'background-color':'#fff'},400);
	}
	if (kolvo>'0'){
		$("#korzina_tovar_col_"+id).val(kolvo);			
		$.ajax({
			url:"/modul/catalog/option/ajax.php?task=addkorzina",
			data:"id="+id+"&kolvo="+kolvo,
			success:function(html){
 			var html=html.split("^");
				var alltovar=html[0];
				var allcena=html[1];
				var cena=html[2];
				var summa=html[3];
				var tovar=html[4];

				$("#korzina_tovar_summa_"+id).html(summa);
				
				$(".alltovar").html(alltovar);
				$(".allcena").html(allcena);
			}
		});
	}
}

function deltovar_one(id){
	deltovar(id);
	$("#tovar_res_"+id).find('#smena #vkor').hide();
	$("#tovar_res_"+id).find('#smena #but').show();
	$("#tovar_res_"+id).find('select').prop('selectedIndex',0);
	
	$("#tovar_res_"+id).find('select').prop('disabled',false);
}
function deltovar(id){
 	$.ajax({
		url:"/modul/catalog/option/ajax.php?task=deltovar",
		data:"id="+id,
		success:function(html){
		 	$("#row"+id).remove();
			var html=html.split("^");
			var alltovar=html[0];
			var allcena=html[1];
			
			if (alltovar=="0"){
				$("#korzina_img").attr("src","/modul/catalog/img/korzina.png");
			}else{
				$("#korzina_img").attr("src","/modul/catalog/img/korzina2.png");
			}
			
			$(".alltovar").html(alltovar);
			$(".allcena").html(allcena);
		}
	});
}

//Цифры и точка
function Valid1(t){
	t.value=t.value.replace(/[^\d\.]/g,"");
	if(t.value.match(/\./g).length>1){
		t.value=t.value.substr(0,t.value.lastIndexOf("."));
	}
}

//тока цифры
function Valid2(t){
	t.value=t.value.replace(/[^\d]/g,"");
}