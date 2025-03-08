    <?php
            $cardsData = get_query_var('hero_card_data');
    ?>          
    <div class="col-xl-4 d-flex align-items-stretch">
        <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
        <i class="bi <?php echo $cardsData["font_awesome_icon_name"] ?>"></i>
        <h4> <?php echo $cardsData["card_title"] ?></h4>
        <p> <?php echo $cardsData["card_short_description"] ?></p>
        </div>
    </div>