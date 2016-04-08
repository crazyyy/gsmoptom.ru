//ïðåäçàãðóçêà èçîáðàæåíèé
var preloadimg=new Array();
var templateDirectory = window.templateDirectory;
preloadimg[0] = templateDirectory + '/img/dialog2_close.png';
var dialog_close = templateDirectory + '/img/dialog2_close.png';
img = new Array();
for(var i=0;i<preloadimg.length;i++){
  img[i]=new Image();
  img[i].src=preloadimg[i];
}

$(function(){
	/*
	style='<style>'
		+'#toupmove{position:fixed;bottom:10px;left:0px;width:90px;height:21px;display:none;text-align:center;padding-top:5px;opacity:0.9;filter: alpha(opacity=90);}'
		+'#toupmove a{font:12px Verdana;text-decoration:none;color:#45779c;}'
		+'#toupmove a:hover{color:#2b587a;}'
	+'</style';
	$('body').append(style);
	$('body').append('<a id=toupmove href="#">Íàâåðõ</a>');
	*/
	/*
	style='<style>'
		+'#toupmove{position:fixed;bottom:40px;left:20px;width:90px;display:none;text-align:center;padding-top:5px;opacity:0.7;cursor:pointer;}'
		+'#toupmove:hover{opacity:0.9;}'
	+'</style';
	$('body').append(style);
	$('body').append('<div id=toupmove><img src="/i/toupmove.png"></div>');
	if ($(this).scrollTop()>100){
		$('#toupmove').fadeIn();
	}
	$(window).scroll(function(){
		if ($(this).scrollTop()>100)
			$('#toupmove').fadeIn();
		else
			$('#toupmove').fadeOut(400);
	});
	$('#toupmove').click(function(){
		$('body,html').animate({scrollTop:0},800);
		return false;
	});
	*/
});

$(function(){
	$('.anchorto').on('click',function(){
		id=$(this).attr('rel');
		o=$( "#anchorto_"+id ).offset();
		//alert( "left: " + o.left + ", top: " + o.top );
		if (o.top>0){
			$('body,html').animate({scrollTop:o.top},500);
		}
	});
});

var SBW;
$(function(){
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:2000, autoplay_slideshow:false});
	$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'fast',theme:'light_square',slideshow:10000});

	$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
		custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
		changepicturecallback: function(){ initialize(); }
	});
	$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
		custom_markup: '<div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
		changepicturecallback: function(){ _bsap.exec(); }
	});

	function ScrollBarWidth(){
		var inner=document.createElement('p');
		inner.style.width='100%';
		inner.style.height='200px';

		var outer=document.createElement('div');
		outer.style.position='absolute';
		outer.style.top='0px';
		outer.style.left='0px';
		outer.style.visibility='hidden';
		outer.style.width='200px';
		outer.style.height='150px';
		outer.style.overflow='hidden';
		outer.appendChild(inner);

		document.body.appendChild(outer);
		var w1=inner.offsetWidth;
		outer.style.overflow='scroll';
		var w2=inner.offsetWidth;
		if (w1==w2){w2=outer.clientWidth;}
		document.body.removeChild(outer);

		return (w1-w2);
	};
	SBW=ScrollBarWidth();
});

function Get(par1){location.href=par1;}

function Intval(mixed_var,base){
  type=typeof(mixed_var);
  if (type==='boolean'){return +mixed_var;}
  else if (type==='string'){
    tmp=parseInt(mixed_var, base || 10);
    return (isNaN(tmp) || !isFinite(tmp)) ? 0 : tmp;
  }else if (type === 'number' && isFinite(mixed_var)){
    return mixed_var | 0;
  }else{return 0;}
}

