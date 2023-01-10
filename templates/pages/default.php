<?php 
$pageData = pageData();
 ?>
 
<?php 
foreach ($pageData['sections'] as $section) {
	include "templates/modules/$section[type]/template.php";
} 
?>