<?php

    require_once('lib.php');

    $con = new ConectorBD();

    if($con->initConexion('agenda_db')=='OK'){
        $ok= true;

        $user01['email'] ='robertsvx@gmail.com';
        $user01['nombre'] ='Roberto Saavedra Vaca';
        $user01['password'] =md5('a123*');
        $user01['fechaNacimiento'] ='1985-03-27';
        $user01['estado'] ='1';
        if(!$con->insertData('usuarios',$user01)){
            $ok=false;
            echo "<h2 align='center'>No se ha podido registrar el usuario ".$user01['nombre']."</h2>";
        }

        $user02['email'] ='drojas@gmail.com';
        $user02['nombre'] ='Darling Rojas Gutierrez';
        $user02['password'] =md5('a123*');
        $user02['fechaNacimiento'] ='1990-07-01';
        $user02['estado'] ='1';
        if(!$con->insertData('usuarios',$user02)){
            $ok=false;
            echo "<h2 align='center'>No se ha podido registrar el usuario ".$user02['nombre']."</h2>";
        }

        $user03['email'] ='p_lluvia@gmail.com';
        $user03['nombre'] ='Maria Rosario Moron Cespedes';
        $user03['password'] =md5('a123*');
        $user03['fechaNacimiento'] ='1988-12-03';
        $user03['estado'] ='1';
        if(!$con->insertData('usuarios',$user03)){
            $ok=false;
            echo "<h2 align='center'>No se ha podido registrar el usuario ".$user03['nombre']."</h2>";
        }

        if($ok){
            echo "<h2 align='center'>Usuarios Registrados correctamente.</h2>";
        }
        
        $con->cerrarConexion();

    }else{
        echo "Se presentó un error en la conexión";   
    }

    
 ?>
