<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página Oficial de Error de Capa 8">
    <?php 
        require_once 'app/config.php';
        require_once 'app/dependencias.php';
        require_once 'app/router.php';    
    ?>
</head>
<body>
    <div id="particles-js"></div>
    <?php if($_GET['view'] == 'home' || $_GET['view']== '') { require_once 'view/main/loader.php'; } else { require_once 'view/main/'.$_GET['view'].'/loader.php'; }?>
    <div class="d-flex flex-column justify-content-between" style="min-height: 100vh; max-height: 100vh;">
        <div>
            <?php Router::direccion(); ?>
        </div>
        <?php require_once 'view/main/'.$footer = ($_GET['view'] == 'home' || $_GET['view']== '') ? "footer.php" : $_GET['view'].'/footer.php'; ?>
    </div>
    <script src="<?=DEP_SCRIPT;?>main.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>