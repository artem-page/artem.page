<script type="text/javascript">

	$(window).scroll(function(e) {

 		e.preventDefault();

    	if ( $(document).scrollTop() > 15 ) 
    	{
    		$('nav').removeClass('pt-4 pb-4');
    		$('nav').addClass('pt-3 pb-3 border-bottom navbar-transparency');

    	} else 
    	{
    		$('nav').removeClass('pt-3 pb-3 border-bottom navbar-transparency');
    		$('nav').addClass('pt-4 pb-4');
    	}

    });

</script>