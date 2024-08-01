<?php
 //variable conexion
function conectar() {
    $conn= mysqli_connect ("localhost","root","","bdtecnoisha"); 
    if(!$conn){
        die("No puede conectarse ".mysqli_error());
    }
    return $conn; 
}

//funcion login administrador
function validarAdmin($conn,$admin,$clave){
    $sql="SELECT * FROM administradores WHERE nomeAdmin='$admin' AND passwd='$clave'";
    $resu=mysqli_query($conn,$sql);
    $nFilas=mysqli_num_rows($resu);
    return $nFilas;
}

//método para agregar registros
function agregarProducto($cod,$nom,$pre,$fot,$cat,$conn){
    $sql="insert into Productos values('$cod','$nom','$pre','$fot','$cat')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para eliminar registros
function eliminarProducto($cod,$conn){
    $sql="delete from Productos where CodProd='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para actualizar todos los campos de la tabla
function actualizarTodoProducto($cod,$nom,$pre,$fot,$cat,$conn){
    $sql="update Productos set NomProd='$nom', PreProd='$pre', FotoProd='$fot', codcate='$cat' where CodProd='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para actualizar registros sin foto
function actualizarProducto($cod,$nom,$pre,$cat,$conn){
    $sql="update Productos set NomProd='$nom', PreProd='$pre', codcate='$cat' where CodProd='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para buscar registro
function buscarProducto($cod,$conn){
    $sql="select NomProd, PreProd, FotoProd, codcate from Productos where CodProd='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
    
//método para listar registros
function listarProducto($conn){
    $sql="select CodProd, NomProd, PreProd, FotoProd, codcate from Productos"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}


function Createproducto($codprod,$nomprod,$precprod,$fotoprod,$codcate,$conn){
    $sql="insert into productos values('$codprod','$nomprod','$precprod','$fotoprod','$codcate')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
 
function Deleteproducto($codprod,$conn){
    $sql="delete from productos where codprod='$codprod'";    
     mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//Tabla categoria 
//método para agreegar registros
function agregarCategoria($cod,$nom,$desc,$conn){
    $sql="insert into categoria values('$cod','$nom','$desc' )";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para eliminar registros 
function eliminarCategoria($cod,$conn){
    $sql="delete from categoria where codcate='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para actualizar registros sin foto
function actualizarCategoria($cod,$nom,$desc,$conn){
    $sql="update categoria set nomcate='$nom', descate='$desc' where codcate='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para buscar registro
function buscarCategoria($cod,$conn){
    $sql="select nomcate, descate from categoria where codcate='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
    
//método para listar registros
function listarCategoria($conn){
    $sql="select codcate, nomcate, descate from categoria";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
//metodo para listar tecnicos
function listarTecnico($conn){
    $sql="select IDTecnico, nomtec, apetec, IDServicio, fototec from tecnicos";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
//método para agreegar tecnicos
function agregarTecnicos($cod,$nom,$ape,$cser,$fot,$conn){
    $sql="insert into tecnicos values('$cod','$nom','$ape','$cser','$fot')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para eliminar tecnicos 
function eliminarTecnico($cod,$conn){
    $sql="delete from tecnicos where IDTecnico='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para agreegar registros
function agregarServicio($cod,$nom,$conn){
    $sql="insert into servicios values('$cod','$nom')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para eliminar servicios 
function eliminarServicio($cod,$conn){
    $sql="delete from servicios where IDServicio='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function listarServicio($conn){
    $sql="select IDServicio, descripcion from servicios";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
function buscarServicio($cod,$conn){
    $sql="select descripcion from servicios where IDServicio='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
 //método para buscar tecnico
function buscarTecnico($cod,$conn){
    $sql="select nomtec, apetec, IDServicio,fototec from tecnicos where IDTecnico='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
function actualizarTecnico($cod,$nom,$ape,$codserv,$fot,$conn){
    $sql="update tecnicos set nomtec='$nom', apetec='$ape', IDServicio='$codserv',fototec='$fot' where IDTecnico='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para actualizar registros 
function actualizarServicio($cod,$nom,$conn){
    $sql="update servicios set descripcion='$nom' where IDServicio='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para agreegar registros
function agregarUsuario($nom,$pass,$conn){
    $sql="insert into usuario values('','$nom','$pass')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para eliminar servicios 
function eliminarUsuario($cod,$conn){
    $sql="delete from usuario where codusu='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function listarUsuario($conn){
    $sql="select codusu, nomeusu, passwd from usuario";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
function actualizarUsuario($cod,$nom,$passwd,$conn){
    $sql="UPDATE usuario SET nomeusu='$nom', passwd='$passwd' WHERE codusu='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//funcion login administrador
function validarUser($conn,$user,$clave){
    $sql="SELECT * FROM usuario WHERE nomeusu='$user' AND passwd='$clave'";
    $resu=mysqli_query($conn,$sql);
    $nFilas=mysqli_num_rows($resu);
    return $nFilas;
}

function buscarUsuario($cod,$conn){
    $sql="select nomeusu, passwd from usuario where codusu='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}


//método para agreegar registros
function agregarAdmin($nom,$pass,$conn){
    $sql="insert into administradores values('','$nom','$pass')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para eliminar servicios 
function eliminarAdmin($cod,$conn){
    $sql="delete from administradores where codAdmin ='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function listarAdmin($conn){
    $sql="select codAdmin, nomeAdmin, passwd from administradores";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
function actualizarAdmin($cod,$nom,$passwd,$conn){
    $sql="UPDATE administradores SET nomeAdmin='$nom', passwd='$passwd' WHERE codAdmin='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function buscarAdmin($cod,$conn){
    $sql="select nomeAdmin, passwd from administradores where codAdmin='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}


//método para agreegar registros
function agregarConsumidor($nome,$ape,$tdoc,$dist,$ndoc,$dir,$telf,$correo,$conn){
    $sql="insert into consumidorrec values('','$nome','$ape','$tdoc','$dist','$ndoc','$dir','$telf','$correo' )";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
}
function agregarReclamo($cons,$codpe,$tipb,$tip,$monto,$msg,$conn){
    

    $sql="insert into detallereclamo values('$cons','$codpe','$tipb','$tip','$monto','$msg' )";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
}


    
//método para listar registros
function Buscarconsumidor($conn,$cod){
    $sql="select codrec from consumidorrec where nroDoc='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
function Listarconsumidor($conn){
    $sql="select * from consumidorrec";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function listarReclamo($conn){
    $sql="select * from detallereclamo";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function listarProductoPorTipo($conn,$codTipo){
    $sql="select CodProd, NomProd, PreProd, FotoProd, codcate from productos where codcate='$codTipo'"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function listarNomeCategoria($conn){
    $sql="select codcate,nomcate from categoria group by nomcate order by codcate";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}


function listarDescCategoria($conn,$desc){
    $sql="select descate from categoria where nomcate='$desc'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function listarProdCate($conn,$codc){
    $sql="SELECT CodProd, NomProd, PreProd, FotoProd from productos p inner join categoria c on p.codcate=c.codcate where c.descate='$codc'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function listarPorNomeCategoria($conn,$cod){
    $sql="select codcate,nomcate from categoria where codcate='$cod' group by nomcate order by codcate";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
?>

