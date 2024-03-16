<?php
 header('Content-type: application/xml');
 include('perch/runtime.php');
 echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
perch_pages_navigation(array(
     'template' => 'sitemap.html',
     'flat' => true,
     'hide-extensions' => true
 ));
 echo '</urlset>';
 ?>