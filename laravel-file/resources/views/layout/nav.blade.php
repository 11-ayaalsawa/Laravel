<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100);

body {
  background: url('https://dl.dropboxusercontent.com/u/23299152/Wallpapers/wallpaper-22705.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Roboto', sans-serif;
}
/*======================================================
                          Navbar
  ======================================================*/
  #navbar {
  background: white;
  color: rgb(13, 26, 38);
  position: fixed;
  top: 0;
  height: 60px;
  line-height: 60px;
  width: 100vw;
  z-index: 10;
}

.nav-wrapper {
  margin: auto;
  text-align: center;
  width: 70%;
} @media(max-width: 768px) {
    .nav-wrapper {
      width: 90%;
    }
  } @media(max-width: 638px) {
      .nav-wrapper {
        width: 100%;
      }
    } 


.logo {
  float: left;
  margin-left: 28px;
  font-size: 1.5em;
  height: 60px;
  letter-spacing: 1px;
  text-transform: uppercase;
} @media(max-width: 768px) {
    .logo {
/*       margin-left: 5px; */
    }
  }

#navbar ul {
  display: inline-block;
  float: right;
  list-style: none;
  /* margin-right: 14px; */
  margin-top: -2px;
  text-align: right;
  transition: transform 0.5s ease-out;
  -webkit-transition: transform 0.5s ease-out;
} @media(max-width: 640px) {
    #navbar ul {
      display: none;
    }
  } @media(orientation: landscape) {
      #navbar ul {
        display: inline-block;
      }
    }

#navbar li {
  display: inline-block;
}

#navbar li a {
  color: rgb(13, 26, 38);
  display: block;
  font-size: 0.7em;
  height: 50px;
  letter-spacing: 1px;
  margin: 0 20px;
  padding: 0 4px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
}

#navbar li a:hover {
  /* border-bottom: 1px solid rgb(28, 121, 184); */
  color: rgb(28, 121, 184);
  transition: all 1s ease;
  -webkit-transition: all 1s ease;
}

/* Animated Bottom Line */
#navbar li a:before, #navbar li a:after {
  content: '';
  position: absolute;
  width: 0%;
  height: 1px;
  bottom: -1px;
  background: rgb(13, 26, 38);
}

#navbar li a:before {
  left: 0;
  transition: 0.5s;
}

#navbar li a:after {
  background: rgb(13, 26, 38);
  right: 0;
  /* transition: width 0.8s cubic-bezier(0.22, 0.61, 0.36, 1); */
}

#navbar li a:hover:before {
  background: rgb(13, 26, 38);
  width: 100%;
  transition: width 0.5s cubic-bezier((0.22, 0.61, 0.36, 1));
}

#navbar li a:hover:after {
  background: transparent;
  width: 100%;
  /* transition: 0s; */
}



/*======================================================
                    Mobile Menu Menu Icon
  ======================================================*/
