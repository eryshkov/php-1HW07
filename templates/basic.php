<?php $serializedData = ob_get_contents();
$data = unserialize($serializedData, ['allowed_classes' => true]);
ob_clean();
?>

    <!--Template goes here-->

<?php $templateText = ob_get_contents();
ob_end_clean();
return $templateText;
?>