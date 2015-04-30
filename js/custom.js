$('.homebannerImage').height($(window).height());
$('.fellowsbannerImage').height($(window).height());
$('.homebannerHeading').height($(window).height());
$('.holder').height($(window).height());

$(function() {
	console.log( "ready!" );
	
	$('.homecontent').css({'padding-top':$(window).height()});
	
	
	/*****Smooth Scroll animation******/
	$('.navbar-nav').find('a').on('click', function(e){
		e.preventDefault();
		var offset=$($(this).attr('href')).offset().top;
		$('html,body').animate({
			scrollTop: offset
		}, 1000, "linear");
	});
	

	$(window).scroll(function() {
		
		
		//Get the scoll position of the page
		var scrollPos = $(this).scrollTop();
		
		if(scrollPos>20){
			$('.navbar').css({'opacity':scrollPos/80});
			$('.applyButton').hide();
		}
		else{
			$('.navbar').css({'opacity':0});
			$('.applyButton').fadeIn("slow");
		}
		
		var fellowPos = $('#currentfellows').offset().top;
		if(fellowPos-scrollPos<=300){
			
			$('.fellowbannerHeading').css({
				'opacity' : 1-((fellowPos-scrollPos)/300)
			});
		}
		
		if(fellowPos-scrollPos>300)
		{
			$('.fellowbannerHeading').css({
				'opacity' : 0
			});
		}
		
		if(fellowPos-scrollPos<0)
		{
			
			$('.fellowbannerHeading').css({
				'margin-top' : -((scrollPos-fellowPos)/3)+"px",
				'opacity' : 1-((scrollPos-fellowPos)/400)
			});
			
			
		}
		
		
	
		//Scroll the background of the banner
		$('.homebannerImage').css({
			'background-position' : 'center ' + (-scrollPos/8)+"px"
		}); 

		$('.fellowsbannerImage').css({
			'background-position' : 'center ' + (-scrollPos/8)+"px"
		});

	});
	});