<footer>
            <div class="container">
                <div class="section_footer">
                    <div class="row">
                        <div class="col-lg-3">
                        <?php if ( is_active_sidebar( 'footer-sidebar_one' ) ) : ?>
                            <div id="footer-sidebar_one" class="footer-sidebar">
                                <?php dynamic_sidebar( 'footer-sidebar_one' ); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-3">
                        <?php if ( is_active_sidebar( 'footer-sidebar_two' ) ) : ?>
                            <div id="footer-sidebar_two" class="footer-sidebar">
                                <?php dynamic_sidebar( 'footer-sidebar_two' ); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-3">
                        <?php if ( is_active_sidebar( 'footer-sidebar_three' ) ) : ?>
                            <div id="footer-sidebar_three" class="footer-sidebar">
                                <?php dynamic_sidebar( 'footer-sidebar_three' ); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-3">
                        <?php if ( is_active_sidebar( 'footer-sidebar_four' ) ) : ?>
                            <div id="footer-sidebar_four" class="footer-sidebar">
                                <?php dynamic_sidebar( 'footer-sidebar_four' ); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
document.addEventListener('DOMContentLoaded', function() {
    var cartIcon = document.querySelector('.cart-icon');
    var miniCart = document.querySelector('.mini-cart');

    if (cartIcon && miniCart) {
        cartIcon.addEventListener('click', function(e) {
            e.preventDefault();
            if (!miniCart.classList.contains('visible')) {
                miniCart.classList.add('visible');
                miniCart.style.maxHeight = miniCart.scrollHeight + 'px';
            } else {
                miniCart.classList.remove('visible');
                miniCart.style.maxHeight = null;
            }
        });

        document.addEventListener('click', function(e) {
            if (!cartIcon.contains(e.target) && !miniCart.contains(e.target)) {
                miniCart.classList.remove('visible');
                miniCart.style.maxHeight = null;
            }
        });
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>