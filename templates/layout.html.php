<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="/myjs.js"></script>
    <script src="/js/smartTable.js"></script>
    <title><?= $title ?></title>
</head>

<body>
    <div class="container-fluid">

        
        <?php include 'adminmenu.html.php'?>
        <?= $output ?>

    </div>


</body>

</html>