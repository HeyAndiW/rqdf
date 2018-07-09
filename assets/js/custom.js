$(()=>{
	$('.welcome div').addClass('content1');//animation: comein 300ms ease-in-out forwards
	$('.welcome').css('animation', 'comein 500ms ease-in-out forwards 700ms');
	
	$(document).on('click','.btn-modal', function(){
		var call = $(this).data('modal');
		showModal(call);
	});

	$(document).on('click','.close-btn, .back', function(){	
		closeModal();
	});

	setTimeout(function(){
		$('.mymodal .mark-error-login').hide(1000);
	}, 4000);

	setTimeout(function(){
		$('.mymodal .mark-error-login').remove();
	}, 5000);
});


function showModal(call){
	$(call).addClass('open');
	$(call + ' .container').before('<div class="back"></div>');
}

function closeModal(){
	$('.mymodal').removeClass('open');
	$('.back').remove();
}