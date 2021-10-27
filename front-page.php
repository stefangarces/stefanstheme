<?php
get_header();

$title = get_field('page_title');
?>

<section class="red-bg" id="hero">
<div class="container">
  <div class="d-flex flex-row-reverse justify-content-center p-4">
    <div class="row d-flex flex-row-reverse">
      <div class="col-lg-6">
        <img class="img-fluid" src="">
      </div>
      <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-1"><?php echo $title; ?></h1>
        <h1 class="display-1"></h1>
       <button type="button" class="btn btn-outline-light">
       <a style="text-decoration: none; color: white"href=""> Hello World
        </a>
        </button>
      </div>
    </div>
  </div>
</div>
</section>

<?php
get_footer();
?>