function dialogpop_position(){
	var thso=$('#dialogpop'), // íàø ïîïàï

	sctop=$(this).scrollTop()

	my_popup_w=thso.width(); // øèðèíà ïîïàïà
	my_popup_h=thso.height(); // âûñîòà ïîïàïà
	popup_half_w='-'+my_popup_w/2; // ïîëîâèíà øèðèíû ïîïàïà
	popup_half_h=sctop-(my_popup_h/2); // ïîëîâèíà âûñîòû ïîïàïà
	win_w=$(window).width(); // øèðèíà îêíà
	win_h=$(window).height(); // âûñîòà îêíà

	if (win_w>my_popup_w){//åñëè øèðèíà îêíà áîëüøå øèðèíû ïîïàïà
		thso.css({'margin-left':popup_half_w+'px', 'left': '50%'});
	}else{//åñëè øèðèíà îêíà ìåíüøå øèðèíû ïîïàïà
		thso.css({'margin-left':'5px', 'left': '0'});
	}
	if (win_h>my_popup_h){//åñëè âûñîòà îêíà áîëüøå øèðèíû ïîïàïà
		thso.css({'margin-top':popup_half_h+'px', 'top':'50%'});
	}else{//åñëè âûñîòà îêíà ìåíüøå øèðèíû ïîïàïà
		thso.css({'margin-top': 50, 'top': '0'});
	}

	docum_h=$(document).height();
	//alert(docum_h);
	$('#dialogpop_zanoves').css({height:docum_h});

 }

function dialogpop(data){
	if(data.width==undefined){data.width='550';}
	if(data.height==undefined){data.height='130';}
	k='';
	k+='<div id=dialogpop_zanoves style="position:absolute;width:100%;height:100%;top:0px;left:0px;z-index:10000;background-color:#000;opacity:0.3;"></div>';
	k+='<div id=dialogpop style="position:absolute;left:50%;top:50%;z-index:10001;background-image:url(/i/dialogpop_bg.png);border-radius:7px;">';
		k+='<div style="width:'+data.width+'px;min-height:100%;background-color:#fff;margin:15px;border-radius:7px;position:relative;">';
			k+='<div class=close style="position:absolute;right:5px;top:4px;cursor:pointer;background-image:url(/i/dialogpop_close.png);background-repeat:no-repeat;width:30px;height:30px;"></div>';
			k+='<div style="min-height:'+data.height+'px;height:auto !important;height:'+data.height+'px;padding:20px;padding-top:35px;">';
				k+=data.data;
			k+='</div>';
		k+='</div>';
	k+='</div>';
	$('body').append(k);
	dialogpop_position();
	//alert($('body').html());

	$(function(){
		$(window).scroll(function(){
		  dialogpop_position();
		});
	});
}
function dialogpop_close(){
	$("#dialogpop_zanoves").remove();
	$("#dialogpop").remove();
}
$(document).on("click","#dialogpop .close",function(){
	dialogpop_close();
});
$(document).mouseup(function(e){
    var container=$("#dialogpop");
    if(e.target!=container[0]&&!container.has(e.target).length){
       dialogpop_close();
    }
});
function dialogpop_peremena(par){
	$.ajax({
		type:'POST',
		url:'/modul/ajax.php?task=dialog_peremena',
		data:{'par':par},
		success:function(html){
			dialogpop({data:html,width:"600",height:"500"});
		}
	});
}

dialogclose_bool=1;
//äèàëîã1
function dialog(data){
	dialog_close();
	if(data.left==undefined){data.left=0;}
	if(data.top==undefined){data.top=0;}
	if(data.vert==undefined){data.vert='center';}
	if(data.width==undefined){data.width='550';}
	if(data.height==undefined){data.height='130';}
	if(data.close_a==undefined){data.close_a=0;}
	marginLeft=parseInt(data.width/2)-parseInt(data.left);
	HeightDocument=$(window).height()/2;
	$("body").css("overflow","hidden");
	$('body').css('marginRight',SBW+'px');
	dialkarkas='<div id=dialog_zanoves></div>'+
    '<div id=dialog_bg class=close_dialog>'+
    	'<div id=dialog>'+
			'<div class=label style="width:'+data.width+'px;height:'+data.height+'px;margin-left:-'+marginLeft+'px;">';
				dialkarkas+='<div style="text-align:right;padding-bottom:10px;"><a href="javascript:void(0)" onclick="dialog_close()">Çàêðûòü</a></div>';
				dialkarkas+='<div class="data"></div>'+
			'</div>'+
			'<div style="position:relative;height:100px;"></div>'+
		'</div>'+
	'</div>';
	$("body").append(dialkarkas);
	$("#dialog .title").html(data.title);
	$("#dialog .data").html(data.data);
	if (data.vert=='center'){var Top_modal_window=$(window).height()/2-100;}
	else if (data.vert=='top'){var Top_modal_window="50";}
	else{Top_modal_window="0";}
	Top_modal_window=Intval(Top_modal_window);
	Top_modal_window+=parseInt(data.top);
	$("#dialog").css({"top":Top_modal_window+"px"});
}

