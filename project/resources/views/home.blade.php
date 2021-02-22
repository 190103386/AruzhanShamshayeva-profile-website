<!DOCTYPE html>
<html lang="en">

    <head>
      <style type="text/css">
   body {
  background-color: white;
  background-image: url(../img/bg.jpg);
  background-position: left top;
  background-repeat: repeat;
  -webkit-font-smoothing: antialiased;
}

a {
    color: #4f4d47;
  text-decoration: none;
  -webkit-transition: all .35s; 
  transition: all .35s;
}

a:hover {
  color: #dadada; 
  text-decoration: underline;
}


.wrapper {
  background: white;
  margin: 70px auto;
  width: 90%;
  max-width: 1250px;
  overflow: hidden;
  border: 6px solid #eaeaea;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}


img {
  max-width: 100%;  
  height: auto;
}


p {
  font-size: 1.1em;
    font-family: 'Oxygen', sans-serif;  
  color: #333;
  line-height: 1.7em;
  margin-top: 14px;
  margin-bottom: 20px;  
}


h1 {
    font-family: 'Qwigley', Helvetica, Sans-serif;     
    font-size: 2.2em;
  font-weight: 600;
    color: #4f4d47;
  margin-top: 50px;
  margin-bottom: 0;
  text-align: center;
  line-height: 1.7em;
}

h2 {  
    font-family: 'Oxygen', sans-serif;  
    font-size: 1em;
  font-weight: 400;
  color: #898989;
  margin-top: 40px;
  margin-bottom: 34px;
  text-align: center;
  line-height: 1.7em;
  padding-left: 150px;
  padding-right: 150px;
}


h3 {
    font-family: 'Oxygen', sans-serif;  
    font-size: 1em;
  font-weight: 400;
  color: #898989;
  margin-top: 16px;
  margin-bottom: 14px;
  text-align: left;
  line-height: 1.7em;
}


h4 {
  font-family: 'Oxygen', sans-serif;  
    font-size: 1em;
  font-weight: 400;
  color: #898989;
  margin-top: 16px;
  margin-bottom: 14px;
  text-align: left;
  line-height: 1.7em;
}


.heading-inner {
    font-family: 'Qwigley', Helvetica, Sans-serif;     
    font-size: 2.2em;
  font-weight: 600;
    color: #4f4d47;
  margin-top: 16px;
  margin-bottom: 0;
  text-align: center;
  line-height: 1.7em;
}


.hr {
  border-bottom: 2px solid #4f4d47;
  display: block;
  width: 14px;
  margin: auto;
  margin-bottom: 20px;
}


.media, .media-heading {
  font-size: 1em;
}

.media .text-primary {
    color: #4f4d47;
}

.media, p {
  font-size: 1em;
    font-family: 'Oxygen', sans-serif;  
  color: #333;
  line-height: 1.7em;
  margin-top: 14px;
  margin-bottom: 20px;  
}



/* ----------------------------------------------------
   Navigation and logo styles
------------------------------------------------------- */


.brand {
  display: none;
}

.navbar-default .navbar-brand {
    padding: 10px 12px 14px;
    text-align: center;
    font-family: 'Qwigley', Helvetica, Sans-serif;    
  font-size: 2.4em;
    line-height: normal;
    color: #4f4d47;
  text-transform: capitalize;
  margin-top: 38px;
}

.navbar-default .navbar-brand .title {
    display: block;
    padding: 10px 0 45px;
    text-align: center;
    font-size: 0.3em;
    font-weight: 400;
  color: #999999;
    text-transform: lowercase;
  font-family: 'Oxygen', sans-serif;  
}


.navbar-nav {
    text-transform: capitalize;
    font-weight: 400;
}

.navbar-default {
  background-color: transparent;
}

.navbar-toggle {
    margin-top: 30px;
  border: none;
}

.nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
    background-color: #eee;
    border-color: transparent;
}

