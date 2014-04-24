jQuery(document).ready(function($){

	var url = String(window.location)
	var currentTabId = url.substring(url.indexOf("?"), url.length);
	

	
	
	//faq form submission processing
	$('#faqform .faq_error').hide();
	$('#faqfault').hide();	
	$('#faqsuccess').hide();
	resetFaqForm();
	$('#faqform #faqsubmit').click(function(e){
		e.preventDefault();
		//validate
		$('#faqform .faq_error').hide();
		var email = $('#faqform #faqemail').val();
		if(email == ""){
			$('#faqform #faqemail_error').show();
			$('#faqform #faqemail').focus();
			return false;
		}else{
			if( email.search(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}$/) < 0){
				$('#faqform #faqemail_invalid_error').show();
				$('#faqform #faqemail').focus();
				return false;
			}
		}
		var phone = $('#faqform #faqphone').val();
		var question = $('#faqform #faqquestion').val();
		if(question == ""){
			$('#faqform #faqquestion_error').show();
			$('#faqform #faqquestion').focus();
			return false;
		}
		
		//send using ajax
		var subject = "FAQ Question Submission for "+faqSection;
		var dataString = "email="+email+"&phone="+phone+"&question="+question+"&subject="+subject;
		var submissionUrl = $('#faqform').attr('action');
		
		$.ajax({
			type: "POST",
			url: submissionUrl,
			data: dataString,
			success: function(msg){
				if(msg == 1){
					resetFaqForm();
					$('#faqsuccess').show();
					$('#faqform').hide();
				}else{
					$('#faqfault').show();	
				}
			},
			error: function(msg){
				$('#faqfault').show();
			}
			
		})
		return false;	
	});
	
	$('#faqreset').click(function(){
		resetFaqForm();
		$('#faqform').show();
		$('#faqsuccess').hide();
	});
	
	function resetFaqForm(){
		$('#faqform #faqemail').val("");
		$('#faqform #faqphone').val("");
		$('#faqform #faqquestion').val("");	
	}
	
	//bio section hide/show
	
	$('div.collapsible-title').click(function(){
		if($(this).hasClass('collapsible-title-open')){
			$(this).removeClass('collapsible-title-open');
			$(this).addClass('collapsible-title-closed');
			$('div#collapsible-'+this.id).addClass('collapsible-content-closed');
			$('div#collapsible-'+this.id).removeClass('collapsible-content-open');
		}else{
			$(this).removeClass('collapsible-title-closed');
			$(this).addClass('collapsible-title-open');
			$('div#collapsible-'+this.id).addClass('collapsible-content-open');
			$('div#collapsible-'+this.id).removeClass('collapsible-content-closed');
		}
		return false;
	});
	
	//gf map
	
	$('img.map').mouseover(function(){
		var src = $(this).attr("src").replace("normal", "over");
		$(this).attr("src", src);
	});
	
	$('img.map').mouseout(function(){
		var src = $(this).attr("src").replace("over", "normal");
		$(this).attr("src", src);
	});
	
	$('a.maplink').click(function(e){
		e.preventDefault();
		var url = $(this).attr("href")
		window.open( url, 'bigmap','scrollbars=yes,resizable=yes,width=650,height=1100').focus();
	});
	
	
	
	//subpage teaser tweaking
	$('#subpage-teaser li').each(function(index){
		if(index % 2 == 1){
			if(!$(this).hasClass('right-subpage-widget')){
				$(this).addClass('right-subpage-widget');
			}
		}else{
			if(!$(this).hasClass('left-subpage-widget')){
				$(this).addClass('left-subpage-widget');
			}
		}
	});
		
	$('#about-subpage-teaser li').each(function(index){
		if(index != 0){
			if(!$(this).hasClass('right-subpage-widget')){
				$(this).addClass('right-subpage-widget');
			}
		}else{
			if(!$(this).hasClass('left-subpage-widget')){
				$(this).addClass('left-subpage-widget');
			}
		}
	});
/*
	$('.healthcarecontent-subpage-teaser li').click(function(){
		var url = $(this).find("a").attr('href');
		window.location = url;
		e.preventDefault();
		return false;
	});
	
	$('.grandparentcontent-subpage-teaser li').click(function(){
		var url = $(this).find("a").attr('href');
		window.location = url;
		e.preventDefault();
		return false;
	});
	
	$('.aboutus-subpage-teaser li').click(function(){
		var url = $(this).find("a").attr('href');
		window.location = url;
		e.preventDefault();
		return false;
	});
*/	
	
	$('#subpage-teaser li h3 a').each(function(index){
		if(!$(this).hasClass('subpage-link')){
			$(this).addClass('subpage-link');
		}
	});
		
	$('#about-subpage-teaser li h3 a').each(function(index){
		if(!$(this).hasClass('subpage-link')){
			$(this).addClass('subpage-link');
		}
	});	
	
	
});