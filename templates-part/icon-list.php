<?php 
  $icon_list_data = get_query_var('icon_list_data');
?>
<?php if($icon_list_data){ ?>
    <li>
        <i class="fa-solid <?php echo $icon_list_data["font_awesome_icon_name"]; ?>"></i>
        <div>
            <h5> <?php echo $icon_list_data["title"]; ?> </h5>
            <p> <?php echo $icon_list_data["description"]; ?> </p>
        </div>
    </li>
<?php } ?>