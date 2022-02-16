<div id="featuredCategories" class="featured-categories">
    <div class="featured-categories__content">
    <?php
    $image="";
        foreach ($fourth_section_pages as $items => $items_value) {
                    
            echo "<div>";
                    
                foreach ($items_value as $item => $item_value) {
                    if($item == "image"){$image = $item_value;} 
                    if($item == "title"){$title = $item_value;} 
                }

                echo "
                <figure>
                    <img src='assets/" . $image . "' alt='".$title."' />
                    <figcaption><h3><a href='#'>" . $title . "</a></h3></figcaption>
                </figure>
                
            </div>";
        }
    ?>
    </div>
</div>