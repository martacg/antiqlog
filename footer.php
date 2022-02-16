
<footer class="footer">
    <div class="footer__content">
 
        <ul class="footer__box footer__categories">
            <?php 
                foreach ($footer_1_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a></li>";
                }
            ?>
        </ul>
        <ul class="footer__box footer__categories">
            <?php 
                foreach ($footer_2_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a></li>";
                }
            ?>
        </ul>
        <ul class="footer__box footer__categories">
            <?php 
                foreach ($footer_3_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a></li>";
                }
            ?>
        </ul>
        <ul class="footer__box footer__categories">
            <?php 
                foreach ($footer_4_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a></li>";
                }
            ?>
            
        </ul>
        <ul class="footer__box">

        </ul>
        <ul class="footer__box footer__categories">
            <?php 
                foreach ($footer_5_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a></li>";
                }
            ?>
        </ul>
        <ul class="footer__box footer__categories">
            <?php 
                foreach ($footer_6_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a></li>";
                }
            ?>
        </ul>
        <ul class="footer__box footer__categories">
            <?php 
                foreach ($footer_7_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a></li>";
                }
            ?>
        </ul>

        <div class="footer__box footer__box--wide mrgTop">
            <hr/>
            <div class="site-branding">
                <img src="assets/images/logo.png" alt="ANTIQLOG.">
            </div>
        </div>

        <ul class="footer__box footer__box--wide footer__box--inline footer__box--uppercase mrgTop">
            <?php 
                foreach ($footer_nav_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a></li>";
                }
            ?>
        </ul>
        <ul class="footer__box footer__box--wide footer__box--inline mrgTop">
            <li>Copyright &copy; <?php print_r(date('Y')); ?> ANTIQLOG. </li>
            <?php 
                foreach ($footer_disclaimer_menu as $items => $items_value) {
                    echo "<li><a href='#' title='". $items_value ."'>". $items_value ."</a></li>";
                }
            ?>
        </ul>

    </div>
</footer>