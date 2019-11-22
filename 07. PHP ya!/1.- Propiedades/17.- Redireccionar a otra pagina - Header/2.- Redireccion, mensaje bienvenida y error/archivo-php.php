<?php
if($_REQUEST["edad"]<18){
  header("Location: index.php?error=1");
} 
elseif($_REQUEST["edad"]>=18){
  header("Location: index.php?sucess=1");
}
elseif($_REQUEST["edad"]==" "){
  header("Location: index.php?warning=1");
}
?>