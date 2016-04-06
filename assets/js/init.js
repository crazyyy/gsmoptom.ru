$(function(){
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools:'',
		theme:'light_rounded',//light_square,facebook
		deeplinking: false,//вставляет #prettyPhoto[XXX] в адресную строку
		//default_width: ww,
		//default_height: wh,
		//iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
		//inline_markup: '<div class="pp_inline">{content}</div>',	
	});
});