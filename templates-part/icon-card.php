<?php 
    $CardsData =  get_query_var("icon_card_data");
    
    if($CardsData["font_awesome_icon_name"] || $CardsData["title"] || $CardsData["description"]  ){ ?>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
        <div class="icon">
          <i class="fas <?php echo $CardsData["font_awesome_icon_name"] ?>"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3><?php echo $CardsData["title"] ?></h3>
        </a>
        <p><?php echo $CardsData["description"] ?></p>
        <!-- <a href="#" class="stretched-link"></a> -->
        </div>
      </div>
  <?php  } ?>