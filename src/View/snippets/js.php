<script type="text/javascript">

	$(window).scroll(function(e) {

 		e.preventDefault();

    	if ( $(document).scrollTop() > 15 ) 
    	{
    		$('nav').removeClass('pt-4 pb-4');
    		$('nav').addClass('navbar-transparency pt-3 pb-3');

    	} else 
    	{
    		$('nav').removeClass('navbar-transparency pt-3 pb-3');
    		$('nav').addClass('pt-4 pb-4');
    	}

    });

</script>