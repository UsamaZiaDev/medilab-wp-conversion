<?php 
    $data = get_query_var("testimonial_card_data");
?>

<div class="swiper-slide">
    <div class="testimonial-item">
        <div class="d-flex">
            <img src="<?php echo $data['image'] ?>" class="testimonial-img flex-shrink-0" alt="">
        </div>
        <div>
            <php?> <?php echo $data["name"]; ?> </h3>
            <h4> <?php echo $data["designation"]; ?> </h4>
            <div class="stars">
                <?php 
                    for($i = 0; $i < $data["start_rating"]; $i++){
                        echo '<i class="bi bi-star-fill"></i>';
                    }
                ?>
            </div>
        </div>
        <p>
            <i class="bi bi-quote quote-icon-left"></i>
                <span> <?php echo $data["feedback"]; ?> </span>
            <i class="bi bi-quote quote-icon-right"></i>
        </p>
    </div>
</div>