@media(max-width: 640px) {
  .menuIcon {
    cursor: pointer;
    display: block;
    position: fixed;
    right: 15px;
    top: 20px;
    height: 23px;
    width: 27px;
    z-index: 12;
  }

  /* Icon Bars */
  .icon-bars {
    background: rgb(13, 26, 38);
    position: absolute;
    left: 1px;
    top: 45%;
    height: 2px;
    width: 20px;
    -webkit-transition: 0.4s;
    transition: 0.4s;
  } 

  .icon-bars::before {
    background: rgb(13, 26, 38);
    content: '';
    position: absolute;
    left: 0;
    top: -8px;
    height: 2px;
    width: 20px;
/*     -webkit-transition: top 0.2s ease 0.3s;
    transition: top 0.2s ease 0.3s; */
    -webkit-transition: 0.3s width 0.4s;
    transition: 0.3s width 0.4s;
  }

  .icon-bars::after {
    margin-top: 0px;
    background: rgb(13, 26, 38);
    content: '';
    position: absolute;
    left: 0;
    bottom: -8px;
    height: 2px;
    width: 20px;
/*     -webkit-transition: top 0.2s ease 0.3s;
    transition: top 0.2s ease 0.3s; */
    -webkit-transition: 0.3s width 0.4s;
    transition: 0.3s width 0.4s;
  }

  /* Bars Shadows */
  .icon-bars.overlay {
    background: rgb(97, 114, 129);
    background: rgb(183, 199, 211);
    width: 20px;
    animation: middleBar 3s infinite 0.5s;
    -webkit-animation: middleBar 3s infinite 0.5s;
  } @keyframes middleBar {
      0% {width: 0px}
      50% {width: 20px}
      100% {width: 0px}
    } @-webkit-keyframes middleBar {
        0% {width: 0px}
        50% {width: 20px}
        100% {width: 0px}
      }

  .icon-bars.overlay::before {
    background: rgb(97, 114, 129);
    background: rgb(183, 199, 211);
    width: 10px;
    animation: topBar 3s infinite 0.2s;
    -webkit-animation: topBar 3s infinite 0s;
  } @keyframes topBar {
      0% {width: 0px}
      50% {width: 10px}
      100% {width: 0px}
    } @-webkit-keyframes topBar {
        0% {width: 0px}
        50% {width: 10px}
        100% {width: 0px}
      }

  .icon-bars.overlay::after {
    background: rgb(97, 114, 129);
    background: rgb(183, 199, 211);
    width: 15px;
    animation: bottomBar 3s infinite 1s;
    -webkit-animation: bottomBar 3s infinite 1s;
  } @keyframes bottomBar {
      0% {width: 0px}
      50% {width: 15px}
      100% {width: 0px}
    } @-webkit-keyframes bottomBar {
        0% {width: 0px}
        50% {width: 15px}
        100% {width: 0px}
      }


  /* Toggle Menu Icon */
  .menuIcon.toggle .icon-bars {
    top: 5px;
    transform: translate3d(0, 5px, 0) rotate(135deg);
    transition-delay: 0.1s;
    transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }

  .menuIcon.toggle .icon-bars::before {
    top: 0;
    transition-delay: 0.1s;
    opacity: 0;
  }

  .menuIcon.toggle .icon-bars::after {
    top: 10px;
    transform: translate3d(0, -10px, 0) rotate(-270deg);
    transition-delay: 0.1s;
    transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }

  .menuIcon.toggle .icon-bars.overlay {
    width: 20px;
    opacity: 0;
    -webkit-transition: all 0s ease 0s;
    transition: all 0s ease 0s;
  }
}


/*======================================================
                   Responsive Mobile Menu 
  ======================================================*/
.overlay-menu {
  background: lightblue;
  color: rgb(13, 26, 38);
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 0;
  right: 0;
  padding-right: 15px;
  transform: translateX(-100%);
  width: 100vw;
  height: 100vh;
  -webkit-transition: transform 0.2s ease-out;
  transition: transform 0.2s ease-out;
}

.overlay-menu ul, .overlay-menu li {
  display: block;
  position: relative;
}

.overlay-menu li a {
  display: block;
  font-size: 1.8em;
  letter-spacing: 4px;
/*   opacity: 0; */
  padding: 10px 0;
  text-align: right;
  text-transform: uppercase;
  -webkit-transition: color 0.3s ease;
  transition: color 0.3s ease;
/*   -webkit-transition: 0.2s opacity 0.2s ease-out;
  transition: 0.2s opacity 0.2s ease-out; */
}

.overlay-menu li a:hover,
.overlay-menu li a:active {
  color: rgb(28, 121, 184);
  -webkit-transition: color 0.3s ease;
  transition: color 0.3s ease;
}
/* ////////////////////////////////// */

.login-card {
  padding: 40px;
  width: 274px;
  background-color: #F7F7F7;
  margin: 0 auto 10px;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  position:absolute;
  top:20%;
  left:40%;
}

