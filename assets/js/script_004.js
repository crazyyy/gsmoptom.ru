$('#stela_index').ready(function(){
	$(document).on('click','#stela_index .block',function(){
		$(this).parent().find('.block').attr('id','');
		
		$(this).attr('id','act');
		
		data=$(this).find('.data').html();
		$('#stela_index .data_viev').html(data);
		
		color=$(this).find('.bg .color').html();
		image=$(this).find('.bg .image').html();
		//console.log(color);
		
		$('#bl_stela .brand').css({
			'background-color':'#'+color,
			'background-image':'url('+image+')',
		});
	});
	
	//предзагрузка изображений
	var stela_img=new Array();
	var stela_preloadimg=new Array();
	$('#stela_index .block').each(function(i,elm){
		stela_preloadimg[i]=$(this).find('.image').html();
	});
	//console.log(stela_preloadimg);
	for(var i=0;i<stela_preloadimg.length;i++){
		stela_img[i]=new Image();
		stela_img[i].src=stela_preloadimg[i];
	}
	//console.log(stela_img);
	
	$('#stela_index .block:first-child').trigger('click');
});