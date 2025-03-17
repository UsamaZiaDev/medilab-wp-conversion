<?php 
    $data = get_query_var("doctor_card_data");
?>

<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
    <div class="team-member d-flex align-items-start">
        <div class="pic">
            <img src="<?php echo $data["image"];?>" class="img-fluid" alt="">
        </div>
        <div class="member-info">
            <h4><?php echo $data["name"];?></h4>
            <span><?php echo $data["designation"];?></span>
            <p><?php echo $data["short_bio"];?></p>
            <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
        </div>
    </div>
</div>