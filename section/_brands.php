<div id="brands" class="brands">

<figure>
    <img 
        src="assets/<?php  print_r($second_section->image) ?>"
        alt="<?php  print_r($second_section->title) ?>">
</figure>

<div class="brands__content">

        <div>
            <div class="brands__title">
                <h2>
                    <?php  print_r($second_section->title) ?>
                </h2>
            </div>
            <div class="brands__text mrgTop">
                <p>
                    <?php  print_r($second_section->content) ?>
                </p>
            </div>
        </div>

        <div>
            <div class="brands__logos">
                



            <?php $thumbs = glob("assets/images/2-logos/*.png"); ?>
            <?php
            if(count($thumbs)) {
            natcasesort($thumbs);
            foreach($thumbs as $thumb) {
            ?>
                <li class="item">
                    <a href="img/large/<?php echo basename($thumb) ?>">
                        <img src="<?php echo $thumb ?>" width="113px" height="100%" alt="" />
                    </a>
                </li> 

            <?php
                }} else {
                echo "Sorry, no images to display!";
                }
            ?>



            </div>
        </div>

</div>

</div>