@media screen and (min-width:768px) {

.brand {
    display: inherit;
    margin: 0;
    padding: 30px 0 14px;
    text-align: center;
    font-family: 'Qwigley', Helvetica, Sans-serif;
  font-size: 4.1em;
    line-height: normal;
    color: #4f4d47;
    text-transform: capitalize;
}


.brand .title {
    display: block;
    padding: 10px 0 27px;
    text-align: center;
    font-size: 0.2em;
    font-weight: 400;
  color: #999999;
    text-transform: lowercase;
  font-family: 'Oxygen', sans-serif;  
}

.navbar {
    border-radius: 0; 
    min-height: 0;
}


.navbar-header {
    display: none;
}

.navbar-default {
    border: none;
    background: #fff;
    margin-top: 7px;
  padding-bottom: 12px;
}
  
.navbar-default .navbar-nav>li>a {
  color: #898989;
  font-family: 'Oxygen', sans-serif;
  font-size: 1.1em;
    border-top: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
}

.navbar-default .navbar-nav>li>a:hover {
  color: #999999;
}

.nav>li>a {
    padding: 20px;
}

.navbar-nav>li>a {
    line-height: normal;
}

.navbar-nav {
    display: table;
    float: none;
    margin: 0 auto;
    table-layout: fixed;
}

.navbar-default .navbar-nav > .active > a, 
.navbar-default .navbar-nav > .active > a:hover, 
.navbar-default .navbar-nav > .active > a:focus {
    color: #4f4d47;
  background-color: transparent;
}

}


/* ----------------------------------------------------
   Buttons styles
------------------------------------------------------- */


.btn {
  border-radius: 0px;
  text-decoration: none;
  padding: 12px 15px;
  font-size: 1em;
  line-height: 1.5em;
  font-weight: 400;
  letter-spacing: 0.2em;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  margin-bottom: 10px;
  margin-top: 10px;
}

.home-btn {
  color: #898989;
  background-color: transparent;
    border: 2px solid #dadada;
}

.home-btn:hover {
    color: #4f4d47;
  background-color: transparent;
  border-color: #4f4d47;  
}

.home1-btn {
  color: #898989;
  background-color: transparent;
    border: 2px solid #dadada;
  margin-top: 30px;
}

.home1-btn:hover {
    color: #4f4d47;
  background-color: transparent;
  border-color: #4f4d47;  
}


/* ----------------------------------------------------
   Home page styles
------------------------------------------------------- */


.main-image {
  margin-top: 20px;
  z-index:1;
}


.box-home {
  color: #898989;
  font-family: 'Oxygen', sans-serif;
  font-size: 1.1em;
    border-top: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
  margin-top: 110px;
}

.box-home a {
    color: #e74c3c;
  font-family: 'Oxygen', sans-serif;
  font-size: 0.9em;
}


.box-home a:hover{
  color: #898989;
}


.photo-home {
  margin-top: 60px;
  margin-bottom: 30px;
  margin-left: 5px;
}

.text-left {
    font-family: 'Oxygen', sans-serif;
    font-size: 1em;
  color: #898989;
  margin-top: 16px;
  margin-bottom: 14px;
  text-align: left;
  line-height: 1.7em;
  display: inline;
  font-weight: 400;
}


.first .square {
    width: 200px;
    height: 200px;
    border: 15px solid white;
    position: absolute;
    top: 87px;
    right: 41px;
    z-index: 1;
}


/* ----------------------------------------------------
   About page styles
------------------------------------------------------- */


.margin-about {
  margin-top: -32px;
}


.box-about {
  color: #898989;
  font-family: 'Oxygen', sans-serif;
  font-size: 1.1em;
    border-top: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
  margin-top: 68px;
}

.photo-about {
  margin-top: 59px;
  margin-bottom: 30px;
  margin-left: 5px;
}


.text-about {
    font-size: 1em;
  font-weight: 400;
  text-transform: uppercase;
    color: #4f4d47;
}


/* ----------------------------------------------------
   Services page styles
------------------------------------------------------- */


.margin-services {
  margin-top: 50px;
}

