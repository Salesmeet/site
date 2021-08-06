<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link  rel="stylesheet" type="text/css"  defer="defer" href="asset/main.css" />
    <script src="https://kit.fontawesome.com/40e8a4814d.js" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="asset/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="asset/slick/slick-theme.css">
    <script src="asset/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body>



    <!-- ***************************** AZIENDE ********************************************************** -->

    <style>
        .menu {
          background-color: #ffffff33;
          position: absolute;
          width: 100%;
          padding-top: 10px;
          z-index: 100;
        }
        .menu .logo img {
          width: 139px;
          height: 55.97px;
        }
        .menu .logo {
            float: left;
            padding-left: 15px;
        }
        .menu .list {
          float: left;
        }
        .menu .list .item {
          float: left;
        }
        .menu .login {
          float: right;
          padding-right: 20px;
        }
        .menu .try {
          float: right;
        }
        .menu .trybutton {
          color: #fff;
          display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
          position: static;
          width: 188px;
          height: 50px;
          background: #2196F3;
          border-radius: 70px;
          /* Inside Auto Layout */
          flex: none;
          order: 0;
          flex-grow: 0;
        }
        .menu .testo {
          font-family: Heebo;
          font-style: normal;
          font-weight: 300;
          font-size: 15px;
          line-height: 22px;
          padding-left: 40px;
          padding-top: 10px;
        }
    </style>
    <script>
        $(document).ready(function (){
            $("#ourproducts").click(function (){
                $('html, body').animate({
                    scrollTop: $("#ourproductsdiv").offset().top
                }, 1000);
            });
            $("#howitworks").click(function (){
                $('html, body').animate({
                    scrollTop: $("#howitworksdiv").offset().top
                }, 2000);
            });
            $("#contactus").click(function (){
                $('html, body').animate({
                    scrollTop: $("#contactusdiv").offset().top
                }, 2000);
            });
        });
    </script>
    <div class="menu">
      <div class="logo"><img src="img/Logo.png"></div>
    </div>
    <div class="separator"></div>


    <!-- ***************************** INTRO ********************************************************** -->

    <style>
      .intro {
        width: 100%;
        height: 1100px;
      }
      .intro .left {
        float:left;
        width: 50%;
      }
      .intro .contenuto {
         padding-top: 200px;
         padding-left: 100px;
         position: relative;
         z-index: 10;
      }
      .intro .right {
        float:right;
        width: 50%;
      }
      .intro .right .object1 {
          position: absolute;
          left: 35%;
          top: 15%;
          z-index: 1;
      }
      .intro .right .object2 {
          position: absolute;
          top: 0%;
          z-index: 2;
      }
      .intro .right .object4 {
          position: absolute;
          z-index: 3;
          right: 0px;
          bottom: -150px;
      }
      .intro .right .object3 {
          position: absolute;
          top: 15%;
          right: 0px;
          width: 45%;
          z-index: 4;
      }
    </style>
    <div class="intro">
      <div class="left">
        <div class="contenuto">
          <div class="title">Artificial intelligence at the service of the seller</div>
          <div class="description">Soon online.</div>
        </div>
      </div>
      <div class="right">
          <img class="object1" src="img/Ellipse2.png">
          <img class="object2" src="img/Ellipse4.png">
          <img class="object4" src="img/Ellipse3.png">
          <img class="object3" src="img/hero1.png">
      </div>
    </div>
    <div class="separator"></div>

  </body>
</html>
