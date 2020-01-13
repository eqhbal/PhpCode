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
    <?php include("Top.php");?>
</head>
<body>
        <center>
            <form class="addmenuform" method="post" action="addmenu.php">
                <table class="menu">
                        <tr>
                            <td><input type="text" name="voorgerecht" placeholder="voorgerecht"/>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="nagerecht" placeholder="nagerecht"/>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="hoofdgerecht" placeholder="hoofdgerecht"/>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="dessert" placeholder="dessert"/>
                            </td> 
                            <td><button type="submit" name="btn-add">add</button></td>
                        </tr>
                    </table> 
            </form>
        <form class="menubekijken" method="post" action="menuconfig.php">
            <br>
            <table class="menukaart" >


                <tr>
                    <th><B>Nummer</B></th>
                    <th><B>Voorgerechten</B></th>
                    <th><B>Nagerechten</B></th>
                    <th><B>Hoofdgerechten</B></th>
                    <th><B>Desserts</B></th>
                    <th><B>Edit</B></th>
                    <th><B>Delete</B></th>
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
                    <td><a name="btn-editt" href="editmenu.php?id=<?php echo $rij['menunr'] ?>">edit</td>
                    <input name="menunr" type="hidden" value=<?php echo $rij['menunr']; ?>>
                    <td><button type="submit" name="btn-delete">Delete</button></td>
                </tr>
                <?php } ?>
            </table>
        </form>
        </center>    
</body>
</html>