.login-card h1 {
  font-weight: 100;
  text-align: center;
  font-size: 2.3em;
}

.login-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.login-card input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-card input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.login-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-card a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
}

.login-card a:hover {
  opacity: 1;
}

.login-help {
  width: 100%;
  text-align: center;
  font-size: 12px;
}

/* //////////////////////////////////////////////////// */
h1,
h2,
h3,
h4 {
  line-height: 1.3;
}

a {
  color: #444;
  text-decoration: none;
}

ul {
  list-style: none;
}

img {
  width: 100%;
}

.container {
  max-width: 1100px;
  margin: auto;
  overflow: hidden;
  padding: 0 2rem;
}

.navbar {
  font-size: 1.2rem;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}

.navbar .container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 2rem;
}

.navbar .logo {
  font-size: 2rem;
}

.navbar ul {
  justify-self: flex-end;
  display: flex;
  align-items: center;
  justify-content: center;
}

.navbar a {
  padding: 0 1rem;
}

.navbar a:hover {
  color: #555;
}

.section-a {
  margin: 2rem 0;
}

.section-a .container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 3rem;
  align-items: center;
  justify-content: center;
}

.section-a h1 {
  font-size: 4rem;
  color: var(--primary-color);
}

.section-a p {
  margin: 1rem 0;
}

.section-b {
  position: relative;
 
  background: url('https://content.4ty.gr/subdomain-bgslideshows/35897/gelato-sl1.jpg') no-repeat bottom /cover;
  height: 600px;
}

.section-b-inner {
  color: #fff;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  margin: auto;
  max-width: 860px;
  padding: 5rem 0;
}

.section-b-inner h3 {
  font-size: 2rem;
}

.section-b-inner h2 {
  font-size: 5rem;
  margin-top: 1rem;
}

.section-b-inner p {
  margin-top: 1rem;
  font-size: 1.5rem;
}

.section-c .gallery {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
}
.section-c .gallery a:first-child {
  /* grid-row-start: 1;
  grid-row-end: 3; */
  grid-row: 1/3;
  grid-column: 1/3;
}

.section-c .gallery a:nth-child(2) {
  grid-column-start: 3;
  grid-column-end: 5;
}

.section-c .gallery img,
.section-c .gallery a {
  width: 100%;
  height: 100%;
}

.section-footer {
  background: var(--primary-color);
  color: #fff;
  padding: 4rem 0;
}

.section-footer .container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 1rem;
}

.section-footer h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.section-footer h3 {
  margin-bottom: 0.7rem;
}

.section-footer a {
  line-height: 1.9;
  color: #ccc;
}

.section-footer a > i {
  color: #555;
  margin-right: 0.5rem;
}

.email-form {
  width: 100%;
  display: inline-block;
  background-color: #555;
  position: relative;
  border-radius: 20px;
  line-height: 0;
  margin-top: 1rem;
}

/* // .form-control-wrap {
// 	position: relative;
// 	display: inline-block;
// 	width: 100%;
// } */

.email-form .form-control {
  display: inline-block;
  border: 0;
  outline: 0;
  font-size: 1rem;
  color: #ddd;
  background-color: transparent;
  font-family: inherit;
  margin: 0;
  padding: 0 3rem 0 1.5rem;
  width: 100%;
  height: 45px;
  border-radius: 20px;
}

.email-form .submit {
  display: inline-block;
  position: absolute;
  top: 0;
  right: 0;
  width: 45px;
  height: 45px;
  background-color: #eee;
  font-size: 1rem;
  text-align: center;
  margin: 0;
  padding: 0;
  outline: 0;
  border: 0;
  color: #333;
  cursor: pointer;
  border-radius: 0 20px 20px 0;
}

.btn {
  display: inline-block;
  background: var(--primary-color);
  color: #fff;
  padding: 0.8rem 1.5rem;
  border: none;
  cursor: pointer;
  font-size: 1.1rem;
  border-radius: 30px;
}

