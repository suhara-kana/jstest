<?php require '../connect.php'; 

if( !empty( $_POST['login'])){

  $sql = "select count(*) from customer where login=?";
  $stmt = $pdo->prepare( $sql );
  $stmt->execute([ $_POST['login']] );
  $response = $stmt->fetchColumn();
  echo $response ;
}