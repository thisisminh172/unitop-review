<?php
// show_array($list_post);
?>

<div id="content">
    <h1>Tin tức</h1>
    
        <?php  
        if(!empty($list_post)){
            ?>
            <ul class="list-post" style="list-style-type:none;">
        <?php
        foreach($list_post as $item){ ?>
            <li>
            <a href="" class="post-title"><?php echo $item['post-title'] ?></a>
            <p class="post-desc"><?php echo $item['post-desc'] ?></p>
        </li>
        <?php }
        ?>
    <?php } ?>
        
    </ul>
</div>