<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">    
    <link rel="stylesheet" href="/ggs.css">    
    <script src="/myjs.js"></script>
    <script src="/js/smartTable.js"></script>
    <title><?= $title ?></title>
</head>

<body>
    <div class="container-fluid">        
        <div>  <?php include 'adminmenu.html.php'?></div>
        <?= $output ?>
    </div>


</body>

</html>