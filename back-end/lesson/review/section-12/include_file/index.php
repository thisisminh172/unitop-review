<?php
	require 'lib/data.php';
	require 'inc/header.php';
?>
<div id="content">
    INDEX
    <?php
    	$data = array(1, 2, 4, 6);
    	show_array($data);
    ?>
</div>
<?php
require 'inc/footer.php';
?>