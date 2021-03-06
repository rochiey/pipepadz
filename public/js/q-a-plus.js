jQuery(document).ready(function($) {
	
	$("div[id^=qa-faq]").each(function () {
		var num = this.id.match(/qa-faq(\d+)/)[1];
		var faqContainer = $('.qa-faqs');
		var faq = $('#qa-faq' + num);
		
		if ( faqContainer.is('.collapsible') ) {

			faq.find('.qa-faq-anchor').bind("click", function() {
				if ( faqContainer.is('.accordion') ) {
					$('.qa-faq-answer').not('#qa-faq' + num + ' .qa-faq-answer').hide();
				}
				if ( faqContainer.is('.animation-fade') ) {
					faq.find('.qa-faq-answer').fadeToggle();
				} else if ( faqContainer.is('.animation-slide') ) {
					faq.find('.qa-faq-answer').slideToggle();
				} else  /* no animation */ {
					faq.find('.qa-faq-answer').toggle();
				}	

				return false;
			});
		
			$('.expand-all.expand').bind("click", function() {
				$('.expand-all.expand').hide();
				$('.expand-all.collapse').show();
				if ( faqContainer.is('.animation-fade') ) {
					$('.qa-faq-answer').fadeIn(400);
				} else if ( faqContainer.is('.animation-slide') ) {
					$('.qa-faq-answer').slideDown();
				} else  /* no animation */ {
					$('.qa-faq-answer').show();
				}	
			});

			$('.expand-all.collapse').bind("click", function() {
				$('.expand-all.collapse').hide();
				$('.expand-all.expand').show();
				if ( faqContainer.is('.animation-fade') ) {
					$('.qa-faq-answer').fadeOut(400);
				} else if ( faqContainer.is('.animation-slide') ) {
					$('.qa-faq-answer').slideUp();
				} else  /* no animation */ {
					$('.qa-faq-answer').hide();
				}	
			});
			
		}
	});

	$('.qasubmission').bind("click", function() {
		$('#postbox').fadeToggle();
	});
	
	$('#qaplus_searchform').submit(function() {
		link = $(this).find('#qa_search_link').val();
		query = $(this).find('.qaplus_search').val();
		query = query.split(' ').join('+');
		link = link + query;
		location.href = link;
		return false;
	});
	$('[name^=qty').on('change keypress keyrelease', function(){
		$('[name=update_cart]').removeAttr('disabled');
	});
	if($('#ship-to-different-address-checkbox').is(':checked'))
	{
		$('.shipping_address').attr('style','display:block');
	}
	else $('.shipping_address').attr('style','display:none');

	$('#ship-to-different-address-checkbox').on('click', function() {
		if($('#ship-to-different-address-checkbox').is(':checked'))
		{
			$('.shipping_address').attr('style','display:block');
		}
		else $('.shipping_address').attr('style','display:none');
	});
	//=======================STRIPE========================

	var stripe = Stripe(window.Laravel.stripeKey);
	var style = {
	  base: {
	    // Add your base input styles here. For example:
	    fontSize: '16px',
	    color: '#32325d',
	  },
	};
	var elements = stripe.elements({
	    fonts: [
	      {
	        cssSrc: 'https://fonts.googleapis.com/css?family=Roboto',
	      },
	    ],
	    // Stripe's examples are localized to specific languages, but if
	    // you wish to have Elements automatically detect your user's locale,
	    // use `locale: 'auto'` instead.
	    locale: window.__exampleLocale,


  	});

	var card = elements.create('card',{
		style: style, 
		hidePostalCode: true,
		value:{

		},

	});
	card.mount('#card-element');

	$('#checkout_form').on('submit', function(e){
		if(!$('[name=stripeToken]').length)
		{
			e.preventDefault();
			stripe.createToken(card).then(function(result) {
		    	if (result.error) {
			      	// Inform the customer that there was an error.
			      	swal('Error!',result.error.message+'. Please try again later.', 'error');
			    } else {
			      	// Send the token to your server.
			      	var form = document.getElementById('checkout_form');
				  	var hiddenInput = document.createElement('input');
				  	hiddenInput.setAttribute('type', 'hidden');
				  	hiddenInput.setAttribute('name', 'stripeToken');
				  	hiddenInput.setAttribute('value', result.token.id);

				  	form.appendChild(hiddenInput);
				  	$('#btnPlaceOrder').trigger('click');
			    }
		  	});
		}
		// else $(this).submit();

	});

});