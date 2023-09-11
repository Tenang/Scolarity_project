<?php
 require_once("conf.php");

 $req="select * from etudiant";
 $ps=$pdo->prepare($req);
 $ps->execute();
 echo($ps->execute())
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
    <thead><tr>
    <th>code</th> <th>Nom</th><th>Prenom</th> <th>Email</th> <th>Photo</th></tr></thead>
    <tbody>
    <?php
        while($et=$ps->fetch()){?>

<?php }?>
 <tr>
    <td><?php echo ($et['CODE']) ?></td>
    <td><?php echo ($et['NOM'] )?></td>
    <td><?php echo ($et['PRENOM']) ?></td>
    <td><?php echo ($et['EMAIL']) ?></td>
    <td><?php echo ($et['PHOTO']) ?></td>
 </tr>
    </tbody>
</table>
</body>
</html>