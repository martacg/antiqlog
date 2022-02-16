
<?php include 'common/_settings.php'; ?>

<header id="header" class="header">
    <div class="header__content">
        <a href="#" title="ANTIQLOG." class="site-branding">
            <img src="assets/images/logo.png" alt="ANTIQLOG.">
        </a>

        <div class="mobile-menu">

            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__box">
                <?php 
                    foreach ($site_menu as $items => $items_value) {
                        echo "<li class='menu__item'><a href='#' title='". $items_value ."'>". $items_value ."</a><span class='line'></span></li>";
                    }
                ?>
            </ul>
        </div>

        </div>
        <ul class="primary-menu">
            <?php 
                foreach ($site_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a><span class='line'></span></li>";
                }
            ?>
        </ul>

        <ul class="header-elements">
            <li><a href="#" title="Search"><?php print_r($_iconSearch); ?></a></li>
            <li><a href="#" title="Cart"><?php print_r($_iconCart); ?></a></li>
            <li><a href="#" title="My Account"><?php print_r($_svg_user); ?></a></li>
        </ul>
   
    </div>
</header>