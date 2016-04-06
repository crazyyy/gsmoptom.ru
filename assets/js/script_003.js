jQuery.fn.slideKalina=function(options){
	var options=$.extend({
		Width:100,
		Height:100,
		timer:0,
		boolStrel:0,
		boolShag:0,
	},options);

	var make=function(){
		var ths='#'+$(this).attr('id');
		var ths1='#'+$(this).attr('id')+' #inner';
		var ths_shag='#'+$(this).attr('id')+' #shag';
		var Width=options.Width;
		var Height=options.Height;
		
		var length=$(ths+" ul li").length;
		var len=length-1;
		if (length>0){
			caption=$(ths).html();
			$(ths).html('');
			$(ths).append('<div id=inner>'+caption+'</div>');
			$(ths).append('<div id=shag></div>');
			$(ths).append('<div id=prev></div><div id=next></div>');
			if (length==1){//если одна картинка только
				options.boolStrel=0;
				options.boolShag=0;
				options.timer=0;
			}
			$(ths).addClass('slide_kalina');
			
			var Indent='left';
			var Indent_par=Width;
			
			$(ths1+' ul li').each(function(i,elm){
				ii=i+1;
				$(elm).attr('id',ii);
				$(ths_shag).append('<span id="id_'+ii+'" rel="'+ii+'"></span>');
			});
			
			first=$(ths1+' ul li:first-child').html();
			last=$(ths1+' ul li:last-child').html();
			$(ths1+' ul').prepend('<li id=start>'+last+'</li>');
			$(ths1+' ul').append('<li id=end>'+first+'</li>');
			$(ths1+' ul').append('<div class=clear></div>');
			
			/*
			$(ths).css({'width':Width+'px','height':Height+'px'});
			$(ths1).css({'width':Width+'px','height':Height+'px'});
			$(ths1+' ul li').css({'width':Width+'px','height':Height+'px'});
			*/
			
			$(ths).css({'width':Width+'px'});
			$(ths1).css({'width':Width+'px'});
			$(ths1+' ul li').css({'width':Width+'px'});

			function slid(par){
				if (par=='prev'){
					i_act=$(ths_shag+' .act').prev().attr('rel');
				}else{
					i_act=$(ths_shag+' .act').next().attr('rel');
				}
				if (typeof i_act=='undefined' || i_act==''){
					if (par=='prev'){
						i_act='start';
					}else if (par=='next'){
						i_act='end';
					}
				}
				//alert(i_act);
				anim(i_act)
			}
			function anim(par){
				param=par;
				if (par=='start'){
					param='0';
				}else if (par=='end'){
					param=length+1;
				}
				//alert(param);
				//alert(Indent_par*param);
				ob={};
				ob[Indent] = '-'+(Indent_par*param)+'px'
				$(ths1+' ul').not(":animated").animate(ob,500,function(){
					stavnik(par);
				});
			}
			function stavnik(par){
				param=par;
				if (par=='start'){
					param=length;
				}else if (par=='end'){
					param=1;
				}
				$(ths_shag+' span').removeClass('act');
				$(ths_shag+' #id_'+param).addClass('act');
				
				ob={};
				ob[Indent] = '-'+(Indent_par*param)+'px'
				$(ths1+' ul').css(ob);
			}
			
			stavnik('1');
			
			$(document).on('click',ths+' span',function(){
				i=$(this).attr('rel');
				anim(i);
			});
			
			$(document).on('click',ths+' #prev,'+ths+' #next',function(){
				par=$(this).attr('id');
				slid(par);
			});

			if (options.timer>0){				
				$(ths).hover(function(){
					stop_timer1();
				},function(){
					start_timer1();
				});
				var timer1;
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
			if (!options.boolStrel){
				$(ths+' #prev,'+ths+' #next').hide();
			}
			if (!options.boolShag){
				$(ths_shag).hide();
			}
		}

		//$(ths1+' ul').css({'left':'-'+liWidth2+'px'});
		//alert( $(ths).html() );
	};
	return this.each(make);
};	
