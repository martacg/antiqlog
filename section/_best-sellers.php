<div id="bestSellers" class="best-sellers">
    <div class="best-sellers__content">

        <div class="best-sellers__title">
            <h2>
                Productos más vendidos
            </h2>
        </div>

        <div class="best-sellers__products">
            <?php 

                foreach ($third_section_pages as $items => $items_value) {
                    
                    echo "<div class='item'>";
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
</div>