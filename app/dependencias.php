    <link rel="icon" type="image/ico" href="<?=DEP_IMG;?>favicon.png">
    <link rel="stylesheet" href="<?=DEP_CSS;?>b5/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=DEP_CSS;?><?=$css = ($_GET['view'] == 'home' || $_GET['view']== '') ? 'main.css' : $_GET['view'].'/main.css'; ?>">
    <?php if($_GET['view'] == 'home' || $_GET['view']== ''):?><link rel="stylesheet" href="<?=DEP_CSS;?>style.css"><?php endif?>
    <link rel="stylesheet" href="<?=DEP_CSS;?>aos/aos.css">

    <script src="<?=DEP_SCRIPT;?>font_awesome/all.js"></script>
    <script src="<?=DEP_SCRIPT;?>swal/swal.js"></script>
    <script src="<?=DEP_SCRIPT;?>jquery/jquery.js"></script>
    <script src="<?=DEP_SCRIPT;?>poper/popper.js"></script>
    <script src="<?=DEP_SCRIPT;?>b5/bootstrap.js"></script>
    <?php if($_GET['view'] == 'home' || $_GET['view']== ''):?><script src="<?=DEP_SCRIPT;?>particles/particles.js"></script><?php endif?>
    <script src="<?=DEP_SCRIPT;?>aos/aos.js"></script>
    <script src="<?=DEP_SCRIPT;?>smooth/smooth-scroll.min.js"></script>
    <!-- <script src="<?=DEP_SCRIPT;?>main.js"></script> -->
    <script src="<?=CONTROLLER;?>controller_sesion.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');

        if (document.querySelector('[data-easing]')) {
            var linear = new SmoothScroll('[data-easing="linear"]', {easing: 'linear'});

            var easeInQuad = new SmoothScroll('[data-easing="easeInQuad"]', {easing: 'easeInQuad'});
            var easeInCubic = new SmoothScroll('[data-easing="easeInCubic"]', {easing: 'easeInCubic'});
            var easeInQuart = new SmoothScroll('[data-easing="easeInQuart"]', {easing: 'easeInQuart'});
            var easeInQuint = new SmoothScroll('[data-easing="easeInQuint"]', {easing: 'easeInQuint'});

            var easeInOutQuad = new SmoothScroll('[data-easing="easeInOutQuad"]', {easing: 'easeInOutQuad'});
            var easeInOutCubic = new SmoothScroll('[data-easing="easeInOutCubic"]', {easing: 'easeInOutCubic'});
            var easeInOutQuart = new SmoothScroll('[data-easing="easeInOutQuart"]', {easing: 'easeInOutQuart'});
            var easeInOutQuint = new SmoothScroll('[data-easing="easeInOutQuint"]', {easing: 'easeInOutQuint'});

            var easeOutQuad = new SmoothScroll('[data-easing="easeOutQuad"]', {easing: 'easeOutQuad'});
            var easeOutCubic = new SmoothScroll('[data-easing="easeOutCubic"]', {easing: 'easeOutCubic'});
            var easeOutQuart = new SmoothScroll('[data-easing="easeOutQuart"]', {easing: 'easeOutQuart'});
            var easeOutQuint = new SmoothScroll('[data-easing="easeOutQuint"]', {easing: 'easeOutQuint'});
        }
    </script>