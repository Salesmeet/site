
<!-- ***************************** VANTAGGI ********************************************************** -->

<style>
  .vantaggi {
    background-color: #EEF2FF;
    width: 100%;
    height: 1100px;
  }
  .vantaggi .object1 {
    position: absolute;
    padding-top: 500px;
  }
  .vantaggi .object2 {
    position: absolute;
    right: 0px;
  }
  .vantaggi .contenuto {
    position: absolute;
    width: 100%;
    padding-top: 200px;
    padding-left: 200px;
  }
  .vantaggi .box {
    position: relative;
    width: 80%;
    height: 502px;
    top: 400px;
    left: 10%;
    background: linear-gradient(111.16deg, rgba(255, 255, 255, 0.27) 0%, rgba(255, 255, 255, 0.53) 100%);
    box-shadow: 0px 4px 24px -1px rgba(0, 0, 0, 0.14);
    backdrop-filter: blur(35px);
    border-radius: 10px;
  }
  .vantaggi .box .contenuto {
    position: absolute;
    width: 30%;
    padding-top: 20px;
    padding-left: 20px;
  }
  .vantaggi .contenutobox {
      width: 40%;
      padding-top: 110px;
      padding-left: 60px;
      float: left;
  }
  .vantaggi .titolobox {
    font-family: Heebo;
    font-style: normal;
    font-weight: 300;
    font-size: 37px;
    line-height: 54px;
    color: #4F4F4F;
  }
  .vantaggi .titlebox {
    font-family: Heebo;
    font-style: normal;
    font-weight: bold;
    font-size: 18px;
    transform: rotate(270deg) translateY(500%) translateX(60%);
  }

  .vantaggi .descriptionbox {
    font-family: Heebo;
    font-style: normal;
    font-weight: 300;
    font-size: 30px;
    line-height: 50px;
    /* grey */
    color: #4F4F4F;
    width: 330px; /* 90% */
  }
  .vantaggi .grafico {
      width: 17%;
      padding-top: 100px;
      float: left;
  }
  .vantaggi .items {
      width: 25%;
      padding-top: 250px;
      float: left;
  }
  .vantaggi .item {
    padding-top: 16px;
    border-bottom: 1px solid #555;
    text-align: right;
  }



  @media (max-width: 880px) {
    .vantaggi .contenuto {
      padding-top: 160px;
      padding-left: 10px;
      padding-right: 10px;
      text-align: center;
    }
    .vantaggi .descriptionbox-mobile {
      font-family: Heebo;
      font-style: normal;
      font-weight: 300;
      font-size: 22px;
      line-height: 33px;
      color: #4F4F4F;
    }
    .vantaggi .titlebox-mobile {
      font-family: Heebo;
      font-style: normal;
      font-weight: bold;
      font-size: 16px;
      padding-top: 20px;
    }
    .contenutobox-mobile {
        padding: 20px;
    }
    .vantaggi .items-mobile {
        position: absolute;
        top: 371px;
    }
    .vantaggi .item-mobile {
      padding-top: 26px;
      border-bottom: 1px solid #555;
      text-align: right;
      width: 150px;
    }
    .vantaggi .box {
        height: 552px;
    }

  }

</style>
<div class="vantaggi" id="">
    <div class="object1"><img src="img/Ellipse7.png"></div>
    <div class="object2"><img src="img/Ellipse6.png"></div>
    <div class="contenuto">
      <div class="title">OUR PRODUCT</div>
      <div class="description">Why SAME is DIFFERENT from competitors</div>
      <div class="subdescription desktop">SAME Ai is more than a PaaS: we partner with customers, system integrators and<br>developers to build a next-gen knowledge management system for each organization.</div>
      <div class="subdescription mobile">SAME Ai is more than a PaaS: we partner with customers, system integrators and developers to build a next-gen knowledge management system for each organization.</div>
    </div>

    <div class="box desktop">
      <div class="contenutobox">
        <div class="descriptionbox">SAME PaaS is a middle layer that  drastically acceleratte the deployment of bespoke AI Meeting Assistants.</div>
        <div class="titlebox">AI MEETING Assistant</div>
      </div>
      <div class="grafico"><img src="img/Ellipse34.png"></div>
      <div class="items">
          <div class="item">Core MicroServices</div>
          <div class="item">API Gateway</div>
          <div class="item">Customer Layer</div>
      </div>
    </div>

    <div class="box mobile">
      <div class="contenutobox-mobile">
        <div class="descriptionbox-mobile">SAME PaaS is a middle layer that  drastically acceleratte the deployment of bespoke AI Meeting Assistants.</div>
        <div class="titlebox-mobile">AI MEETING Assistant</div>
      </div>
      <div class="grafico-mobile"><img src="img/Ellipse34.png"></div>
      <div class="items-mobile">
          <div class="item-mobile">Core MicroServices</div>
          <div class="item-mobile">API Gateway</div>
          <div class="item-mobile">Customer Layer</div>
      </div>
    </div>

</div>
<div class="separator"></div>
