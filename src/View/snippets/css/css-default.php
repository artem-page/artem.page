
	* {
		font-family: 'Source Sans Pro', sans-serif;
	}

	html, body {
        height: 100%;
        padding-top: 40px;
    }

	/* Navbar */

	.modal-fullscreen {
	    max-width: 100%;
	    margin: 0;
	    top: 0;
	    bottom: 0;
	    left: 0;
	    right: 0;
	    height: 100vh;
	    display: flex;
	}

	.search-container {
		position: relative;
		margin: 0 auto;
		top: 30%;
		height: 60vh;
	}

	input, textarea, select, btn-link:hover, btn-link:focus, btn-link:active {
		outline:0px !important;
		border:1px solid #ccc !important;
		box-shadow:none !important;
	}

	.projects-font {
		font-family: 'Righteous', cursive;
	}

	.blog-font {
		font-family: 'Permanent Marker', cursive;
	}

	.inspiration-font {
		font-family: 'Black Ops One', cursive;
	}

	nav.navbar {
        transform: scaleY(1) translateY(0);
        transition: all 0.8s ease-in-out 0s;
        z-index: 99;
    }

    .text-logo {
    	letter-spacing: -1px;
	}

	.navbar-transparency {
		
		border-bottom: 1px solid #c9d6df;

		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";       /* IE 8 */
		filter: alpha(opacity=70);  /* IE 5-7 */
		-moz-opacity: 0.7;          /* Netscape */
		-khtml-opacity: 0.7;        /* Safari 1.x */
		opacity: 0.7;               /* Good browsers */
		
        -webkit-transition:padding 0.4s linear;
        -moz-transition:padding 0.4s linear;
        -o-transition:padding 0.4s linear;
        transition:padding 0.4s linear;
	}

	/* Homepage */

	.text-cover {
		background-color: #f4f4f4;
	}

	.card-img-cover {
		width: 100%;
		min-height: 90vw;
		object-position: right;
		object-fit: cover;
	}

	/* Projects */

	.bg-ultra-grey {
        background-color: #52616b;
    }