.margin-services p {
  font-size: 1.1em;
    font-family: 'Oxygen', sans-serif;  
  color: #e74c3c;
  line-height: 1.7em;
  margin-top: 14px;
  margin-bottom: 20px;
}

.heading-services {
    font-size: 1.4em;
  font-weight: 600;
    color: #4f4d47;
  margin-top: 140px;
  text-align: center;
  font-family: 'Oxygen', sans-serif;
  line-height: 1.7em;
  margin-left: -160px;
  background-color: #e0e0e0;
  padding: 15px;
  width: 44%;
}

.photo-services {
  margin-top: 13px;
  margin-bottom: 86px;
}

.first-s .square {
    width: 200px;
    height: 200px;
    border: 15px solid white;
    position: absolute;
    top: 77px;
    right: 41px;
}


/* ----------------------------------------------------
   Collections page styles
------------------------------------------------------- */


.margin-collection {
  margin-top: 30px;
}

.heading-c {
  font-family: 'Oxygen', sans-serif;
    font-size: 1em;
  font-weight: 400;
  color: #898989;
  margin-top: 16px;
  margin-bottom: 45px;
  text-align: center;
  line-height: 1.7em;
}

.portfolio-items, 
.portfolio-filter {
  list-style: none outside none;
  margin: 0 0 40px 0;
  padding: 0;
}

.portfolio-filter > li {
  display: inline-block;
}

.portfolio-filter > li a {
  background: none repeat scroll 0 0 #FFFFFF;
  font-size: 1em;
  font-weight: 400;
  margin-right: 10px;
  text-transform: lowercase;
  transition: all 0.9s ease 0s;
  -moz-transition: all 0.9s ease 0s;
  -webkit-transition: all 0.9s ease 0s;
  -o-transition: all 0.9s ease 0s;
  outline: none;
  border-radius: 0;
  color: #898989;
  background-color: transparent;
  border: 1px solid #dadada;

}

.portfolio-filter > li a:hover,
.portfolio-filter > li a.active{
  color: #898989;
  background: #e0e0e0;
  border: 1px solid #dadada;
  box-shadow: none;
}

.portfolio-items > li {
  float: left;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.portfolio-item {
  margin: 0;
  padding:0;
}

/* Isotope styles */
/**** Isotope Filtering ****/
.isotope-item {
  z-index: 2;
}

.isotope-hidden.isotope-item {
  z-index: 1;
}

/**** Isotope CSS3 transitions ****/
.isotope,
.isotope .isotope-item {
  -webkit-transition-duration: 0.8s;
  -moz-transition-duration: 0.8s;
  -ms-transition-duration: 0.8s;
  -o-transition-duration: 0.8s;
  transition-duration: 0.8s;
}

.isotope {
  -webkit-transition-property: height, width;
  -moz-transition-property: height, width;
  -ms-transition-property: height, width;
  -o-transition-property: height, width;
  transition-property: height, width;
}

.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -ms-transition-property: -ms-transform, opacity;
  -o-transition-property: -o-transform, opacity;
  transition-property: transform, opacity;
}

/**** disabling Isotope CSS3 transitions ****/
.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
  -webkit-transition-duration: 0s;
  -moz-transition-duration: 0s;
  -ms-transition-duration: 0s;
  -o-transition-duration: 0s;
  transition-duration: 0s;
}

/* End: Recommended Isotope styles */
/* disable CSS transitions for containers with infinite scrolling*/
.isotope.infinite-scrolling {
  -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;
}


.recent-work-wrap {
  position: relative;
}


.recent-work-wrap img {
  max-width: 100%;
}

.recent-work-wrap .recent-work-inner {
  top: 0;
  background: transparent;
  opacity: 0.9;
  width: 100%;
  border-radius: 0;
  margin-bottom: 0;
}

.recent-work-wrap:hover .overlay {
  opacity: 0.7;
   -webkit-filter: grayscale(1);
  filter: grayscale(1);
  -webkit-transition-duration: 1s;
  -moz-transition-duration: 1s;
  -ms-transition-duration: 1s;
  -o-transition-duration: 1s;
  transition-duration: 1s;
}

