<?php
get_header();

$title = get_field('contact_title');
$githubIcon = get_field('github_icons');
$linkedinIcon = get_field('linkedin_icons');
$emailIcon = get_field('email_icons');
?>

<section class="red-bg" id="hero">
<div class="container">
  <div class="d-flex flex-row-reverse justify-content-center p-4">
      <div class="col-lg-8 text-light d-flex flex-row justify-content-center align-items-center">
        <h1 class="display-1"><?php echo $title; ?></h1>
      </div>
      <br>
      <div class="col-lg-6 text-light d-flex flex-row justify-content-center align-items-center">
        <a class="bi bi-github"  href="<?php echo $githubIcon; ?>"></a>
        <a class="bi bi-linkedin" href="<?php echo $linkedinIcon; ?>"></a>
        <a class="bi bi-envelope-fill" href="<?php echo $emailIcon; ?>"></a>
        </div>
    </div>
  </div>
</div>
</section>

<?php
get_footer();
?>