
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
  <div class="list">
    <div class="item testo"><a href="#" id="ourproducts">Our products</a></div>
    <div class="item testo"><a href="#" id="howitworks">How it works</a></div>
    <div class="item testo">Pricing</div>
    <div class="item testo"><a href="#" id="contactus">Contact us</a></div>
  </div>
  <div class="login testo"><i class="far fa-user"></i> Login</div>
  <div class="try">
    <div class="trybutton"><i class="fas fa-video"></i>&nbsp; Try it on zoom</div>
  </div>
</div>
<div class="separator"></div>