//äèàëîã2
function dialog_2(data){
	dialog_close();
	if(data.left==undefined){data.left=0;}
	if(data.top==undefined){data.top=0;}
	if(data.vert==undefined){data.vert='center';}
	if(data.width==undefined){data.width='550';}
	if(data.height==undefined){data.height='130';}
	if(data.close_a==undefined){data.close_a=0;}
	if(data.advent==undefined){data.advent='';}
	marginLeft=parseInt(data.width/2)-parseInt(data.left);
	HeightDocument=$(window).height();
	$("body").css("overflow","hidden");
	$('body').css('marginRight',SBW+'px');
	dialkarkas='<div id=dialog_zanoves></div>'+
    '<div id=dialog_bg class=close_dialog>'+
    	'<div id=dialog_2>'+
			'<div class=label style="width:'+data.width+'px;min-height:100%;margin-left:-'+marginLeft+'px;">';
				dialkarkas+='<div class=header><span class=close_dialog><a href="javascript:void(0)">Çàêðûòü</a>&nbsp;&nbsp;';
				dialkarkas+='<img src="' + dialog_close + '" align=absmiddle style="cursor:pointer;"></a></span></div>';
				dialkarkas+='<div class=data style="min-height:'+data.height+'px;height:auto !important;height:'+data.height+'px"></div>'+
			'</div>'+
			'<div style="position:relative;height:100px;"></div>'+
		'</div>'+
	'</div>';
	$("body").append(dialkarkas);
	$("#dialog_2 .data").html(data.data);
	HeightDiv=$('#dialog_2 .label').height()+50;
	if (data.vert=='center'){var Top_modal_window=(HeightDocument-HeightDiv)/2;}
	else if (data.vert=='top'){var Top_modal_window="0";}
	else{Top_modal_window="0";}
	Top_modal_window=Intval(Top_modal_window);
	Top_modal_window+=parseInt(data.top);
	if (data.advent==''){
		$("#dialog_2").css({"top":Top_modal_window+"px"});
	}else if (data.advent=='topis'){
		$("#dialog_2").animate({
			"top": Top_modal_window+"px"
			},500,function(){
			}
		);
	}else if (data.advent=='topis2'){
		$("#dialog_2").css({"top":"-"+HeightDiv+"px"});
		$("#dialog_zanoves").hide();
		$("#dialog_zanoves").fadeIn(200,function(){
			$("#dialog_2").animate({
				"top": Top_modal_window+"px"
				},500,function(){
				}
			);
		});

	}
}

//äèàëîã3
function dialog_3(data){
	dialog_close();
	if(data.left==undefined){data.left=0;}
	if(data.top==undefined){data.top=0;}
	if(data.vert==undefined){data.vert='center';}
	if(data.width==undefined){data.width='550';}
	if(data.height==undefined){data.height='130';}
	if(data.close_a==undefined){data.close_a=0;}
	if(data.advent==undefined){data.advent='';}
	marginLeft=parseInt(data.width/2)-parseInt(data.left);
	HeightDocument=$(window).height();
	//$("html").css("overflow-y","auto");//èíà÷å ïðè ïðîêðóòêè ãëþ÷èò
	$("body").css("overflow","hidden");
	$('body').css('marginRight',SBW+'px');
	dialkarkas='<div id=dialog_zanoves></div>'+
    '<div id=dialog_bg class=close_dialog>'+
    	'<div id=dialog_3>'+
			//'<div style="padding:10px;background:#fff;">'+
				'<div class=label style="position:relative;width:'+data.width+'px;min-height:100%;margin-left:-'+marginLeft+'px;padding:10px;">'+
					'<div style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;z-index:110000;width:100%;height:100%;background:#fff;opacity:0.2;border-radius:5px;"></div>'+
					'<div id=bg style="position:relative;z-index:120000;background:#2e2e2e;">'+
						'<div class=close_dialog id=close></div>'+
						'<div class=data style="min-height:'+data.height+'px;height:auto !important;height:'+data.height+'px"></div>'+
					'</div>'+
				'</div>'+
			//'</div>'+
			'<div style="position:relative;height:100px;"></div>'+
		'</div>'+
	'</div>';
	$("body").append(dialkarkas);
	$("#dialog_3 .data").html(data.data);
	HeightDiv=$('#dialog_3 .label').height()+50;
	if (data.vert=='center'){var Top_modal_window=(HeightDocument-HeightDiv)/2;}
	else if (data.vert=='top'){var Top_modal_window="0";}
	else{Top_modal_window="0";}
	Top_modal_window=Intval(Top_modal_window);
	Top_modal_window+=parseInt(data.top);
	if (data.advent==''){
		$("#dialog_3").css({"top":Top_modal_window+"px"});
	}else if (data.advent=='topis'){
		$("#dialog_3").animate({
			"top": Top_modal_window+"px"
			},500,function(){
			}
		);
	}else if (data.advent=='topis2'){
		$("#dialog_3").css({"top":"-"+HeightDiv+"px"});
		$("#dialog_zanoves").hide();
		$("#dialog_zanoves").fadeIn(200,function(){
			$("#dialog_3").animate({
				"top": Top_modal_window+"px"
				},500,function(){
				}
			);
		});

	}
}

