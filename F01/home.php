<?php
session_start();

if (!isset($_SESSION['email'])) {
    header(header: "Location: index.php"); 
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Olympic</title>


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">
          <div class="lang_box dropdown">
            <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
              <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/flag-uk.png" alt="flag" class=" " title="United Kingdom"> <i class="fa fa-angle-down " aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu ">
              <a href="#" class="dropdown-item">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/flag-france.png" class="" alt="flag">
              </a>
            </div>
            <span>
              Olympic Game
            </span>
          </div>
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +41 21 621 6111
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : olympic@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="home.php">
              <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/logo.png" alt="">
            </a>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="organization.php">Organization</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sports.php">Sports</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="committee.php">Committee</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php"> Logout</a>
                </li>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
              <div class="quote_btn-container">
                <a href="" class="quote_btn">
                  Get A Quote
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Olympic Games 2026!<br>
                      World's only truly global, multi-sport<br>
                      
                    </h1>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Celebrating unity, excellence,<br>
                      and the spirit of the <br>
                      Olympics worldwide. 
                    </h1>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Milano Cortina 2026 <br>
                      6 February - 22 February<br>
                      
                    </h1>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Olympics <br>
                      world comes to compete <br>
                      feel inspired, and be together.
                    </h1>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Youth  <br>
                      Olympic Games <br>
                      
                    </h1>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
          <li data-target="#customCarousel1" data-slide-to="3"></li>
          <li data-target="#customCarousel1" data-slide-to="4"></li>
        </ol>
      </div>

    </section>
  </div>





  <section class="organization_section layout_padding">
    <div class="organization_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
            Organization
          </h2>
          <p>
            The Olympic Games, organized by the International Olympic Committee (IOC), is a global multi-sport event promoting unity and fair competition among athletes worldwide.
          </p>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  IOC Sessions
                </h5>
                <p>
                  The IOC Session is the general meeting of the members of the International Olympic Committee (IOC).
                  It is the supreme organ of the IOC. The IOC Session adopts, modifies and interprets the Olympic Charter and its decisions are final.
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  IOC Members
                </h5>
                <p>
                  The IOC members, natural persons, are representatives of the IOC in their respective countries, 
                  and not their country's delegate within the IOC. 
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  IOC Executive Board
                </h5>
                <p>
                  The Executive Board, founded in 1921, consists of the International Olympic Committee (IOC) President, 
                  four Vice-Presidents and ten other members.
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/s4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  IOC Commissions
                </h5>
                <p>
                  IOC commissions may be created for the purpose of advising the Session,
                  the IOC Executive Board or the President as the case may be.
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 
  <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                OLYMPIC GAMES HISTORY
              </h2>
            </div>
            <p>
              The modern Olympic Games are the world's leading international sporting events. 
              They feature summer and winter sports competitions in which thousands of athletes 
              from around the world participate in a variety of competitions. The Olympic Games 
              are considered the world's foremost sports competition, with more than 200 teams, 
              representing sovereign states and territories, participating. The Olympics are staged 
              every four years. Since 1994, they have alternated between the Summer and Winter Olympics
               every two years during the four-year Olympiad.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/about-img.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="sports_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          SPORTS
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="filter_box">
          <h6>
            Category Sports
          </h6>
          <nav class="owl-filter-bar">
            <a href="#" class="item active" data-owl-filter="*">All</a>
            <a href="#" class="item" data-owl-filter=".archery">Archery</a>
            <a href="#" class="item" data-owl-filter=".boxing">Boxing </a>
            <a href="#" class="item" data-owl-filter=".fencing">Fencing </a>
            <a href="#" class="item" data-owl-filter=".tennis">Tennis </a>
            <a href="#" class="item" data-owl-filter=".skateboarding">Skateboarding </a>
          </nav>
        </div>

        <div class="owl-carousel sports_carousel">
          <div class="item archery">
            <div class="box">
              <div class="img-box">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/project1.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Archery
                </h5>
                <p>
                  Athletes use bows to shoot arrows at a target, testing precision and focus.
                </p>
              </div>
            </div>
          </div>
          <div class="item boxing">
            <div class="box">
              <div class="img-box">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/project2.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Boxing
                </h5>
                <p>
                  A combat sport where competitors aim to outscore or knock out their opponents.
                </p>
              </div>
            </div>
          </div>
          <div class="item fencing">
            <div class="box">
              <div class="img-box">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/project3.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Fencing
                </h5>
                <p>
                  A fast-paced duel with swords, emphasizing strategy and agility.
                </p>
              </div>
            </div>
          </div>
          <div class="item tennis">
            <div class="box">
              <div class="img-box">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/project4.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Tennis
                </h5>
                <p>
                  A racquet sport played on various surfaces, showcasing speed and skill.
                </p>
              </div>
            </div>
          </div>
          <div class="item skateboarding">
            <div class="box">
              <div class="img-box">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/project5.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Skateboarding
                </h5>
                <p>
                  Athletes perform tricks and maneuvers on skateboards, combining creativity and balance.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="committee_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          COMMITTEE
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/president.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="committee_info">
                      <div class="committee_name">
                        <h5>
                          Thomas Bach
                        </h5>
                        <h6>
                          IOC President
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      The Olympic Games are more than just a sporting event; they are a celebration of humanity’s 
                      shared dreams and aspirations. By bringing together athletes from every corner of the globe, 
                      the Games demonstrate the unifying power of sport, inspiring generations to strive for excellence 
                      while fostering peace, understanding, and mutual respect among nations.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/president1.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="committee_info">
                      <div class="committee_name">
                        <h5>
                          Sebastian Coe
                        </h5>
                        <h6>
                          World Athletics President
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      The Olympics embody the very essence of human potential. They showcase 
                      not only the extraordinary achievements of athletes but also their dedication,
                       resilience, and unwavering commitment to their craft. The Games are a platform
                        for celebrating diversity and promoting the universal values of fair play, perseverance,
                         and the pursuit of excellence.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/vpresident.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="committee_info">
                      <div class="committee_name">
                        <h5>
                          Anita DeFrantz
                        </h5>
                        <h6>
                          IOC Vice President
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      At the heart of the Olympic Games are the timeless values of excellence, 
                      friendship, and respect. These principles guide us in creating a global stage 
                      where athletes and communities can come together to share their stories,
                       inspire hope, and celebrate the enduring power of sports to unite and uplift 
                       the human spirit.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
      </ol>
    </div>
  </section>

  <section class="olympic_movement_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Olympic Movement
        </h2>
      </div>
      <div class="olympic_movement_container">
        <div class="box">
          <div class="img-box">
            <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              National Olympic Committees
            </h5>
            <p>
              The mission of the NOCs is to develop, promote and protect the Olympic Movement 
              in their respective countries, in accordance with the Olympic Charter. 
              NOCs encourage the development of high performance sport as well as sport for all, 
              while also providing training of sports administrators based on the Fundament Principles of Olympism.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              International Sports Federations
            </h5>
            <p>
              The International Sports Federations are responsible for establishing 
              and enforcing the rules concerning the practice of their respective sports 
              and to ensure their application. The role of the IFs is to also oversee the 
              development of their sports worldwide while acting in accordance with the Olympic 
              Charter, including the adaption and implementation of the World Anti-Doping Code.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Organising Committees for the Olympic Games
            </h5>
            <p>
              The organisation of the Olympic Games is entrusted by the
               International Olympic Committee to the National Olympic Committee
                of the country of the host city as well as to the host city itself. 
                The NOC forms, for that purpose, an Organising Committee that, from the 
                time it is constituted, communicates directly with the IOC, from which it 
                receives instructions.
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>


  <section class="contact_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="col-lg-4 col-md-5 offset-md-1">
        <div class="heading_container">
          <h2>
            Contact Us
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <section class="info_section ">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +41 21 621 6111
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : olympic@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location <br>
            Maison Olympique 1007 Lausanne Switzerland
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row info_main_row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="home.php">Home <span class="sr-only">(current)</span></a>
                <a class="" href="organization.php">Organization</a>
                <a class="" href="about.php"> About</a>
                <a class="" href="sports.php">Sports</a>
                <a class="" href="committee.php">Committee</a>
                <a class="" href="contact.php">Contact</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                OLYMPIC FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="https://lh3.googleusercontent.com/2_cfntyIVi_xtzCWdfYi33Iu9dRGFqvEkFJO4_MuLixQJzv7RVKxfVyEiWXa-p-lLgpFpXz3V-W0-p7UWEyhjBE6x97XiO30_nM=s750" alt="">
                </div>
                <div class="img-box">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROHlqVBl8EhLCIEfvb_4OnQgBCNUuWHCumqg&s" alt="">
                </div>
                <div class="img-box">
                  <img src="https://i.insider.com/668abe361aace5b3ada4e10c?width=700" alt="">
                </div>
                <div class="img-box">
                  <img src="https://cdn.britannica.com/44/190944-131-7D082864/Silhouette-hand-sport-torch-flag-rings-Olympic-February-3-2015.jpg?w=840&h=460&c=crop" alt="">
                </div>
                <div class="img-box">
                  <img src="https://www.usatoday.com/gcdn/authoring/images/smg/2024/08/01/SMGW/74600328007-USP-Olympics_-Gymnastics-1_1.jpeg?crop=7599,4276,x0,y552&width=660&height=371&format=pjpg&auto=webp" alt="">
                </div>
                <div class="img-box">
                  <img src="https://www.harvardclub.fr/wp-content/uploads/2024/04/olympics.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-md-2">
            <div class="info_logo">
              <a href="">
                <img src="https://raw.githubusercontent.com/kylene123/images/refs/heads/main/images/logo.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://php.design/">Olympic Game</a>
      </p>
    </div>
  </footer>
  
  <script src="js/jquery-3.4.1.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
 
  <script src="js/bootstrap.js"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>

  <script src="js/custom.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>


</body>

</html>