<?php include('perch/runtime.php'); ?>
<?php perch_layout('heads/main-head'); ?>
<?php perch_layout('headers/homepage-header'); ?>
<main class="main-content homepage-main-content" id="main-content">
	  <?php perch_content('Homepage Services Link Section'); ?>
		<?php perch_content("Homepage Gallery"); ?>
		<?php perch_content("Homepage Testimonials"); ?>
		<?php perch_content("Main Contact Form"); ?>
</main>
<?php perch_layout('footers/main-footer'); ?>
<?php perch_layout('footer-ends/homepage-footer-end'); ?>
