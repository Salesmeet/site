

  <style type="text/css">
    .skillsslidecontainer {
      position: relative;
      top: 400px;
    }
    .skillsslide {
        height: 350px;
    }
    .slider {
        width: 80%;
        margin: 0px auto;
    }
    .slick-slide {
      margin: 0px 20px;
    }
    .slick-prev:before,
    .slick-next:before {
      color: black;
    }
    .slick-slide {
      transition: all ease-in-out .3s;
      /* opacity: .2; */
    }
    .slick-active {
      /* opacity: .5; */
    }
    .slick-current {
      /* opacity: 1; */
    }
    .itemslide {
      width: 455px !important;
      height: 303px !important;
      background: linear-gradient(111.16deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 100%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 0px 4px 24px -1px rgba(0, 0, 0, 0.14);
      backdrop-filter: blur(13px);
      border-radius: 10px;
      border-top: 1px solid rgba(75, 67, 255, 0.7);
      border-right: 1px solid rgba(198, 77, 255, 0.52);
      border-left: 1px solid rgba(110, 254, 254, 0.458015);
      border-bottom: 1px solid rgba(95, 222, 184, 0.63);
    }
    .skillsslide .icona {
    }
    .skillsslide .icona img {
      width: 100px;
      padding: 20px;
    }
    .skillsslide .title {
      font-family: Heebo;
      font-style: normal;
      font-weight: bold;
      font-size: 19px;
      line-height: 28px;
      text-transform: uppercase;
      color: #4F4F4F;
      padding-left: 60px;
    }
    .skillsslide .description {
      font-family: Heebo;
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      line-height: 21px;
      width: 350px;
      color: #4F4F4F;
      padding-left: 60px;
    }
    .skillsslidecontainer .slick-dotted.slick-slider {
        margin-bottom: 30px;
        height: 306px;
    }
    /* mobile */
    @media (max-width: 880px) {
      .skillsslidecontainer .slick-dotted.slick-slider {
          height: 406px;
      }
      .slider {
          width: 85%;
      }
      .itemslide {
          width: 300px !important;
          height: 403px !important;
      }
      .skillsslide .description {
          width: 270px;
          padding-left: 20px;
      }
    }
  </style>

  <div class="skillsslidecontainer">
    <section class="skillsslide slider">
      <?php include("section/skills_box.php") ?>
    </section>
  </div>

  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".skillsslide").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>
