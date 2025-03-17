<?php
    $data = get_query_var("faq_card_data");
?>

<div class="faq-item">
    <h3><?php echo $data["title"]; ?></h3>
    <div class="faq-content">
    <p> <?php echo $data["description"]; ?> </p>
    </div>
    <i class="faq-toggle bi bi-chevron-right"></i>
</div>