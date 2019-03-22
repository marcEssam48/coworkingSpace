<?php

   session_start();

     

        $pageTitle = 'Home';
        
        include 'init.php';
        ?>

        <link rel="stylesheet" href="../resources/css/style.css">
        <link rel="stylesheet" href="../resources/css/media.css">
        
  <?php include 'navbar.php'; ?>   
 
<!--        start home slider -->
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
  <!-- Overlay -->
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>We are creative</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are smart</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>       
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
      </div>
    </div>
  </div> 
</div>
<!--        end home slider-->
        
<!--        start about slider-->
        <div class="container-fluied" id="about">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="../resources/images/aboutus.png" class="img-responsive">
                <div class="carousel-caption">
                    <h3>Headline</h3>
                    <p>
                        WE are the first co-working space that we can manage courses and events that you like </p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="../resources/images/projects.png" class="img-responsive">
                <div class="carousel-caption">
                    <h3>Headline</h3>
                    <p>
                        We helped a lot of sutdents in their graduation projects</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="../resources/images/protfolio.png" class="img-responsive">
                <div class="carousel-caption">
                    <h3>Headline</h3>
                    <p>
                        you can make a tour in our website to see our amazing rooms and offers</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="../resources/images/services.png" class="img-responsive">
                <div class="carousel-caption">
                    <h3>Headline</h3>
                    <p>
                        You can see ours features in the blow section.. just a few steps </p>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem
                ipsum dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum
                dolor sit</small></a></li>
        </ul>
    </div>
    <!-- End Carousel -->
</div>

<!--        end about slider-->
        <!-- start benefits-->
