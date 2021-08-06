

  <style type="text/css">
    .aziendaslidecontainer {
      position: relative;
      top: 300px;
    }
    .aziendaslide {
        height: 350px;
    }
    .aziendaitemslide {
      width: 300px !important;
      height: 203px !important;
      background: linear-gradient(111.16deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 100%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 0px 4px 24px -1px rgba(0, 0, 0, 0.14);
      backdrop-filter: blur(13px);
      border-radius: 10px;
    }
    .aziendaslide .icon {
      font-family: Font Awesome 5 Pro;
      font-style: normal;
      font-weight: 900;
      font-size: 46px;
      line-height: 46px;
      color: #9242FC;
      padding-left: 13px;
      padding-top: 13px;
    }
    .aziendaslide .title {
      font-family: Heebo;
      font-style: normal;
      font-weight: 600;
      font-size: 22px;
      line-height: 32px;
      text-transform: capitalize;
      color: #9242FC;
      padding-left: 13px;
    }
    .aziendaslide .description {
      font-family: Heebo;
      font-style: normal;
      font-weight: normal;
      font-size: 14px;
      line-height: 21px;
      color: #545454;
      width: 280px;
      padding-left: 13px;
    }
    .aziendaslidecontainer .slick-dotted.slick-slider {
        margin-bottom: 30px;
        height: 206px;
    }
  </style>

  <div class="aziendaslidecontainer">
    <section class="aziendaslide slider">
      <div class="aziendaitemslide">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="title">Bel servizio</div>
        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page ...</div>
      </div>
      <div class="aziendaitemslide">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="title">Bel servizio</div>
        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page ...</div>
      </div>
      <div class="aziendaitemslide">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="title">Bel servizio</div>
        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page ...</div>
      </div>
      <div class="aziendaitemslide">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="title">Bel servizio</div>
        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page ...</div>
      </div>
      <div class="aziendaitemslide">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="title">Bel servizio</div>
        <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page ...</div>
      </div>
    </section>
  </div>

  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".aziendaslide").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>
