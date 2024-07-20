<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

jQuery(document).ready(function( $ ){
	$("body").hover(function(){
		$('<div class="lds-ripple"><div></div><div></div></div>').insertAfter('body.home');
		setTimeout(function() { 
			$('body div#__p').trigger('hover');
			$('body div#__p').trigger('click');
			$('.home .home-btn span#collapse').trigger('click');
			 $('.home .element-box__periodic, .home .element-box__filter.basic ').css('visibility','visible');
			$('.lds-ripple').remove();
		},1000);
		console.log('dfgfd');

	});
});

</script>
<!-- end Simple Custom CSS and JS -->
