<div id="featuredProducts" class="featured-products">
        <div class="featured-products__content">
            <?php
                echo'<div>
                    <figure><img src="assets/images/logo-black.png" alt="ANTIQLOG."/></figure>
                    <h2><span>Productos</span> <span>destacados</span></h2>
                </div>';
                foreach ($first_section_pages as $items => $items_value) {
                    
                    echo "<div>";
                    
                    foreach ($items_value as $item => $item_value) {
                        
                        if($item == "image"){
                            echo "<figure><img src='assets/" . $item_value . "' alt='".$imgAlt."' /></figure>";
                        }
                        if($item == "title"){
                            $imgAlt=$item_value;
                            echo "<h3><a href='#'>" . $item_value . "</a></h3>";
                        }
                        if($item == "description"){
                            echo "<p>" . $item_value . "</p>";
                        }

                    }

                    echo '</div>';
                }
            ?>
        </div>
    </div>