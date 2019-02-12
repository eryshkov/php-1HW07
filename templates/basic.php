<?php ob_start();?>

<!--Template goes here-->

<?php $templateText = ob_get_contents();
ob_end_clean();
return $templateText;
?>