.grid {
  position: relative;
  list-style: none;
  text-align: center;
  margin-top: 40px;
}


.grid figure {
  position: relative;
  overflow: hidden;
  text-align: center;
  cursor: pointer;
}

.grid figure img {
  position: relative;
  display: block;
}

.grid figure figcaption {
  padding: 2em;
  color: #fff;
  text-transform: uppercase;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
  pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}


.grid figure figcaption > a {
  z-index: 1000;
  text-indent: 200%;
  white-space: nowrap;
  font-size: 0;
  opacity: 0;
}

.grid figure h2 {
  word-spacing: -0.15em;
  font-weight: 400;
    font-family: 'Oxygen', sans-serif;
}

.grid figure h2 span {
  font-weight: 400;
  margin-left: 10px;
}

.grid figure h2,
.grid figure p {
  margin: 0;
}

.grid figure p {
  letter-spacing: 1px;
  font-size: 1em;
  color: white;
  text-align: center;
}

figure.effect-moses {
  background: -webkit-linear-gradient(-45deg, #EC65B7 0%,#05E0D8 100%);
  background: linear-gradient(-45deg, #EC65B7 0%,#05E0D8 100%);
}

figure.effect-moses img {
  opacity: 0.85;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}

figure.effect-moses h2,
figure.effect-moses p {
  padding: 20px;
  width: 50%;
  height: 50%;
  border-top: 1px solid #fff;
  color: white;
}

figure.effect-moses h2 {
  padding: 20px;
  width: 50%;
  height: 50%;
  text-align: left;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(10px,10px,0);
  transform: translate3d(10px,10px,0);
  font-size: 1.6em;
}

figure.effect-moses p {
  float: right;
  padding: 20px;
  text-align: right;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  font-size: 0.9em;
}

figure.effect-moses:hover h2 {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-moses:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-moses:hover img {
  opacity: 0.6;
}


/*---------------------------------------------------
  Resume page styles
---------------------------------------------------*/

.margin-resume {
  margin-top: 40px;
  margin-bottom: -20px;
}

.desc {
  padding-top: 25px;
}

.desc p {
  color: #2f2f2f;
}

.desc .e-heading {
    color: #e74c3c;
  font-weight: 400;
  text-transform: none;
  font-size: 1em;
}


.more {
  color: #7D7D7D;
  line-height: 1.6em;
}


.date {
  font-size: 0.8em;
  text-transform: uppercase;
}


.line-symbol {
    padding: 0;
    border: none;
    border-top: 1px solid #DADADA;
    color: #A3A3A3;
    text-align: center;
  width: 83%;
  margin: 0 auto;
  background: transparent;
  margin-top: 23px;
}

.line-symbol:after {
    content: "resume";
    display: inline-block;
    position: relative;
    top: -0.7em;
    font-size: 1.1em;
    padding: 0 0.25em;
    background: white;
    font-family: 'Qwigley', Helvetica, Sans-serif;     
}



/* ----------------------------------------------------
   News page styles
------------------------------------------------------- */


.margin-news {
  margin-top: 30px;
}


.holder {
  width: 100%;
  padding-bottom: 6px;
  margin-top: 40px;
}

.holder p {
  font-size: 1.1em;
    font-family: 'Oxygen', sans-serif;  
  color: #898989;
  line-height: 1.7em;
  margin-top: 14px;
  margin-bottom: 20px;
}

h5 {
    font-size: 1.1em;
  font-weight: 600;
    color: #4f4d47;
  margin-top: 50px;
  text-align: center;
  font-family: 'Oxygen', sans-serif;
  line-height: 1.7em;
}


h5 .date {
    font-size: 0.9em;
  font-weight: 400;
    color: #e74c3c;
  margin-top: 15px;
  margin-bottom: 14px;
  text-align: center;
  line-height: 1.7em;
  display: block;
  text-transform: lowercase;
  font-family: 'Oxygen', sans-serif;  
}

.photo-news {
  margin-top: 13px;
  margin-bottom: 26px;
}


/* ----------------------------------------------------
   Contact page styles
------------------------------------------------------- */


.margin-contact {
  margin-top: -32px;
}

.box-contact {
  font-family: 'Oxygen', sans-serif;
    border-top: 1px solid #dddddd;
  margin-top: 68px;
}

#contact-area {
  margin-top: 25px;
}

#contact-area input, #contact-area textarea {
  padding: 5px;
  width: 64%;
  margin: 0px 0px 10px 0px;
  border: 2px solid #dadada;
}

#contact-area textarea {
  height: 90px;
}