<div id="Benefits">
			<div class="blockTitle">Benefits</div>
			<div class="benefitsWrap js-uni-animated">
            				<div class="benefitItem">
					<i class="benefitIcon_1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="58" viewBox="0 0 62 58">
                            <path fill="#2ebd7f" d="M31 55C16.664 55 5 43.336 5 29S16.664 3 31 3s26 11.664 26 26-11.664 26-26 26zm0-49.6C17.987 5.4 7.4 15.987 7.4 29c0 13.014 10.587 23.6 23.6 23.6 13.014 0 23.6-10.582 23.6-23.6C54.6 15.987 44.014 5.4 31 5.4zm.89 28.05c-.234.233-.542.35-.85.35s-.615-.116-.85-.35l-7.353-7.355c-.466-.466-.466-1.23 0-1.696.467-.467 1.23-.467 1.697 0l6.506 6.504 12.163-12.16c.467-.468 1.23-.468 1.697 0 .467.465.467 1.228 0 1.696L31.89 33.45z"/>
                        </svg>                    </i>
					<p>24 Hr Access</p>
				</div>
                				<div class="benefitItem">
					<i class="benefitIcon_2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="58" viewBox="0 0 62 58">
                            <path fill="#2ebd7f" d="M53.934 42.486c-.688-1.94-4.826-5.21-11.64-9.225l-.362-.138c-1.356-.434-3.135-.543-6.983 3.527-.4-.052-2-.5-6.432-4.16l-.005-.007c-3.814-4.607-4.195-6.05-4.228-6.377 4.138-3.89 4.02-5.672 3.587-7.042l-.138-.36c-4.006-6.814-7.286-10.945-9.228-11.64L18.33 7l-.19.006c-2.592.1-6.074 1.122-7.936 5.43l-.105.235-.014.146C8.872 22.2 20.828 35.73 21.543 36.526l.02.022 3.252 3.2-.006.007C25.345 40.232 37.44 51 46.765 51c.48 0 .95-.025 1.416-.086l.146-.02.235-.104c4.31-1.863 5.332-5.338 5.43-7.93l.007-.19-.066-.184zm-6.14 6.493c-8.06.898-20.04-9.272-21.523-10.564l-.058-.055-3.227-3.18-.046-.052c-1.077-1.218-11.845-13.723-10.92-21.926 1.134-2.623 3.147-4.047 5.968-4.217.61.328 2.938 2.053 7.994 10.617l.013.052c.17.544.532 1.673-3.193 5.142l-.132.144c-.702.978-.925 2.362 4.453 8.92 6.17 5.245 8.007 5.095 8.914 4.465l.156-.124c3.47-3.73 4.598-3.37 5.146-3.2l.052.02c8.566 5.05 10.29 7.385 10.625 7.986-.175 2.827-1.592 4.834-4.222 5.973z"/>
                        </svg>                    </i>
					<p>Private <br> Phone Booth</p>
				</div>
                				<div class="benefitItem">
					<i class="benefitIcon_3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="58" viewBox="0 0 62 58">
                            <path fill="#2ebd7f" d="M53.632 47H8.368C5.96 47 4 45.025 4 42.6V15.4C4 12.974 5.96 11 8.368 11h45.264C56.04 11 58 12.974 58 15.4v27.2c0 2.425-1.96 4.4-4.368 4.4zM8.368 44.6h45.264c.194 0 .377-.037.554-.088l-14.13-14.237-6.02 6.063c-.853.858-1.97 1.286-3.09 1.286-1.117 0-2.235-.428-3.087-1.286l-5.69-5.728L8.293 44.592c.028.002.05.008.076.008zM6.482 14.804c-.063.19-.104.387-.104.596v27.2c0 .162.02.315.063.467l14.05-14.152-14.008-14.11zM8.46 13.4l21.084 21.243c.774.78 2.033.78 2.808 0L53.436 13.4H8.46zm47.032 1.323L41.738 28.578l13.88 13.982V15.4c0-.24-.05-.465-.126-.677z"/>
                        </svg>                    </i>
					<p>Mail Service</p>
				</div>
                				<div class="benefitItem">
					<i class="benefitIcon_4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="58" viewBox="0 0 62 58">
                            <path fill="#2ebd7f" d="M47.96 31.034c-1.462 1.65-3.856 2.805-6.383 3.606l4.683 20.854c.148.662-.28 1.324-.947 1.477-.67.147-1.34-.274-1.488-.937l-1.793-7.99-10.74-2.938-11.31 3.094-1.76 7.833c-.148.662-.818 1.084-1.487.938-.67-.145-1.096-.812-.947-1.475l4.678-20.845c-2.54-.8-4.954-1.957-6.425-3.618-1.16-1.314-1.67-2.874-1.51-4.548.773-8.07 4.852-20.02 4.893-20.135.02-.06 1.998-5.314 8.23-5.335C27.975 1.002 29.422 1 30.317 1l.005-.002c.038 0 .977-.02 6.028 0 6.234.02 8.21 5.27 8.23 5.324.04.104 4.115 12.006 4.893 20.104.16 1.687-.35 3.295-1.513 4.608zm-6.34 15.19l-.83-3.712-6.375 1.742 7.206 1.97zM40.428 40.9l-1.258-5.604c-3.966.935-7.632 1.115-7.91 1.115h-.047c-.075 0-.142-.032-.213-.047-.072.015-.14.048-.214.048h-.05c-.273 0-3.914-.184-7.863-1.103l-1.225 5.455 9.64 2.635 9.14-2.497zm-20.04 5.477l7.775-2.124-6.875-1.878-.9 4.002zM42.23 7.173c-.015-.038-1.404-3.678-5.89-3.692-2.348-.007-3.793-.007-4.675-.005-.014-.002-.025.006-.04.006-.013 0-.14-.003-.497-.005-.563.002-.74.004-.758.006-.017 0-.032-.007-.048-.007-.885-.002-2.326-.002-4.665.006-4.483.02-5.877 3.65-5.89 3.688-.04.105-4.01 11.716-4.756 19.507-.093.98.202 1.845.903 2.638 2.913 3.294 11.756 4.328 14.918 4.448.09.004.168.045.252.067.028-.003.053-.02.083-.02 3.162-.12 12.004-1.184 14.916-4.48.703-.792.998-1.667.904-2.645-.677-7.105-4.24-18.096-4.754-19.51z"/>
                        </svg>                    </i>
					<p>Modern <br> Open Design</p>
				</div>
                				<div class="benefitItem">
					<i class="benefitIcon_5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="58" viewBox="0 0 62 58">
                            <path fill="#2ebd7f" d="M24.105 39.592l-1.392-1.344c2.277-2.368 5.314-3.712 8.603-3.712 2.91 0 5.694 1.088 7.91 3.008l-1.267 1.472c-1.9-1.664-4.177-2.496-6.644-2.496-2.72 0-5.314 1.087-7.21 3.072zM31 30.184c4.05 0 7.78 1.48 10.88 4.16l1.267-1.472C39.73 29.8 35.49 28.2 31 28.2c-4.745 0-9.236 1.792-12.652 5.12l1.328 1.408c3.037-2.88 7.022-4.544 11.324-4.544zm.316-6.463c5.757 0 11.26 2.177 15.5 6.147l1.266-1.408c-4.556-4.29-10.563-6.657-16.764-6.657-6.58 0-12.778 2.624-17.46 7.3l1.33 1.342c4.362-4.293 10.055-6.724 16.128-6.724zm0-6.4c7.402 0 14.487 2.813 19.927 8l1.33-1.408C46.812 18.408 39.286 15.4 31.38 15.4c-8.224 0-16.005 3.264-21.89 9.088l1.33 1.344c5.504-5.504 12.78-8.512 20.496-8.512zm0-6.4c9.047 0 17.713 3.456 24.355 9.792L57 19.305C49.98 12.648 40.87 9 31.316 9 21.448 9 12.086 12.904 5 19.943l1.328 1.345c6.706-6.656 15.626-10.368 24.988-10.368zM9.49 36.2zM31 42.6c-1.202 0-2.214 1.024-2.214 2.24 0 1.217 1.012 2.24 2.214 2.24s2.214-1.023 2.214-2.24c0-1.216-1.012-2.24-2.214-2.24m0-1.92c2.277 0 4.11 1.856 4.11 4.16 0 2.305-1.833 4.16-4.11 4.16s-4.112-1.855-4.112-4.16c0-2.304 1.835-4.16 4.112-4.16z"/>
                        </svg>                    </i>
					<p>Insanely Fast <br> Internet</p>
				</div>
                				<div class="benefitItem">
					<i class="benefitIcon_6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="58" viewBox="0 0 62 58">
                            <path fill="#2ebd7f" d="M53.725 47.404H48.06v2.328c0 .697-.577 1.268-1.272 1.268-.705 0-1.28-.57-1.28-1.268v-2.328H15.65v2.328c0 .697-.573 1.268-1.276 1.268-.704 0-1.278-.57-1.278-1.268v-2.328H8.283c-3.45 0-6.273-2.795-6.273-6.21V26.87c0-3.415 2.823-6.21 6.273-6.21h45.445c3.45 0 6.272 2.795 6.272 6.21v14.323c0 3.416-2.824 6.21-6.275 6.21zM57.44 26.87c0-2.028-1.667-3.677-3.718-3.677H8.275c-2.05 0-3.717 1.646-3.717 3.678v14.323c0 2.027 1.666 3.68 3.717 3.68h45.447c2.05 0 3.717-1.65 3.717-3.68V26.87zM45.98 41.655c-4.21 0-7.624-3.377-7.624-7.545 0-4.166 3.414-7.543 7.623-7.543 4.21 0 7.622 3.377 7.622 7.542 0 4.167-3.413 7.544-7.623 7.544zm0-12.552c-2.794 0-5.064 2.248-5.064 5.01 0 2.77 2.27 5.017 5.063 5.017 2.792 0 5.062-2.248 5.062-5.02 0-2.76-2.27-5.008-5.063-5.008zM19.19 33.32h-7.78c-1.84 0-3.333-1.48-3.333-3.297 0-1.818 1.493-3.297 3.332-3.297h7.78c1.84 0 3.333 1.48 3.333 3.297 0 1.82-1.494 3.297-3.332 3.297zm0-4.06h-7.78c-.422 0-.773.35-.773.764 0 .416.354.77.772.77h7.78c.42 0 .772-.353.772-.77.004-.415-.35-.765-.77-.765zm-7.835 6.01h7.783c1.836 0 3.332 1.48 3.332 3.298 0 1.813-1.496 3.298-3.332 3.298h-7.783c-1.838 0-3.332-1.48-3.332-3.298 0-1.817 1.497-3.297 3.332-3.297zm0 4.064h7.783c.418 0 .77-.352.77-.766 0-.416-.353-.77-.77-.77h-7.783c-.42 0-.772.353-.772.77 0 .414.355.766.772.766zm42.788-22.41c-.498.494-1.313.494-1.81 0-.5-.492-.5-1.297 0-1.79l5.483-5.427c.498-.492 1.313-.492 1.81 0 .497.492.497 1.298 0 1.79l-5.483 5.427zm-7.31.282c-.705 0-1.278-.57-1.278-1.267V8.264c0-.697.573-1.27 1.278-1.27.703 0 1.278.562 1.278 1.27v7.674c0 .697-.574 1.266-1.277 1.266zm-7.705-.388l-5.483-5.426c-.498-.492-.498-1.305 0-1.79.496-.493 1.313-.493 1.813 0l5.48 5.425c.497.494.497 1.3 0 1.79-.5.494-1.312.494-1.81 0z"/>
                        </svg>                    </i>
					<p>HD Projectors</p>
				</div>
                				<div class="benefitItem">
					<i class="benefitIcon_7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="58" viewBox="0 0 62 58">
                            <path fill="#2ebd7f" d="M52.84 33.338h-.04c-.055 0-.12 0-.176-.008l-9.328 16.732c-.353.646-.952 1.108-1.67 1.326-.258.065-.522.104-.785.104-.463 0-.928-.117-1.344-.354l-3.096-1.68c-1.354-.735-1.854-2.415-1.104-3.75l2.063-3.702H4c-1.982 0-4-1.988-4-3.945V9.65c0-1.957 2.018-3.155 4-3.155h41.602c1.983 0 3.198 1.198 3.198 3.155v6.035c.128-.065.265-.136.4-.188 1.103-.457 2.32-.718 3.6-.718 5.072 0 9.2 4.27 9.2 9.27 0 5.003-4.104 8.5-9.16 9.288zM46.4 9.658c0-.656-.135-.79-.8-.79H4c-.664 0-1.602.134-1.602.79v28.416c0 .654.938 1.578 1.602 1.578h34.68l.217-.396 5.998-10.758c-.824-1.357-1.295-2.943-1.295-4.635 0-2.56 1.07-4.86 2.8-6.514V9.657h-.002zm6.403 7.498c-1.32 0-2.56.37-3.6 1.018-.136.088-.272.174-.4.27-.83.604-1.52 1.373-2 2.273-.152.283-.286.576-.4.883-.256.71-.396 1.47-.396 2.27 0 .72.108 1.407.328 2.064l.067-.13v.324c.103.312.24.604.395.896.26.478.568.927.932 1.315L46.8 30l-.278.498-.122.213-4.758 8.55-.218.396-1.104 1.973-.217.394-2.703 4.854c-.104.188-.025.427.16.537l3.104 1.674c.11.062.23.047.304.02.063-.013.168-.06.24-.18l4.062-7.302 1.248-2.248 2.28-4.08.398-.72 1.01-1.815.095-.166 1.193-2.147c.424.088.854.127 1.305.127.496 0 .983-.058 1.448-.15 3.055-.663 5.352-3.348 5.352-6.56.004-3.706-3.046-6.714-6.797-6.714zM38.233 36.43h-16c-.66 0-1.198-.533-1.198-1.184 0-.652.54-1.186 1.198-1.186h16c.66 0 1.2.526 1.2 1.186.002.65-.54 1.184-1.2 1.184zm-21.032.066H8.4c-.66 0-1.2-.533-1.2-1.186 0-.65.54-1.188 1.2-1.188h8.8c.66 0 1.198.532 1.198 1.188 0 .653-.54 1.186-1.198 1.186zm-.8 8.682h16.8c.66 0 1.2.533 1.2 1.184 0 .652-.54 1.188-1.2 1.188H16.4c-.66 0-1.2-.526-1.2-1.188 0-.65.54-1.184 1.2-1.184z"/>
                        </svg>                    </i>
					<p>Conference <br> Rooms</p>
				</div>
                				<div class="benefitItem">
					<i class="benefitIcon_8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="58" viewBox="0 0 62 58">
                            <path fill="#2ebd7f" d="M21.52 58l-6.53-6.532c.643-.48.8-.557 1.08-.848.208-.205.454-.495.648-.77.082-.105.15-.218.205-.318.92-1.646.664-3.763-.735-5.163-1.396-1.4-3.574-1.6-5.213-.69-.084.052-.18.103-.263.163-.274.186-.547.412-.764.63-.29.29-.382.458-.86 1.093L2 38.48 40.48 0l7.02 7.02c-.21.147-.417.32-.605.508-.29.29-.522.61-.72.955-.067.123-.13.252-.187.374-.69 1.584-.39 3.514.904 4.808s3.224 1.595 4.81.903c.122-.057.25-.12.372-.186.346-.19.664-.428.95-.718.19-.19.364-.396.512-.61L60 19.52 21.52 58zm31.933-41.682c-2.583 1.578-6 1.248-8.232-.98-2.228-2.232-2.56-5.65-.975-8.228L40.48 3.345 13.154 30.67l1.394 1.397c.464.463.464 1.21 0 1.672-.463.464-1.21.464-1.673 0l-1.395-1.394-6.135 6.133 3.657 3.665c.108-.09.224-.174.317-.24 2.603-1.828 6.194-1.54 8.524.793 2.332 2.328 2.55 5.994.73 8.604-.057.078-.117.16-.186.24l3.11 3.11 6.136-6.134-.838-.836c-.465-.463-.465-1.21 0-1.674.465-.462 1.213-.462 1.676 0l.836.838 27.326-27.328-3.18-3.2zM31.277 40.432c-1.39 1.39-3.63 1.39-5.02 0l-6.69-6.69c-1.39-1.388-1.39-3.632 0-5.02l13.94-13.942c1.392-1.39 3.634-1.39 5.02 0l6.688 6.69c1.393 1.39 1.393 3.632 0 5.02L31.277 40.432zM43.793 23.39l-6.69-6.692c-.464-.463-1.178-.987-1.64-.524L21.52 30.114c-.463.464-.496 1.735-.033 2.2l6.69 6.69c.46.457 1.244-.062 1.708-.524l13.942-13.94c.463-.465.424-.694-.034-1.15zM19.566 38.76c-.463.463-1.21.463-1.674 0l-1.115-1.115c-.463-.465-.463-1.21 0-1.674.464-.462 1.21-.462 1.675 0l1.114 1.116c.463.462.463 1.21 0 1.674zm3.905 2.23l1.117 1.115c.462.463.462 1.21 0 1.672-.463.463-1.21.463-1.674 0l-1.115-1.114c-.463-.464-.463-1.212 0-1.673.464-.463 1.21-.463 1.673 0z"/>
                        </svg>                    </i>
					<p>Group Events</p>
				</div>
                			</div>
		</div>
        <!-- end benefits -->
        <!-- start section price table -->
         <section class="price text-center">
            <div class="container">
                <h1> Our amazing prices </h1>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-offset="200">
                            <h2 class="primary">one Day</h2>
                            <p class="center-block"> 1$</p>
                            <ul>

                                <li> Full day access</li>
                                <li>Free internet access</li>
                                 <li>First Hot Drink For Free</li>
                                <li> </li>
                              
                            </ul>
                            <a href="paypal/paypal.php" class="btn btn-primary">Join Now!</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInDown" data-wow-duration="2s" data-wow-delay="0s" data-wow-offset="200">
                            <h2 class="text-success">One Month</h2>
                            <p class="center-block"> 20$</p>
                            <ul>

                                <li> Open Shared disk</li>
                                <li>Free Events</li>
                                <li>Locker 100 EG</li>
                                <li>Discount on our workshops</li>
                               
                            </ul>
                            <a href="paypal/paypal.php" class="btn btn-success">Join Now!</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-offset="200">
                         <h2 class="text-info">6 months</h2>
                            <p class="center-block"> 50$</p>
                            <ul>
                               
                                <li> Dedicated Shared disk</li>
                                <li>Quarter (3Months) 2100 EG</li>
                                <li>Free Events</li>
                                <li> </li>
                                
                            </ul>
                            <a href="paypal/paypal.php" class="btn btn-info">Join Now!</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInDown" data-wow-duration="2s" data-wow-delay="0s" data-wow-offset="200">
                            <h2 class="text-danger"> one Year</h2>
                            <p class="center-block"> 100$</p>
                            <ul>

                                <li>Private Room</li>
                                <li>Discount on our workshops</li>
                                <li>Free Events</li>
                                <li>16 hours per day</li>
                            </ul>
                            <a href="paypal/paypal.php" class="btn btn-danger">Join Now!</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!-- end section price table -->
        <!-- sttart section loading-->
<!--
        <section class="overlay">
             <div class="spinner">
              <div class="dot1"></div>
              <div class="dot2"></div>
            </div>
        </section>
-->
        <!-- end section loading-->
        <!-- start section scroll-->
        <div id="scroll">
            <i class="fa fa-chevron-up fa-3x  hvr-icon-up"></i>
        </div>
        <!-- end section scroll-->
    <?php 
        include 'footer.php';
    ?>