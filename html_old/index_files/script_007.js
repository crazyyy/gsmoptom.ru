$(function(){
	jQuery.fn.slideSonata=function(options){
		var options=$.extend({
			height:500,
			timer:0,
			shagBool:1
		},options);

		var make=function(){
			var ths='#'+$(this).attr('id');
			var ths1='#'+$(this).attr('id')+' #caption';
			var ths2='#'+$(this).attr('id')+' #inner2';
			var ths_otnos1='#'+$(this).attr('id')+' #otnos1';
			var ths_otnos2='#'+$(this).attr('id')+' #otnos2';
						
			var slideWidth=$(window).width();
			var slideHeight=options.height;
			$(window).resize(function(){
				length_loc=length;
				if (length_loc<=2){
					length_loc=3;
				}
				slideWidth=$(window).width();
				$(ths2).css({'width':slideWidth*length_loc,'left':'-'+slideWidth+'px'});
				$(ths2+' div').css({'width':slideWidth+'px','height':slideHeight});				

				w=1280;
				if (slideWidth<w){
					w=slideWidth;
				}
				left=w/2;
				$(ths_otnos2).css({'width':w+'px','height':slideHeight+'px','margin-left':'-'+left+'px'});
				//alert($(ths).html());
			});
			
			caption=$(ths).html();
			$(ths).html('');
			$(ths).addClass('slide_sonata');
			$(ths).append('<div id=caption>'+caption+'</div>');
			$(ths).append('<div id=inner><div id=inner2><div></div><div></div><div></div></div></div>');
			$(ths).append('<div id=otnos1></div>');
			$(ths).append('<div id=otnos2></div>');
			
			$(ths_otnos1).css({'height':slideHeight+'px'});
			
			$(ths_otnos2).append('<a href="" id=link></a>');
			
			var length=$(ths1+" ul li").length;
			var len=length-1;
			
			$(ths2).css('width', slideWidth*length);
			$(ths2+' div').css({'width':slideWidth+'px','height':slideHeight});		
			
			$(window).trigger('resize');

			if (length==1){
				//img1=$(ths1+' .'+i_prev+' img').attr('src');
				img1=$(ths1+' ul li:first img').attr('src');
				//alert(img1);
				$(ths2+' div').css('background-image','url('+img1+')');
			}else if (length>0){
				if (options.shagBool){
					$(ths_otnos1).prepend('<div id=shag class=timerhand></div>');
					$(ths1+' ul li').each(function(i,elm){
						$(ths_otnos1+' #shag').append('<a href=\"javascript:void;\" class=\"'+i+'\"></a>');
					});
				}
				$(ths1+' ul li').each(function(i,elm){
					$(elm).attr('class',i);
				});
				$(ths1+' ul li:first').attr('id','act');
				$(ths_otnos1).prepend('<div class=timerhand id=prev></div><div class=timerhand id=next></div>');
				slideHeight_half=slideHeight/2;
				//alert(slideHeight_half);
				if (slideWidth>1110){
					prev_horiz='-66';
					next_horiz='-66';
				}else{
					prev_horiz='0';
					next_horiz='0';
				}
				//$(ths_otnos1+' #prev').css({'top':slideHeight_half+'px','left':prev_horiz+'px'});
				//$(ths_otnos1+' #next').css({'top':slideHeight_half+'px','right':next_horiz+'px'});
				
				function linkpast(par){
					link='';
					$(ths_otnos2+' a#link').hide();
					if ($(ths1+' .'+par+' a').length){
						link=$(ths1+' .'+par+' a').attr('href');
					}
					if (link!=''){
						$(ths_otnos2+' a#link').attr('href',link);
						$(ths_otnos2+' a#link').show();
					}
				}
				function stavnik(task){
					i_act=$(ths1+" ul li#act").index();
					i_prev=i_act-1;
					if (i_prev<0){
						i_prev=len;
					}
					i_next=i_act+1;
					if (i_next>len){
						i_next=0;
					}
					
					$(ths2).css({'left':'-'+slideWidth+'px'});
					
					img1=$(ths1+' .'+i_prev+' img').attr('src');
					$(ths2+' div:first').css('background-image','url('+img1+')');
					img2=$(ths1+' .'+i_act+' img').attr('src');
					$(ths2+' div:first').next().css('background-image','url('+img2+')');
					img3=$(ths1+' .'+i_next+' img').attr('src');
					$(ths2+' div:last').css('background-image','url('+img3+')');
					//необходимо одним заходом добавлять, т.к. в хроме тормозит
					
					$(ths2).css({'left':'-'+slideWidth+'px'});
					
					$(ths+' #shag a').attr('id','');
					$(ths+' #shag a.'+i_act).attr('id','act');

					linkpast(i_act);
				}

				function animat(ident,i_act_new){
					$(ths_otnos2+' a#link').hide();
					if (ident=='left'){
						left_indent=parseInt($(ths2).css('left'))+slideWidth;						
						
					}else if (ident=='right'){
						left_indent=parseInt($(ths2).css('left'))-slideWidth;
					}
					
					$(ths2+':not(:animated)').animate({'left':left_indent},500,function(){
						$(ths1+' ul li').attr('id','');
						$(ths1+' ul li.'+i_act_new).attr('id','act');
						stavnik();
					});
				}
				
				function slid(task){
					if (task=='prev'){
						ident='left';
						i_act_new=i_prev;
					}else if (task=='next'){
						ident='right';
						i_act_new=i_next;
					}
					animat(ident,i_act_new);
					//alert(i_prev);
					//alert(i_next);
					//alert( $(ths1+' .'+i_prev).html() );
					//alert( $(ths).html() );
				}
				function shag(i_to){
					i_act=$(ths1+" ul li#act").index();
					src=$(ths1+' .'+i_to+' img').attr('src');
					if (i_to<i_act){
						$(ths2+' div:first').css({'background-image':'url('+src+')'});
						ident='left';
						animat(ident,i_to);
					}else if (i_to>i_act){
						$(ths2+' div:last').css({'background-image':'url('+src+')'});
						ident='right';
						animat(ident,i_to);
					}
				}
				
				$(ths+' #prev').on('click',function(){
					slid('prev');
				});
				$(ths+' #next').on('click',function(){
					slid('next');
				});
				$(ths+' #shag a').click(function(){
					i=$(this).attr('class');
					shag(i);
				});
				stavnik();
				
				var timer1;
				if (options.timer>0){
					$(ths_otnos1+' .timerhand').hover(function(){
						stop_timer1();
					},function(){
						start_timer1();
					});			
					function start_timer1(){
						timer1=setInterval(function(){
							slid('next');
						},options.timer);
					}
					function stop_timer1(){	
						clearInterval(timer1);
						//start_timer1();
					}
					start_timer1();
				}
			}
		};
		return this.each(make);
	};	
});