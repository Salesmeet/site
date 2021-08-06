
<!-- ***************************** AZIENDE ********************************************************** -->

<style>
  /* SKILLS */
  .aziende {
    background-color: #FFF;
    width: 100%;
    /* height: 1100px; */
    height: 800px;
  }
  .aziende .object1 {
    position: absolute;
    padding-top: 30px;
  }
  .aziende .object2 {
    position: absolute;
    right: 0px;
  }
  .aziende .object3 {
    position: absolute;
    right: 0px;
  }
  .aziende .contenuto {
    position: absolute;
    width: 100%;
    text-align: right;
    padding-top: 100px;
  }
  .aziende .contenutoalign {
    padding-right: 200px;
  }
  @media (max-width: 480px) {
    .aziende .contenuto {
      padding-top: 100px;
      padding-left: 10px;
      padding-right: 10px;
      text-align: center;
    }
    .aziende .contenutoalign {
        padding-right: 10px;
    }
  }
</style>
<div class="aziende" id="howitworksdiv">
    <div class="object1"><img src="img/Ellipse10.png"></div>
    <div class="object3"><img src="img/Ellipse12.png"></div>
    <div class="object2"><img src="img/Ellipse11.png"></div>
    <div class="contenuto">
      <div class="title contenutoalign">How it works</div>
      <div class="description contenutoalign">A skills at your service</div>
      <div class="subdescription contenutoalign">We provide the first platform as a service for creating your personalized AI ... </div>
    </div>

    <?php include("section/azienda_slide.php") ?>

</div>
<div class="separator"></div>