#contact-area textarea:focus, #contact-area input:focus {
  border: 2px solid #900;
}

#contact-area input.submit-button {
  width: 100px;
  float: left;
  margin-left: 116px;
  color: #898989;
  background-color: transparent;
    border: 2px solid #dadada;
}

label {
  float: left;
  text-align: left;
  margin-right: 15px;
  width: 100px;
  padding-top: 5px;
  font-size: 1em;
  color: #4f4d47;
}

h6 {
    font-size: 1em;
  font-weight: 400;
    color: #4f4d47;
  margin-top: 100px;
  text-align: left;
  font-family: 'Oxygen', sans-serif;
  line-height: 1.7em;
  margin-left: 120px;
  padding-bottom: 24px;
}

h6 span {
  font-weight: 400;
    color: #4f4d47;
  margin-top: 10px;
  text-align: left;
  font-family: 'Oxygen', sans-serif;
  line-height: 1.7em;
  display: block;
}

.photo-contact {
  margin-top: 59px;
  margin-bottom: 70px;
  margin-left: 5px;
}

#map-canvas {
  height: 400px;
  width: 100%;
}


/* ----------------------------------------------------
   Footer
------------------------------------------------------- */


.footer {
  color: #898989;
  font-family: 'Oxygen', sans-serif;
  font-size: 1.1em;
    border-top: 1px solid #dddddd;
  border-bottom: 1px solid #dddddd;
    margin-top: 54px;
  margin-bottom: 72px;
}


.footer h5 {
    font-size: 1em;
  font-weight: 400;
  color: #898989;
  margin-top: 18px;
  padding-bottom: 12px;
  text-align: center;
}


.footer h5 .icon1 {
  margin-left: 12px;
}



/* ----------------------------------------------------
   Responsive styles
------------------------------------------------------- */


@media screen and (max-width:1280px) {

.box-home {
  margin-top: 97px;
}

.portfolio-items, 
.portfolio-filter {
  margin: 0 53px 40px 0;
  padding: 0;
}

}


@media screen and (max-width:1024px) {

.box-home {
  margin-top: 70px;
}

.photo-home {
  margin-top: 80px;
}

.portfolio-items, 
.portfolio-filter {
  margin: 0 87px 40px 0;
  padding: 0;
}

#contact-area input.submit-button {
  margin-left: 0;
}

h6 {
  margin-left: 0;
}

.first .square {
  width: 150px;
  height: 150px;
  border: 15px solid white;
  position: absolute;
  top: 100px;
  right: 27px;
  z-index: 1;
}

.grid figure p {
  letter-spacing: 1px;
  font-size: 0.7em;
  color: white;
  text-align: center;
}


}


@media screen and (max-width:800px) {

.col-xs-offset-3, .col-xs-offset-1 {
  margin-left: 0;
}
  
.photo-home {
  margin-left: 0;
}

.photo-about {
  margin-left: 0;
  padding: 200px;
}

.photo-contact {
  margin-left: 0;
}

.box-home {
  margin-top: 60px;
}

.portfolio-items, 
.portfolio-filter {
  margin: 0 68px 40px 0;
  padding: 0;
}


.margin-about, .margin-collection, .margin-resume, .margin-news, .margin-contact {
  margin-top: 64px;
}

#contact-area input, #contact-area textarea {
  width: 70%;
}

#contact-area input.submit-button {
  margin-left: 118px;
}

h6 {
  margin-left: 116px;
}

.first .square {
  display: none;
}

