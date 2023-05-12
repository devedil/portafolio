<?php
$masterUse = "Admin";

session_start();
if(isset($_SESSION['usuario']) && ($_SESSION['usuario'] == $masterUse)){

}else if(isset($_SESSION['usuario'])){
 
}else{
    
}
?>