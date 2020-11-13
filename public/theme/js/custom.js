
$(document).ready(function(){
	$(".for_sub").click(function(){
		$(".sub_dropdrown").removeClass('drop_hidden');
	});

	$(".leaveBtn").click(function(){
		$(".sub_dropdrown").addClass('drop_hidden');
	});

	$(".slider-img, .rate-table").click(function(){
		$(".sub_dropdrown").addClass('drop_hidden');
	});



	$("#homeBtn").hover(function(){
		jQuery('#home_product').css('top','inherit');
		$("#loan_dropdown,#deposit_dropdown,#inventor,#contact,#about_dropdown").hide();
		$('#home_product').stop(true, true).show();
		if(jQuery('.sticky-wrapper').hasClass('is-sticky')){
			jQuery('#home_product').css('top','86px');
		}
	});




	$("#loanBtn").hover(function(){

		jQuery('#loan_dropdown').css('top','inherit');
		$("#home_product,#deposit_dropdown,#inventor,#contact,#about_dropdown").hide();
		$('#loan_dropdown').stop(true, true).show();
		if(jQuery('.sticky-wrapper').hasClass('is-sticky')){
			jQuery('#loan_dropdown').css('top','86px');
		}

	});

	$("#aboutBtn").hover(function(){
		jQuery('#about_dropdown').css('top','inherit');
		$("#home_product,#deposit_dropdown,#inventor,#contact").hide();
		$('#about_dropdown').stop(true, true).show();
		if(jQuery('.sticky-wrapper').hasClass('is-sticky')){
			jQuery('#about_dropdown').css('top','86px');
		}

	});

	$("#depositBtn").hover(function(){
		jQuery('#deposit_dropdown').css('top','inherit');
		$("#home_product,#loan_dropdown,#inventor,#contact,#about_dropdown").hide();
		$('#deposit_dropdown').stop(true, true).show();
		if(jQuery('.sticky-wrapper').hasClass('is-sticky')){
			jQuery('#deposit_dropdown').css('top','86px');
		}

	});

	$("#investorBtn").hover(function(){
		jQuery('#inventor').css('top','inherit');
		$("#home_product,#loan_dropdown,#deposit_dropdown,#contact,#about_dropdown").hide();
		$('#inventor').stop(true, true).show();
		if(jQuery('.sticky-wrapper').hasClass('is-sticky')){
			jQuery('#inventor').css('top','86px');
		}

	});

	$("#contactBtn").hover(function(){
		jQuery('#contact').css('top','inherit');
		$("#home_product,#loan_dropdown,#deposit_dropdown,#inventor,#about_dropdown").hide();
		$('#contact').stop(true, true).show();
		if(jQuery('.sticky-wrapper').hasClass('is-sticky')){
			jQuery('#contact').css('top','86px');
		}

	});


	$("#home_product").mouseleave(function(){
		$("#home_product").hide();
	});
	$("#loan_dropdown").mouseleave(function(){
		$("#loan_dropdown").hide();
	});
	$("#about_dropdown").mouseleave(function(){
		$("#about_dropdown").hide();
	});
	$("#deposit_dropdown").mouseleave(function(){
		$("#deposit_dropdown").hide();
	});
	$("#inventor").mouseleave(function(){
		$("#inventor").hide();
	});
	$("#contact").mouseleave(function(){
		$("#contact").hide();
	});

	$("lookingfor_form").click(function(){
		$("#lookingfor").css({'border':'none'});
	});








});