.btn:hover {
  background: var(--secondary-color);
}

.overlay {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--overlay-color);
}

@media (max-width: 700px) {
  .section-a .container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .section-a .container div:first-child {
    order: 2;
  }

  .section-a .container div:nth-child(2) {
    order: -1;
  }

  .section-a img {
    width: 80%;
    margin: auto;
  }

  .section-c .gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }
  .section-c .gallery a:first-child {
    grid-row: 1/1;
    grid-column: 1/1;
  }

  .section-c .gallery a:nth-child(2) {
    grid-column: 2/4;
    grid-row: 2/2;
  }

  .section-c .gallery a:last-child {
    display: none;
  }

  .section-footer {
    padding: 2rem 0;
  }
  .section-footer .container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .section-footer div:nth-child(2),
  .section-footer div:nth-child(3) {
    display: none;
  }
}
/* ///////////////////////////////////////////////////// */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body {
    font-family: "Poppins", sans-serif;
    color: #444444;
}

a,
a:hover {
    text-decoration: none;
    color: inherit;
}

.section-products {
    padding: 80px 0 54px;
}

.section-products .header {
    margin-bottom: 50px;
}

.section-products .header h3 {
    font-size: 1rem;
    color: #fe302f;
    font-weight: 500;
}

.section-products .header h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: #444444; 
}

.section-products .single-product {
    margin-bottom: 26px;
}

.section-products .single-product .part-1 {
    position: relative;
    height: 290px;
    max-height: 290px;
    margin-bottom: 20px;
    overflow: hidden;
}

.section-products .single-product .part-1::before {
		position: absolute;
		content: "";
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
		transition: all 0.3s;
}

.section-products .single-product:hover .part-1::before {
		transform: scale(1.2,1.2) rotate(5deg);
}

.section-products #product-1 .part-1::before {
    background: url("https://i5.walmartimages.ca/images/Enlarge/810/805/6000202810805.jpg") no-repeat center;
    background-size: cover;
		transition: all 0.3s;
}

.section-products #product-2 .part-1::before {
    background: url("https://m.media-amazon.com/images/I/41rm1lUhQZL.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-3 .part-1::before {
    background: url("https://m.media-amazon.com/images/I/81Rq4AejDWL._SL1500_.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-4 .part-1::before {
    background: url("https://images.shop.frankfurt-airport.com/pim/fjgQNQBCl4qJQWzfw0-qihQw5jxf-KHUs0tTxLZs2XM/1200x/Y2F0YWxvZy9kL2MvMC82L2RjMDYzN2JkMzY3ZGE0MDUzMWYwMWI2NWY1ZTZlMzJmXzEzNzY4MTEuanBn") no-repeat center;
    background-size: cover;
}

.section-products .single-product .part-1 .discount,
.section-products .single-product .part-1 .new {
    position: absolute;
    top: 15px;
    left: 20px;
    color: #ffffff;
    background-color: #fe302f;
    padding: 2px 8px;
    text-transform: uppercase;
    font-size: 0.85rem;
}

.section-products .single-product .part-1 .new {
    left: 0;
    background-color: #444444;
}

.section-products .single-product .part-1 ul {
    position: absolute;
    bottom: -41px;
    left: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
    opacity: 0;
    transition: bottom 0.5s, opacity 0.5s;
}

.section-products .single-product:hover .part-1 ul {
    bottom: 30px;
    opacity: 1;
}

.section-products .single-product .part-1 ul li {
    display: inline-block;
    margin-right: 4px;
}

.section-products .single-product .part-1 ul li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background-color: #ffffff;
    color: #444444;
    text-align: center;
    box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
    transition: color 0.2s;
}

.section-products .single-product .part-1 ul li a:hover {
    color: #fe302f;
}

.section-products .single-product .part-2 .product-title {
    font-size: 1rem;
}

