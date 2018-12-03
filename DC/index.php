

<?php
	session_start();
	include"head.php";
	
?>

  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">DIU CANTEEN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
            <?php
				
				if(isset($_SESSION['USER_SESSION'])){
						echo '
						<p>'.$_SESSION['USER_FULLNAME'].'</p>
						<li class="nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
							
						';
					}
					else{echo '<li class="nav-item"><a href="login.php" class="nav-link">Log in</a></li>';}
			?>
			
            
			
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Welcome To DIU Canteen</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">Don't Waste Time,Pre-Book Item & Take It </h2>    
            <p><a href="order.php" target="_blank" class="btn btn-outline-white btn-lg site-animate">Order Now</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>We are not only about the food. We are live in your soul and we are always stay in your touch. We make your every moment joyful & try to give this service in a short time. We are the one that only provide you best service.</p>

            <p class="mb-4">So,enjoying food with beloved world and say with us “The flags are flying. The balloons are ready for release. It's a great day, one we've been planning and waiting for. I'm sure you'll concure.</p>
            
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/about_img_1.jpg" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

    <section class="site-section bg-light" id="section-offer">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h4 class="site-sub-title">Our Offers</h4>
            <h2 class="display-4">Our Offer This Winter</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel site-owl">

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_1.jpg"  class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">BDT.20.00</h5>
                    <h5 class="mt-0 h4">Beef with Sausage</h5>
                    <p class="mb-4">Hungry. Time up. One food solution thousand.</p>

                    
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_2.jpg"  class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">BDT.30.00</h5>
                    <h5 class="mt-0 h4">Egg with Garlic </h5>
                    <p class="mb-4">Hungry. Time up. One food solution thousand.</p>

                    
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_3.jpg"  class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">BDT.15.00</h5>
                    <h5 class="mt-0 h4">Beef Ribs</h5>
                    <p class="mb-4">Hungry. Time up. One food solution thousand.</p>

                    
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_1.jpg"  class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">BDT 20.00</h5>
                    <h5 class="mt-0 h4">Beef with Sauce</h5>
                    <p class="mb-4">Hungry. Time up. One food solution thousand.</p>

                    
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_2.jpg" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">BDT.15.00</h5>
                    <h5 class="mt-0 h4">Fresh Salmon Fish</h5>
                    <p class="mb-4">Hungry. Time up. One food solution thousand.</p>

                    
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_3.jpg"  class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">BDT. 5.00</h5>
                    <h5 class="mt-0 h4">Beef Ribs</h5>
                    <p class="mb-4">Hungry. Time up. One food solution thousand.</p>

                    
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_1.jpg" >
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">BDT.25.00</h5>
                    <h5 class="mt-0 h4">Beef with Sauce</h5>
                    <p class="mb-4">Hungry. Time up. One food solution thousand of problems.</p>

                    
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_2.jpg" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">BDT.40.00</h5>
                    <h5 class="mt-0 h4">Fresh Salmon Fish</h5>
                    <p class="mb-4">Hungry. Time up. One food solution thousand of problems.</p>

                    
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/offer_3.jpg" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">BDT.40.00</h5>
                    <h5 class="mt-0 h4">Beef Ribs</h5>
                    <p class="mb-4">Hungry. Time up. One food solution thousandof solutions.</p>

                    
                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Delicious Item</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Hungry.Don't waste time.come & take.thousand problems
                  one food can solution.</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-snaks-tab" data-toggle="pill" href="#pills-snaks" role="tab" aria-controls="pills-snaks" aria-selected="false">Snaks</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu1.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Bread</h5>
                        <p>Hurry Up to take Breakfast. Two-piece sandwich bread with an egg omelet. </p>
                        <h6 class="text-primary menu-price">BDT.15.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu2.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Samosa</h5>
                        <p>Gossip going on so why stop mouth.  1 is to 4 samosas is here.</p>
                        <h6 class="text-primary menu-price">BDT.6.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu3.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Burger</h5>
                        <p>Like cheese with mozzarella. Try that tow combination in one.</p>
                        <h6 class="text-primary menu-price">BDT.40.00</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu4.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Tea/Coffee</h5>
                        <p>Pressure so high. Need fly. One cup tea/cappuccino can blow your mind.</p>
                        <h6 class="text-primary menu-price">BDT.12.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu5.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Nudduls</h5>
                        <p>Hungry. Time up. One food can solution thousandlof problems.</p>
                        <h6 class="text-primary menu-price">BDT.30.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu6.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Bowl Khichuri</h5>
                        <p>Food loving are our tradition. Best khichuri with beef and mutton and chicken you find here.</p>
                        <h6 class="text-primary menu-price">BDT.80.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu6.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Bowl Khichuri</h5>
                        <p>Food loving are our tradition. Best khichuri with beef and mutton and chicken you find here.</p>
                        <h6 class="text-primary menu-price">BDT.80.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu7.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Chicken Masala</h5>
                        <p>Spicy delicious masala with chicken waiting for you. Masala is here, where is chicken lover.</p>
                        <h6 class="text-primary menu-price">BDT.35.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu5.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Chawmeen</h5>
                        <p>Boaring with regular food. Need variation. Why go outside. Twist chawmeen ready for you.</p>
                        <h6 class="text-primary menu-price">BDT.30.00</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu5.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Chawmeen</h5>
                        <p>Boaring with regular food. Need variation. Why go outside. Twist chawmeen ready for you.</p>
                        <h6 class="text-primary menu-price">BDT. 30.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu6.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Bowl khichuri</h5>
                        <p>Food loving are our tradition. Best khichuri with beef and mutton and chicken you find here.</p>
                        <h6 class="text-primary menu-price">BDT.80.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu7.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Chicken Masala</h5>
                        <p>Spicy delicious masala with chicken waiting for you. Masala is here, where is chicken lover.nd texts.</p>
                        <h6 class="text-primary menu-price">BDT 35<.00/h6>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-snaks" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu2.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Samosa</h5>
                        <p>Gossip going on so why stop mouth.  1 is to 4 samosas is here.</p>
                        <h6 class="text-primary menu-price">BDT.6.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu3.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Burger</h5>
                        <p>Like cheese with mozzarella. Try that tow combination in one.</p>
                        <h6 class="text-primary menu-price">BDT.40.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu2.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0"> Samosa</h5>
                        <p>Gossip going on so why stop mouth.  1 is to 4 samosas is here.</p>
                        <h6 class="text-primary menu-price">BDT.6.00</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu4.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Tea/Coffee</h5>
                        <p>Pressure so high. Need fly. One cup tea/cappuccino can blow your mind</p>
                        <h6 class="text-primary menu-price">BDT.12.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu2.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Samosa</h5>
                        <p>Gossip going on so why stop mouth.  1 is to 4 samosas is here.</p>
                        <h6 class="text-primary menu-price">BDT.6.00</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu3.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Burger</h5>
                        <p>Like cheese with mozzarella. Try that tow combination in one.</p>
                        <h6 class="text-primary menu-price">BDT.12.50</h6>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Come on and choice your Item</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/menu2.jpg" class="site-thumbnail image-popup">
              <img src="images/menu2.jpg"  class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu6.jpg" class="site-thumbnail image-popup">
              <img src="images/menu6.jpg"  class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu5.jpg" class="site-thumbnail image-popup">
              <img src="images/menu5.jpg"  class="img-fluid">
            </a>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/menu3.jpg" class="site-thumbnail image-popup">
              <img src="images/menu3.jpg"  class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu4.jpg" class="site-thumbnail image-popup">
              <img src="images/menu4.jpg" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/menu2.jpg" class="site-thumbnail image-popup">
              <img src="images/menu2.jpg" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Get in Touch</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Do you say something,please share it.</p>
              </div>
            </div>
          </div>

          <div class="col-md-7 mb-5 site-animate">
            <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate">
            <p><img src="images/about_img_1.jpg" class="img-fluid"></p>
            <p class="text-black">
              Address: <br> 32,Sukhrabad,Campus, Daffodil International University,Dhanmondi.<br> 1209, Dhaka.<br> <br>
              Phone: <br> 017-62193122 <br> <br>
              Email: <br> <a href="canteen:info@glmai.com">canteen info@gmail.com</a>
            </p>

          </div>
          
        </div>
      </div>
    </section>
    <div id="map">
	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d837.1872438418912!2d90.37747850572563!3d23.753206421204204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada41836bf%3A0x929bfd50f71d1cf0!2sDaffodil+Cafetaria!5e0!3m2!1sen!2sbd!4v1543316827531" width="1519" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	
	</div>
    <!-- END section -->
    

    <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">About Us</h2>
                <p>Time and food that two are important for human being. But ordering food and have it make time waste. So DIU canteen focus on pre-order that provide you delicious food in your perfect time. Your happy smile gives us pleasure. Stay healthy and use your time in proper way. </p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2"> The DIU Canteen</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About Us</a></li>
                    <li><a href="#" class="py-2 d-block">Chefs</a></li>
                    <li><a href="#" class="py-2 d-block">Events</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#section-menu" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#section-menu" class="py-2 d-block">Lunch</a></li>
                    <li><a href="#section-menu" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; 
Copyright &copy; All rights reserved to DIU Canteen </p>
          </div>
        </div>
      </div>
    </footer>

    
    


	
			
	
    <!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	
   <?php
	include"footer.php";
   ?>