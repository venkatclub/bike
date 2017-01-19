<?php
?>

<div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="<?php echo get_theme_file_uri('img/bike1.jpg'); ?>" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_theme_file_uri('img/bike2.jpg'); ?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_theme_file_uri('img/bike3.jpg'); ?>" alt="Third slide">
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
