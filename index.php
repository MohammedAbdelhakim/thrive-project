<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets1/img/54.jpg">
    <title>Thrive</title>
    <!-- for attech bootstrap-->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets1/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="assets1/css/i.css" />
</head>
<body>

    

    <!--start our navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: red;" href="#">Thrive</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#features">Features</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#review">Reviews</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#service">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#team">Team</a>
            </li>
            

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="reg.php">Sign Up</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.php">Sign In</a></li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
      <!-- end navpar-->

      <!--start carousel [silder]-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- start ...-->
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <!-- end ...-->

        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="4000">
            <img src="assets1/img/50.jpg" class="d-block w-100" alt="...">
          </div>

          <div class="carousel-item" data-interval="4000">
            <img src="assets1/img/51.jpg" class="d-block w-100" alt="...">
          </div>

          <div class="carousel-item" data-interval="5000">
            <img src="assets1/img/52.jpg" class="d-block w-100" alt="...">
          </div>

          <div class="carousel-item" data-interval="5000">
            <img src="assets1/img/53.jpg" class="d-block w-100" alt="...">
          </div>

        </div>

        <!-- start controls-->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
         <!-- end controls-->

      </div>
      <!--end carousel [silder]-->
      <!-- start section-->
      <section class="about text-center">
        <div class="container">
          <h1 class="d-xs-none">Welcome to <span> Thrive </span> a software company</h1>
        </div>
      </section>
      <!-- end section-->
      <!-- start section feature-->
      <section class="features text-center" id="features">
      <div class="container"> 
        <h1>Our Features</h1>
        <div class="row">
          <div class="col-lg-3 col-md-6"> 
            <div class="feat">
              <i class="fas fa-tachometer-alt"></i>
                <h4>Speed</h4>
                <p>We built this Website Speed Test to help you analyze your website load speed. The test is designed to help make your site faster by identifying what about a webpage is fast, slow, too big, and so on. </p>
            </div>
          </div>  
          
          <div class="col-lg-3 col-md-6"> 
            <div class="feat">
              <i class="fas fa-user-friends"></i>
                <h4>Professional Team</h4>
                <p>your strongest asset, your team. It is a great way to put faces to names and build a connection, especially in today's environment where customers prefer a more personalized experience. It's time to create an attention-grabbing page to establish company identity.</p>
            </div>
          </div>  

          <div class="col-lg-3 col-md-6"> 
            <div class="feat">
              <i class="fas fa-dollar-sign"></i>
                <h4>Offers</h4>
                <p>A business website can cost hundreds of thousands of dollars. Web design prices for business websites, while annual website maintenance can cost $400 to $60,000. These prices, however, do depend on the size and features of your site</p>
            </div>
          </div>  

          <div class="col-lg-3 col-md-6"> 
            <div class="feat">
              <i class="fas fa-lock"></i>
                <h4>privacy</h4>
                <p>The Internet Privacy Internet privacy entails securing personal data that is published on the internet. This kind of privacy encompasses safeguarding of sensitive and private information, data, preferences, and communications.</p>
            </div>
          </div>  

        </div>
      </div>
    </section>
      <!-- end section feature-->

      <div class="space"></div>
       <!-- start section testimonials-->
    <section class="testimonals text-center" id="review">   
       <div class="container">
          <h1>What Our Clients Say</h1>

          <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="lead">We have been very happy with our new website! It looks professional and very easy to navigate. Our experience with the customer service at Thrive has been great. They handle things very efficiently and are available for any questions we have. They also keep us updated on monthly reports so we know how our site is doing. I would recommend Thrive to anyone looking for website design or SEO work!</p>
                    <span>Mr.Wyat</span>
                </div>
          
                <div class="carousel-item">
                      <p class="lead">Thrive Internet Marketing excels at turning your website dreams into reality. We are so proud of the work they’ve done for us that we have already recommended them to many of our partners. The Thrive team is heads and shoulders above their competition, and we are very thankful that they call Downtown Arlington home.</p>
                      <span>Mr.Smith</span>
                </div>
          
                <div class="carousel-item">
                      <p class="lead">Compared to the other companies we have used in the past, Thrive has been far and above the best in every area. While building our new web site, the customer service has been prompt and straightforward and the actual services are well documented and logical to our needs. We are very excited to be working with Matt and the rest of the team at Thrive.</p>
                      <span>Ms.May</span>
                </div>
                    
                <div class="carousel-item">
                      <p class="lead">I went to Thrive with a basic “feel” I wanted in a website. They helped flush out the visual layout and content. Thrive’s services are bargain when you weigh the cost versus the product you receive. I will be using them again in future endeavors. Thanks again!</p>
                      <span>Mr.Mohammed</span>
                </div>
              </div> 
              <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active">
                  <img src="assets1/img/18.jpg">
                </li>
                <li data-target="#carouselIndicators" data-slide-to="1">
                  <img src="assets1/img/16.jpg">
                </li>
                <li data-target="#carouselIndicators" data-slide-to="2">
                  <img src="assets1/img/19.jpg">
                </li>
                <li data-target="#carouselIndicators" data-slide-to="3">
                  <img src="assets1/img/17.jpg">
                </li>
              </ol>
          </div>
       </div>
    </section>  
    <!--end secation testimanials--> 

    <!--start secation price table-->
    <section class="price" id="service">
      <div class="container">
        <h1>Our Amazing Price</h1>

        <div class="t">
          <div class="content">
            <div class="price_box">
              <h2 class="text-primary">Hosting</h2>
              
              <ul class="list-unstyled">
                <li class="active">$40</li>
                <li>Space: 50GB</li>
                <li>Email: 20</li>
                <li>Ips: 2IP</li>
                <li>Database: 10</li>
              </ul>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>

          <div class="content">
            <div class="price_box">
              <h2 class="text-success">Vps</h2>
              <ul class="list-unstyled">
                <li class="active">$50</li>
                <li>Space: 50GB</li>
                <li>Email: 40</li>
                <li>Ips: 4IP</li>
                <li>Database: 15</li>
              </ul>
              <a href="#" class="btn btn-success">Order Now</a>
            </div>
          </div>

          <div class="content">
            <div class="price_box">
              <h2 class="text-info">Dedicated</h2>
              <ul class="list-unstyled">
                <li class="active">$60</li>
                <li>Space: 70GB</li>
                <li>Email: 10</li>
                <li>Ips: 6IP</li>
                <li>Database: 20</li>
              </ul>
              <a href="#" class="btn btn-info">Order Now</a>
            </div>
          </div>

          <div class="content">
            <div class="price_box">
              <h2 class="text-danger">Cloud</h2>
              <ul class="list-unstyled">
                <li class="active">$90</li>
                <li>Space: 100GB</li>
                <li>Email: 25</li>
                <li>Ips: 9IP</li>
                <li>Database: 40</li>
              </ul>
              <a href="#" class="btn btn-danger">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end secation price table-->

    <!--start secation our team-->
    <section class="our_team text-center" id="team">
      <div class="team">
        <div class="container"> 
          <h1>Meet Our Awesome Team </h1>
          <div class="row">
            
            <div class="col-lg-3 col-md-6  col-sm-6">
              <div class="person">
                <img class="rounded-circle"  src="assets1/img/21.jpg">
                <h3>Bill Gates</h3>
                <i class="fab fa-google-plus-g"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
              </div>
            </div>

            <div class="col-lg-3 col-md-6  col-sm-6">
              <div class="person">
                <img class="rounded-circle" src="assets1/img/22.jpg">
                <h3>Steve Jobs</h3>
                <i class="fab fa-google-plus-g"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="person">
                <img class="rounded-circle" src="assets1/img/23.jpg">
                <h3>Jeff Bezos</h3>
                <i class="fab fa-google-plus-g"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="person">
                <img class="rounded-circle" src="assets1/img/24.jpg">
                <h3>Mark Elliot </h3>
                <i class="fab fa-google-plus-g"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </section>
    <!--end secation  our team-->

    <!--start secation  subscribe-->
    <section class="subscribe text-center">
      <div class="container">
        <h1>Keep In Touch</h1>
        <p class="lead">Sign Up For Newsletters</p>
        <form class="form-inline">
          <input class="form-control" type="text" placeholder="Write Youer Email">
          <button class="btn btn-danger"><i class="fa fa-edit"></i> Subscribe</button>
        </form>
      </div>
    </section>
    <!--end secation    subscribe-->

     <!--start secation  stat-->
     <section class="stat text-center">
      <div class="data">
        <div class="container">
          <h1>Our Main Statistics</h1>
          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="stats">
                <i class="fas fa-users fa-5x"></i>
                <p>9,550</p>
                <span>Satisfied User</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="stats">
                <i class="fas fa-comments fa-5x"></i>
                <p>38,900</p>
                <span>Posted Comments</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="stats">
                <i class="fas fa-suitcase fa-5x"></i>
                <p>3,000</p>
                <span>Project Done</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="stats">
                <i class="fas fa-tools fa-5x"></i>
                <p>95,080</p>
                <span>Tickets Archieved</span>
              </div>
            </div>
          
          </div>
        </div>
      </div>  
      
     </section>
     <!--end secation  stat-->

     <!--start secation  skill -->
     <section class="our-skill">
       <div class="container">
         <h1 class="text-center">Our Skills</h1>
         <div class="row">
         <!--Start Progress skill-->  
          <div class="col-md-5">
           <div class="skill_progress">
            <div class="progress">
              <div class="progress-bar  bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                Html5/Css
              </div>
            </div><br>

            <div class="progress">
              <div class="progress-bar  bg-danger " role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                PHP/MYSQL
              </div>
            </div><br>

            <div class="progress">
              <div class="progress-bar bg-info " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                Javascript/JQuery
              </div>
            </div><br>

            <div class="progress">
              <div class="progress-bar  bg-warning " role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                Wordpress
              </div>
            </div>
           </div>
          </div> 
          <!--Start Progress skill-->  

           <!--Start team info-->  
           <div class="col-md-6 offset-md-1">
           <div class="info">
             <div class="team_info">
               <h3>About Team</h3>
               <p class="lead">Efficiency teams get things done more efficiently than lone individuals.
                Pooling skills a good team will let everyone use their individual skills to the full.
                Social working together is fun for social animals like humans.
                Learning we can learn from other members of the team.
                Leadership: teamwork is a context for leadership.</p>
               <button type="button" class="btn btn-primary">Talk With Professional</button>
              </div>
           </div>
          </div> 
          <!--end team info--> 
        </div>
       </div>
     </section>
     <!--end   secation  skill -->

     <!--start secation contact us--> 
     <section class="contact-us text-center"  >
       <div class="field">
         <div class="container text-center">
           
          
              <i class="fas fa-headphones fa-4x" style="color: white;"></i>
              <h3>Tell Us What You Fell</h3>
              <p class="lead">Feel Free To Contact Us Anytime</p>
              <form> 
              <div class="row">
                
                  <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Your Message"></textarea>
                      <button type="button" class="btn btn-primary form-control">Contact US</button>
                     </div> 
                  </div>

              </div>

              </form>
         </div>
       </div>

     </section>
     <!--end secation contact us--> 

     


      <!--start secation footer-->

      <section class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <h3>Sitemap</h3>
              <ul class="list-unstyled three-coulmns">
                <li>Home</li>
                <li>About</li>
                <li>Company</li>
                <li>Code</li>
                <li>Design</li>
                <li>Host</li>
                <li>Solution</li>
                <li>Sitemap</li>
                <li>Contact</li>
              </ul>

              <ul class="list-unstyled two-column" >
                <li> <img src="assets1/img/31.png"> </li>
                <li> <img src="assets1/img/33.png"> </li>
                <li> <img src="assets1/img/34.png"> </li>
                <li> <img src="assets1/img/35.png"> </li>
              </ul>

            </div>
            <div class="col-lg-4 col-md-6 artical">
              <h3>Latest Articles</h3>
              <div class="media">
                <img src="assets1/img/36.png" class="mr-3">
                <div class="media-body">
                  <h5 class="mt-0">Programming</h5>
                  <p>This Is Some Text ABout Programming Describe The Media Of Bootstrap</p>
                </div>
              </div>

              <div class="media">
                <img src="assets1/img/37.png" class="mr-3">
                <div class="media-body">
                  <h5 class="mt-0">Codeing</h5>
                  <p>This Is Some Text ABout Programming Describe The Media Of Bootstrap</p>
                </div>
              </div>

              <div class="media">
                <img src="assets1/img/38.jpg" class="mr-3">
                <div class="media-body">
                  <h5 class="mt-0">Web Desgin</h5>
                  <p>This Is Some Text ABout Programming Describe The Media Of Bootstrap</p>
                </div>
              </div>
            </div>


            <div class="col-lg-4 col-md-12 our-work">
              <h3>Our Awesome Work</h3>
              <img class="img-thumbnail" src="assets1/img/39.jpg">
              <img class="img-thumbnail" src="assets1/img/40.jpg">
              <img class="img-thumbnail" src="assets1/img/41.jpg">
              <img class="img-thumbnail" src="assets1/img/43.jpg">
            </div>
          </div>
        </div>
        <div class="copyright text-center">
            copyright &copy; 2021 <span>Thrive</span> .Inc
        </div>

      </section>
       <!--end secation footer-->




    
    <script src="assets1/js/jquery-3.5.1.min.js"></script>
    <script src="assets1/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>