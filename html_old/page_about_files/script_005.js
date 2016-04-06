jQuery.fn.slideTiguan=function(options){
	var options=$.extend({
		divWidth:100,
		divHeight:100,
		effDirect:'horizont',
		effWho:'za',
		effSpeed:1500,
		timer:0,
		boolStrel:1,
		boolShag:1,
	},options);

	var make=function(){
		var ths='#'+$(this).attr('id');
		var ths_caption='#'+$(this).attr('id')+' #caption';
		var ths_inner='#'+$(this).attr('id')+' #inner';
		var ths_shag='#'+$(this).attr('id')+' #shag';
		var divWidth=options.divWidth;
		var divHeight=options.divWidth;

		var length=$(ths+" ul li").length;
		var len=length-1;
		if (length>0){			
			caption=$(ths).html();
			$(ths).html('');
			
			$(ths).addClass('slide_tiguan');
			$(ths).append('<div id=caption></div>');
			$(ths).append('<div id=inner><div id=z1></div><div id=z2></div><div id=z3></div></div>');
			$(ths).append('<div id=prev></div><div id=next></div>');
			$(ths).append('<div id=shag></div>');
			
			$(ths_caption).html(caption);
			$(ths_caption+' ul li').each(function(i,elm){
				$(ths_shag).append('<span></span>');
			});				
			$(ths_shag+' span:first-child').attr('id','act');
			i_act=$(ths_shag+" #act").index();
			data=$(ths_caption+' ul li').eq(i_act).html()
			$(ths_inner+' #z2').html(data);

			$(ths).css({'width':options.divWidth+'px','height':options.divHeight+'px'});
			$(ths_inner).css({'width':options.divWidth+'px','height':options.divHeight+'px'});

			function shag_change(i){
				$(ths_shag+' span').attr('id','');
				$(ths_shag+' span').eq(i).attr('id','act');
			}

			function slid(i_act_new,task){
				data=$(ths_caption+' ul li').eq(i_act_new).html();

				if (options.effDirect=="horizont" || options.effDirect=="vertical"){
					left_ident=0;top_ident=0;
					
					if (options.effDirect=="horizont"){
						if (task=="next"){
							left_ident=divWidth;
						}else if (task=="prev"){
							left_ident='-'+divWidth;
						}
					}else if (options.effDirect=="vertical"){
						if (task=="next"){
							top_ident='-'+divHeight;
						}else if (task=="prev"){
							top_ident=divHeight;
						}
					}

					if (options.effWho=='za'){
						$(ths_inner+' #z3')
						.not(':animated')
						.css({left:left_ident,top:top_ident})
						.html(data)
						.animate({left:'0',top:'0'},options.effSpeed,function(){
							shag_change(i_act_new);

							$(ths_inner+' #z2').html(data)
							$(ths_inner+' #z3').html('');
							//alert( $(ths).html() );
						});							
					}else if (options.effWho=='do'){
						$(ths_inner+' #z1').html(data);
						//easeInOutQuart,easeInQuint,easeInOutExpo
						$(ths_inner+' #z2:not(:animated)').animate({left:left_ident,top:top_ident},options.effSpeed,'easeInOutExpo',function(){
							shag_change(i_act_new);

							$(ths_inner+' #z2').html(data);
							$(ths_inner+' #z2').css({left:'0',top:'0'});
							$(ths_inner+' #z3').html('');
							//$(ths_inner+' #z2').html(data)
							//$(ths_inner+' #z1').html('');
							//alert( $(ths).html() );
						});
					}
				}else if (options.effDirect=="smena"){//пока что для за и до
					if (options.effWho=='za'){
						$(ths_inner+' #z1').html(data);
						$(ths_inner+' #z2')
						.not(':animated')
						.fadeOut(options.effSpeed,function(){
							shag_change(i_act_new);

							$(ths_inner+' #z1').html('');
							$(ths_inner+' #z2').html(data);
							$(ths_inner+' #z2').show();
							$(ths_inner+' #z3').html('');
							//alert($(ths_inner).html());
						});
					}else if (options.effWho=='do'){
						$(ths_inner+' #z3')
						.not(':animated')
						.hide()
						.html(data)
						.fadeIn(options.effSpeed,function(){
							shag_change(i_act_new);

							$(ths_inner+' #z3').html('');
							$(ths_inner+' #z2').html(data);
						});
					}
				}
			}
			$(ths+' #prev,'+ths+' #next').on('click',function(){
				task=$(this).attr('id');
				
				i_act=$(ths_shag+" #act").index();
				i_prev=i_act-1;
				if (i_prev<0){
					i_prev=len;
				}
				i_next=i_act+1;
				if (i_next>len){
					i_next=0;
				}

				if (task=="next"){
					i_act_new=i_next;
				}else if (task=="prev"){
					i_act_new=i_prev;
				}
				
				slid(i_act_new,task);
			});
			
			/*
			$(document).on({
				 mouseenter: function () {
					$(ths+' #prev').animate({'opacity':'1','left':'20px'},500);
				},
				mouseleave: function (){
					$(ths+' #prev').animate({'opacity':'0'},400,function(){
						$(this).css({'left':'0px'});
					});
					//stuff to do on mouse leave
				}
			},ths+' #inner');
			*/
			
			$(document).on('mousemove',function(e){
				var container=$(ths);
				var length=container.has(e.target).length;
				///console.log(length);
				if (length=='1'){
					$(ths+' #prev').stop().animate({'opacity':'1','left':'20px'},300);
					$(ths+' #next').stop().animate({'opacity':'1','right':'20px'},300);
				}else{
					//console.log('h');
					//$(ths+' #prev').sanimate({'opacity':'0'},400);	
					$(ths+' #prev').stop().animate({'opacity':'0','left':'0'},100);
					$(ths+' #next').stop().animate({'opacity':'0','right':'0'},100);
				}
			});

			/*
			$(ths+' #inner').hover(
			function(){
			  $(ths+' #prev').animate({'opacity':'1','left':'20px'},500);
			},
			function(){
				$(ths+' #prev').animate({'opacity':'0'},400,function(){
					$(this).css({'left':'0px'});
				});
			});
			*/
			
			$(document).on('click',ths_shag+' span',function(){
				i_act=$(ths_shag+' #act').index();
				i_act_new=$(this).index();
				
				task='next';
				if (i_act_new<i_act){
					task='prev';
				}
				//alert(i_act_new+' | '+i_act);
				slid(i_act_new,task);
			});

			//timer
			if (options.timer>0 && length>1){
				$(ths).hover(function(){
					stop_timer1();
				},function(){
					start_timer1();
				});
				function start_timer1(){
					timer1=setInterval(function(){
						//slid('next');
						$(ths+' #next').trigger('click');
					},options.timer);
				}
				function stop_timer1(){	
					clearInterval(timer1);
					//start_timer1();
				}
				start_timer1();
			}
			if (options.boolStrel && length>1){
				$(ths+' #prev,'+ths+' #next').show();
			}
			if (options.boolShag && length>1){
				$(ths_shag).show();
			}
		}
		//alert( $('body').html() );
		//$(ths_inner+' ul').css({'left':'-'+liWidth2+'px'});
		//alert( $(ths).html() );
	};
	return this.each(make);
};