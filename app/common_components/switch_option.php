    <?php
        if(isset($_POST['dashboard'])){
         include_once __DIR__ . '/components/dashboard.php';
        }

        if(isset($_POST['entradas'])){
         include_once __DIR__ . '/components/entradas.php';
        }

        if(isset($_POST['saidas'])){
         include_once __DIR__ . '/components/saidas.php';
        }

        if(isset($_POST['metas'])){
         include_once __DIR__ . '/components/metas.php';
        }

        if(isset($_POST['relatorios'])){
         include_once __DIR__ . '/components/relatorios.php';
        }

        if(isset($_POST['configuracoes'])){
         include_once __DIR__ . '/components/configuracoes.php';
        }
?>