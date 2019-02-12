<?php $data = ob_get_contents();
ob_clean();
?>

<!--Template goes here-->
<?php echo $data.'==';?>

<?php $templateText = ob_get_contents();
ob_end_clean();
return $templateText;
?>