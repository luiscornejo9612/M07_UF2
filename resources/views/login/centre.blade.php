<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>El teu emial és {{$email}}</h2>
    <h3> Llista de professors </h3>
    <table>
        <tr>
            <td> Id </td>
            <td> Nom </td>
            <td> Email </td>
            <td> Curs </td>
        </tr>
        <?php 
            foreach($professors as $professor) {  
        ?>        
        <tr>
            <td><?php echo $professor['id']; ?></td>
            <td><?php echo $professor['nom']; ?></td>
            <td><?php echo $professor['email']; ?></td>
            <td><?php echo $professor['curs']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <a href="/sigin"> Volver </a>
</body>
</html>