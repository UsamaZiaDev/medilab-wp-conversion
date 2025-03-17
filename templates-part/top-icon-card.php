<?php 
	$icon_cards_data = get_query_var('icon_cards_data');
?>

		
	<div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
		<i class="fa-solid  <?php echo $icon_cards_data["font_awesome_icon_name"] ?>"></i>
		<div class="stats-item">
			<span data-purecounter-start="0" data-purecounter-end=" <?php echo $icon_cards_data["title"] ?>" data-purecounter-duration="1" class="purecounter"></span>
			<p> <?php echo $icon_cards_data["description"] ?> </p>
		</div>
	</div>