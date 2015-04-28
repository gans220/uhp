$('.banner').height($(window).height());
		$('.homebanner').height($(window).height());
		
		$(function() {
			console.log( "ready!" );
			$('#navbarid').css({'background':'rgba(0,0,0,0.5)','transition':'1s'});
			$('.homecontent').css({'padding-top':$(window).height()})
			var elementPosition= $('.homecontent').find('.lead').offset().top-100;
			console.log(elementPosition);
			/*$(window).scroll(function(){
				console.log($(window).scrollTop());
				if($(window).scrollTop() > elementPosition){
					$('#navbarid').css({'background':'rgba(0,0,0,0.5)','transition':'1s'});
				} else {
					$('#navbarid').css({'background':'none'})
				}    
			});*/
			
			$('.navbar-nav').find('a').on('click', function(e){
				e.preventDefault();
				var offset=$($(this).attr('href')).offset().top;
				$('html,body').animate({
					scrollTop: offset
				}, 1000, "linear");
			});
	});