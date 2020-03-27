<?php
include 'conexao.php';
function delete($conexao, $nome){
   
}

$id = isset($_GET['nome']) && ctype_digit($_GET['nome']) ? $_GET['nome'] : null;
if(delete($conexao, $id)){
   header('alterar.php');
}else{
   echo 'erro ao excluír o registro';
}
?>