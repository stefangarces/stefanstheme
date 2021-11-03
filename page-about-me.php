<?php
get_header();

$imageArray = get_field('page_image');
$imageKramerica = $imageArray['sizes']['large'];
$title = get_field('page_title');
$description = get_field('about_me');
?>

<section class="red-bg" id="hero">
<div class="container">
  <div class="d-flex flex-row-reverse justify-content-center p-4">
    <div class="row d-flex flex-row-reverse">
    <div class="col-lg-11">
            <img class="img-fluid" src="<?php echo $imageKramerica; ?>">
          </div>
      </div>
      <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-1"><?php echo $title; ?></h1>
        <?php echo $description; ?>
        <h1 class="display-1"></h1>
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