<?php $serializedData = ob_get_contents();
$data = unserialize($serializedData, ['allowed_classes' => false]);
ob_clean();
?>

    <!--Template goes here-->
<?php var_dump($data); ?>

<?php $templateText = ob_get_contents();
ob_end_clean();
return $templateText;
?>