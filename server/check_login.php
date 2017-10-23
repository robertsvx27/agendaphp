<?php

    require_once('lib.php');
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    $con = new ConectorBD();
    
    if($con->initConexion('agenda_db')=='OK'){
        $condicion = "email='".$username."' and password=md5('".$password."')";
        $tabla = ['usuarios'];
        $campos = ['*'];
        $result = $con->consultar($tabla, $campos, $condicion);
        $row_cnt = $result->num_rows;               
        if ($row_cnt>0){
            $_SESSION['token']= md5($username).md5($password);            
            $datos = array(
                'msg' => 'OK');
        }
        else 
            $datos = array(
                'msg' => 'Usuario/Password Incorrecto.');            
      
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($datos, JSON_FORCE_OBJECT);
    }
 ?>
