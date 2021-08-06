
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

  /* mobile */
  @media (max-width: 880px) {
    .intro .left {
      float: none;
      width: 100%;
    }
    .intro .contenuto {
       padding-top: 150px;
       padding-left: 20px;
       padding-right: 20px;
       position: relative;
       z-index: 10;
    }
    .intro .right {
      float: none;
      width: 100%;
    }

    .intro .object3mobile {
       width: 100%;
       position: relative;
       z-index: 10;
       padding-top: 100px;
    }
    .intro .object1mobile {
        position: absolute;
        z-index: 1;
        left: 10%;
        top: 35%;
        width: 100%;
    }
    .intro .object2mobile {
        position: absolute;
        right: -40%;
        top: 25%;
        z-index: 1;
        width: 100%;
    }
    .intro .object4mobile {
        position: absolute;
        left: 35%;
        top: 56%;
        z-index: 1;
        width: 100%;
    }
    .intro .object5mobile {
        position: absolute;
        left: 0%;
        top: 90%;
        z-index: 1;
        width: 100%;
    }
  }

</style>
<div class="intro">
  <div class="left">
    <div class="contenuto">
      <div class="title">Online Sales Meetings will never be the SAME</div>
      <div class="description">We provide the first platform as a service for creating your personalized AI Virtual Sales Assistant, helping your Sales Team before and during online meetings with clients and accelerating your sales pipeline.</div>
    </div>
  </div>
  <div class="right desktop">
      <img class="object1" src="img/Ellipse2.png">
      <img class="object2" src="img/Ellipse4.png">
      <img class="object4" src="img/Ellipse3.png">
      <img class="object3" src="img/hero1.png">
  </div>

  <!-- mobile -->

  <img class="object1mobile mobile" src="img/Ellipse2.png">
  <img class="object2mobile mobile" src="img/Ellipse8.png">
  <img class="object4mobile mobile" src="img/Ellipse3.png">
  <img class="object5mobile mobile" src="img/Ellipse8.png">

  <div class="mobile">
      <img class="object3mobile" src="img/hero1.png">
  </div>


</div>



<div class="separator"></div>