.section-products .single-product .part-2 h4 {
    display: inline-block;
    font-size: 1rem;
}

.section-products .single-product .part-2 .product-old-price {
    position: relative;
    padding: 0 7px;
    margin-right: 2px;
    opacity: 0.6;
}

.section-products .single-product .part-2 .product-old-price::after {
    position: absolute;
    content: "";
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #444444;
    transform: translateY(-50%);
}
/* ///////////////////////////////////////////////////// */
.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 350px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px rgba(254,236,164,1); 
}

.wrapper h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper .input_field{
  margin-bottom: 10px;
}

.wrapper .input_field input[type="text"],
.wrapper textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
}

.wrapper textarea{
  resize: none;
  height: 80px;
}

.wrapper .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background:pink;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}

/* /////////////////////////////////////////////////// */
#login-box {
  position: relative;
  margin: 5% auto;
  width: 600px;
  height: 500px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

.or {
  position: absolute;
  top: 180px;
  left: 280px;
  width: 40px;
  height: 40px;
  background: #DDD;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  line-height: 40px;
  text-align: center;
}

.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  background: url('https://goo.gl/YbktSj');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

.right .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

button.social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin.facebook {
  background: #32508E;
}

button.social-signin.twitter {
  background: #55ACEE;
}

button.social-signin.google {
  background: #DD4B39;
}
/* ///////////////////////////////////////////////////// */

.footer {
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  color: #2f2f2f;
  background-color: #fff;
  border-top: 1px solid #e5e5e5;
  position:absolute;
  bottom:-80%;
  width: 100%;
}

.footer > * {
  flex:  1 100%;
}

.footer__addr {
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer__logo {
  font-family: 'Pacifico', cursive;
  font-weight: 400;
  text-transform: lowercase;
  font-size: 1.5rem;
}

.footer__addr h2 {
  margin-top: 1.3em;
  font-size: 15px;
  font-weight: 400;
}

.nav__title {
  font-weight: 400;
  font-size: 15px;
}

.footer address {
  font-style: normal;
  color: #999;
}

.footer__btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 36px;
  max-width: max-content;
  background-color: rgb(33, 33, 33, 0.07);
  border-radius: 100px;
  color: #2f2f2f;
  line-height: 0;
  margin: 0.6em 0;
  font-size: 1rem;
  padding: 0 1.3em;
}

.footer ul {
  list-style: none;
  padding-left: 0;
}

.footer li {
  line-height: 2em;
}

.footer a {
  text-decoration: none;
}

.footer__nav {
  display: flex;
	flex-flow: row wrap;
}

.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: #999;
}

.nav__ul--extra {
  column-count: 2;
  column-gap: 1.25em;
}

.legal {
  display: flex;
  flex-wrap: wrap;
  color: #999;
}
  
.legal__links {
  display: flex;
  align-items: center;
}

.heart {
  color: #2f2f2f;
}

@media screen and (min-width: 24.375em) {
  .legal .legal__links {
    margin-left: auto;
  }
}

@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }
  
  .nav__item--extra {
    flex-grow: 2;
  }
  
  .footer__addr {
    flex: 1 0px;
  }
  
  .footer__nav {
    flex: 2 0px;
  }
}
    </style>
</head>
<body>
<nav id="navbar" class="">
  <div class="nav-wrapper">
    <!-- Navbar Logo -->
    <div class="logo">
      <!-- Logo Placeholder for Inlustration -->
      <a href="#home"><i class="fa fa-angellist"></i> CANDY</a>
    </div>

    <!-- Navbar Links -->
    <ul id="menu">
      <li><a href="../candy.blade.php">Home</a></li>
 
 <li><a href="../about.blade.php">About</a></li>
 <li><a href="../contact.blade.php">Contact</a></li>
 <li><a href="../login.blade.php">Login </a></li>
 <li><a href="../register.blade.php">Register</a></li>
    </ul>
  </div>
</nav>