function dialog_close(){
	$("#dialog_zanoves").remove();
	$("#dialog_bg").remove();
	$("body").css("overflow","auto");
	$("body").css("overflow-y","scroll");
	$('body').css('marginRight','0px');
	dialogclose_bool=1;
}
// $(function(){
// 	//$("body").css("overflow","hidden");
// 	$("#dialog .label").live("click",function(){
// 		dialogclose_bool=0;
// 	});
// 	$("#dialog_2 .label").live("click",function(){
// 		dialogclose_bool=0;
// 	});
// 	$("#dialog_3 .label").live("click",function(){
// 		dialogclose_bool=0;
// 	});

// 	$(".close_dialog").live("click",function(){
// 		if (dialogclose_bool==1){
// 			dialog_close();
// 		}
// 		dialogclose_bool=1;
// 	});
// });

$(function(){
	$(document).on('focus','.relplaceholder',function(){
		val=$(this).val();
		rel=$(this).attr('rel');
		if (val==rel){
			$(this).val('');
		}
	});
	$(document).on('blur','.relplaceholder',function(){
		val=$(this).val();
		rel=$(this).attr('rel');
		if (val==''){
			$(this).val(rel);
		}
	});
});

$.fn.slideShow = function(time,easing) { return $(this).animate({height:'show','margin-top':'show','margin-bottom':'show','padding-top':'show','padding-bottom':'show',opacity:1},time,easing); }
$.fn.slideHide = function(time,easing) {return $(this).animate({height:'hide','margin-top':'hide','margin-bottom':'hide','padding-top':'hide','padding-bottom':'hide',opacity:0},time,easing);  }

function Posmo(par,d_tx_block,d_tx_none,thiss){
	d=$('#posmo_'+par).css('display');
	if (d=='block'){
		$(thiss).html(d_tx_block);
	}else{
		$(thiss).html(d_tx_none);
	}

	//$('#posmo_'+par).slideToggle(function(){});

	/*
	if (d=='none'){
		$('#posmo_'+par).css({'height':'0px','overflow':'hidden','display':'block'});
		$('#posmo_'+par).animate({'height':'200px'},500,function(){
			$('#posmo_'+par).css({'overflow':'visible'});
		})
	}else{
	}
	*/

	if (d=='none'){
		$('#posmo_'+par).slideShow(320,'easeOutQuart');
	}else{
		$('#posmo_'+par).slideHide(320,'easeOutQuart');
	}
}

(function($) {
    $.fn.serializeAll=function(type){
        if(type=='uri'){
            var toReturn=[];
            var els= $(this).find(':input').get();
            $.each(els,function(){
                if (this.name && !this.disabled && (this.checked || /select|textarea/i.test(this.nodeName) || /text|hidden|password/i.test(this.type))){
                    var val=$(this).val();
                    toReturn.push( encodeURIComponent(this.name) + "=" + encodeURIComponent( val ) );
                }
            });
            return toReturn.join("&").replace(/%20/g,"+");
        }

        if(type=='json'){
            var els=$(this).find(':input').get();
            var json={};
            $.map($(els).serializeArray(),function(n,i){
				value=n['value'];
				value=encodeURIComponent(value).replace(/'/g,"%60");
                json[n['name']]=value;
            });
         return json;
        };
   };
})(jQuery);
