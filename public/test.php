<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $result = ['id'=>'1', 'type'=>"1318", "recordertype"=>'2' ];

         $tahotypes = [];
         foreach ($result as $tahotype) {
             $tahotypes[] = [
                'id' => $tahotype['id'],                
                'type' => $tahotype['type'],             
                 'recordertype' => $tahotype['recordertype']             
                ];
                
            }


    ?>
</body>
</html>