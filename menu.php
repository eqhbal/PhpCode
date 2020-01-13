<?php
session_start();
include ("dbconnection.php");
if(!isset($_SESSION['email'])){
    header ('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include("Top.php"); ?>
</head>
<body>
    <form class="menubekijken">
        <br>
        <table class="menukaart">

            
            <tr>
                <th><B>Nummer</B></th>
                <th><B>Voorgerechten</B></th>
                <th><B>Nagerechten</B></th>
                <th><B>Hoofdgerechten</B></th>
                <th><B>Desserts</B></th>
            </tr>
            <?php
                        $vraag = "SELECT * FROM menu";
                        $resultaat = $conn->query($vraag);
                        while ($rij = mysqli_fetch_array($resultaat)){
            ?>
            <tr>
                <td><?php echo $rij["menunr"];; ?></td>
                <td><?php echo $rij["voorgerecht"]; ?></td>
                <td><?php echo $rij["nagerecht"]; ?></td>
                <td><?php echo $rij["hoofdgerecht"]; ?></td>
                <td><?php echo $rij["dessert"]; ?></td>
            </tr>
            <?php } ?>
        </table>
    </form>
</body>
</html>