//<a href="javascript:void(0);" onclick="obsuditduo_act('',1);">xxx</a>
function obsuditduo_act(par,one_bool){//par-откуда отправляются данные, чтобы не пересекались переменные
	advent='';
	if (one_bool){
		advent='topis2';
	}
	
	name='';tel='';email='';primech='';company='';uslov='';
	if (par!=''){
		if ($(par).length){//есть ли вообще он
			name=encodeURIComponent($(par+' #name').val()).replace(/'/g,"%60");
			tel=encodeURIComponent($(par+' #tel').val()).replace(/'/g,"%60");
			email=encodeURIComponent($(par+' #email').val()).replace(/'/g,"%60");
			primech=encodeURIComponent($(par+' #primech').val()).replace(/'/g,"%60");
			company=encodeURIComponent($(par+' #company').val()).replace(/'/g,"%60");
			uslov=encodeURIComponent($(par+' #uslov:checked').val()).replace(/'/g,"%60");
		}
	}

	//console.log('name:'+name+', tel:'+tel+', email:'+email+', primech:'+primech+', param:'+param);
	//dialog_2({data:'',vert:"center",advent:'topis2'});

	$.ajax({
		type:'POST',
		url:'/option/plugin/obsuditduo/ajax.php?task=act',
		data:{'name':name,'tel':tel,'email':email,'primech':primech,'company':company,'uslov':uslov,'one_bool':one_bool,'urlsend':SITE_URLSEND},
		success:function(html){
			dialog_3({data:html,width:'600',vert:'top',top:'100',advent:advent});
		}
	});
	return event.preventDefault();
}