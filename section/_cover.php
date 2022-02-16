<div id="cover" class="cover">

<figure>
    <img 
        src="assets/<?php  print_r($top_image_section->image) ?>"
        alt="<?php  print_r($top_image_section->title) ?>">
</figure>

<div class="cover__content">
    <div class="cover__title">
        <h1>
            <?php  print_r($top_image_section->title) ?>
        </h1>
    </div>
    <div class="cover__text mrgTop">
        <p>
            <?php  print_r($top_image_section->content) ?>
        </p>
    </div>
</div>
</div>