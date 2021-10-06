
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

    /* mobile */

    .menu .mobilemenu {
      float: right;
      padding-right: 20px;
      padding-top: 11px;
    }
    .menu .mobilelogo {
        float: left;
        padding-left: 15px;
    }
    .menu .mobilelogo img {
      width: 139px;
    }
    .menu .mobilemenu {
      float: right;
      padding-right: 20px;
      padding-top: 11px;
    }


    .menu .mobilemenuitem {
      width: 100%;
      height: 100%;
      position: fixed;
      z-index: 999998;
      background: #fff;
      display: none;
    }
    .menu .listmobile {
        top: 100px;
        position: absolute;
    }
    .menu .testomobile {
      font-family: Heebo;
      font-style: normal;
      font-weight: 300;
      font-size: 25px;
      line-height: 22px;
      padding-left: 40px;
      padding-top: 40px;
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


        /* mobile */

        $("#openmobilemenu").click(function (){
            $( "#mobilemenuitem" ).show();
        });
        $("#closemobilemenu").click(function (){
            $( "#mobilemenuitem" ).hide();
        });

        $("#ourproductsmobile").click(function (){
            $( "#mobilemenuitem" ).hide();
            $('html, body').animate({
                scrollTop: $("#ourproductsdiv").offset().top
            }, 1000);
        });
        $("#howitworksmobile").click(function (){
            $( "#mobilemenuitem" ).hide();
            $('html, body').animate({
                scrollTop: $("#howitworksdiv").offset().top
            }, 2000);
        });
        $("#contactusmobile").click(function (){
            $( "#mobilemenuitem" ).hide();
            $('html, body').animate({
                scrollTop: $("#contactusdiv").offset().top
            }, 2000);
        });


    });
</script>
<div class="menu">
  <div class="logo"><img src="img/Logo.png"></div>
  <div class="list desktop">
    <div class="item testo"><a href="#" id="ourproducts">Our products</a></div>
    <!--
    <div class="item testo"><a href="#" id="howitworks">How it works</a></div>
    <div class="item testo">Pricing</div>
  -->
    <div class="item testo"><a href="#" id="contactus">Contact us</a></div>
  </div>
  <!--
  <div class="login testo desktop"><i class="far fa-user"></i> Login</div>
  <div class="try desktop">
    <div class="trybutton"><i class="fas fa-video"></i>&nbsp; Try it on zoom</div>
  </div>
   -->

  <!-- mobile -->

  <div class="mobilemenu mobile">
    <a href="#" id="openmobilemenu"><i class="fas fa-bars"></i></a>
  </div>
  <div class="mobilemenuitem" id="mobilemenuitem">
    <div class="mobilelogo"><img src="img/Logo.png"></div>
    <div class="mobilemenu">
      <a href="#" id="closemobilemenu"><i class="fas fa-times"></i></a>
    </div>
    <div class="listmobile">
      <div class="itemmobile testomobile"><a href="#" id="ourproductsmobile">Our products</a></div>
      <!--
      <div class="itemmobile testomobile"><a href="#" id="howitworksmobile">How it works</a></div>
      <div class="itemmobile testomobile">Pricing</div>
      -->
      <div class="itemmobile testomobile"><a href="#" id="contactusmobile">Contact us</a></div>
    </div>
  </div>


</div>
<div class="separator"></div>