.grid figure p {
  letter-spacing: 1px;
  font-size: 0.9em;
  color: white;
  text-align: center;
}


}


@media screen and (max-width:768px) {

.portfolio-items, 
.portfolio-filter {
  margin: 0 95px 40px 0;
  padding: 0;
}

.heading-services {
    font-size: 1.4em;
  font-weight: 600;
    color: #4f4d47;
  margin-top: 10px;
  text-align: center;
  font-family: 'Oxygen', sans-serif;
  line-height: 1.7em;
  margin: 0 auto;
  background-color: #dadada;
  padding: 15px;
  width: 90%;
}

.photo-services {
  margin-top: 13px;
  margin-bottom: 29px;
}

.margin-services p {
  margin-bottom: 44px;
}

.nav>li>a {
    padding: 14px;
}

}

@media screen and (max-width:600px) {

.navbar {
    border: none !important;
}

.resp{
  margin-top: 24px;
}

.navbar-toggle {
    margin-top: 78px;
  border: none;
}

.portfolio-items, 
.portfolio-filter {
  margin: 0 0 40px 0;
  padding: 0;
}

.heading-collections {
  margin-top: 42px;
}


}


@media screen and (max-width:480px) {
  
h2 {
  padding-left: 40px;
  padding-right: 40px;
}


#contact-area input.submit-button {
  margin-left: 50px;
}


h6 {
  margin-left: 0;
}

.photo-about {
  margin-top: 20px;
  margin-bottom: 4px;
  margin-left: 5px;
}

}

@media screen and (max-width:480px) {

.grid figure p {
  display:  none;
}

.first-s .square {
  display: none;
}

.heading-services {
    font-size: 1.1em;
}

}
  </style>
        <title> - Home</title>

        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Boostrap Core CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">
        
        
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Qwigley" />
        <!-- Font awesome -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   </head>
   <body>
   
   <!-- Start wrapper -->
   <div class="wrapper">
  	  <div class="col-md-12">
         <!-- Logo -->
         <div class="brand wow fadeIn" data-wow-delay="0.1s">Shamshayeva Aruzhan
           <div class="title"> - Welcome!!! -  </div>
         </div>

         <!-- Navigation -->
         <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <div class="navbar-brand"><a href="#">Patsy Doherty</a>
                <div class="title"> - hat designer - </div>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" >Home</a>
                    </li>
                    <li>
                       <a href="{{route('about')}}">About</a>
                    </li>
                    
                    <li>
                      <a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /navbar-collapse -->
         </nav>
         <!-- End nav -->

         <!-- Start main image and the text below -->
         <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
              <img src="https://github.com/190103386/AruzhanShamshayeva-profile-website/blob/main/project/resources/views/flower.jpg?raw=true" alt="img" class="resp main-image" width="1200px" height="800px" />
                 
                  <div class="hr"></div>
          </div>
          <!-- End main image and the text below -->

          <!-- Start left column -->
          <div class="box-home col-md-4 col-xs-offset-1">
               <h3>
               <span class="text-left">I love the beauty of the world.</span>I surround myself with beautiful things. I discover in myself new facets of beauty and harmony. The love of life makes me wiser. I am a whole person. Quote for today: A constant sign of wisdom is to see the miraculous in the ordinary....... - Ralph Waldo Emerson -
               </h3>
          </div>
          <!-- End left column -->
             
          <!-- Start right image -->
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
             <div class="first">
             <div class="square wow fadeInDown" data-wow-delay=".5s"></div>
             </div>
             <img src="img/photo.jpg" alt="img" class="photo-home"/> 
          </div>
          
      </div>
      <!-- End col-md-12 -->

   </div>
   <!-- End wrapper -->

      
   <!-- jQuery Version 1.11.0 -->
   <script src="js/jquery-1.11.0.js"></script>
   <!-- Boostrap JS -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Smooth scroll JS -->
   <script src="js/smoothscroll.js"></script>
   
   <!-- Wow JavaScript -->
   <script src="js/wow.js"></script>
    
   <script>
   new WOW().init();
   </script>


</body>
</html>