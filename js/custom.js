if($(window).height()>540)
{
	$('.homebannerImage').height($(window).height());
	$('.homebannerHeading').height($(window).height());
	$('.holder').height($(window).height());
}	
else
{
	$('.homebannerImage').height(540);
	$('.homebannerHeading').height(540);
	$('.holder').height(540);
}
	
$('.fellowsbannerImage').height($(window).height());

	$('.nav a').on('click', function(){
		if($(window).width()<768){
			$(".navbar-toggle").click();
		}//bootstrap 3.x by Richard
	});

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
	
	$('.navbar').hide();
	$(window).scroll(function() {
		
		
		//Get the scoll position of the page
		var scrollPos = $(this).scrollTop();
		
		if(scrollPos>20){
			$('.navbar').show();
			$('.navbar').css({'opacity':scrollPos/80});
			$('.applyButton').hide();
		}
		else{
			$('.navbar').hide();
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
		if($(window).width()>1000){
			
			$('.homebannerImage').css({
				'background-position' : 'center ' + (-scrollPos/8)+"px"
			}); 
		
			$('.fellowsbannerImage').css({
				'background-position' : 'center ' + (-scrollPos/8)+"px"
			});
		}

	});
	});