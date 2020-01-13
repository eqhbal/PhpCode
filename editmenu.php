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
        <center>
            <form class="addmenuform" method="post" action="menuconfig.php">
                <table class="menu">
                    <?php
                    
                    $menunr = $_GET['id']; 
                        
                        $vraag = "SELECT * FROM menu WHERE menunr = '$menunr'";
                        $resultaat = $conn -> query($vraag);
                    
                        if ($resultaat->num_rows > 0) {
                            while($rij = $resultaat->fetch_assoc()){
                            
                        ?>
                        <tr>
                            <input type="hidden" name="menunr">
                            <td><input type="text" name="voorgerecht" placeholder="voorgerecht" value=<?php echo $rij["voorgerecht"];?>>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="nagerecht" placeholder="nagerecht" value=<?php echo $rij["nagerecht"];?>>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="hoofdgerecht" placeholder="hoofdgerecht" value=<?php echo $rij["hoofdgerecht"];?>>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="dessert" placeholder="dessert" value=<?php echo $rij["dessert"];?>>
                            </td> 
                            <td><button type="submit" name="btn-edit">edit</button></td>
                        </tr>
                    <?php } 
                    } ?>
                    </table> 
            </form>
        </center>
</body>
</html>