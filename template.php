<html>
    <head>
        <meta charset="utf-8" />
        <title>Gerenciador de Tarefas</title>
     <!-- <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>-->
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <h1>Gerenciador de Tarefas</h1>
        <?php include('formulario.php'); ?>

        <?php if ($exibir_tabela) : ?>
                <?php include('tabela.php'); ?>
        <?php endif; ?>

    </body>
</html>