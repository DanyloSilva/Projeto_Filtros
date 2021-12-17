<?php
include "conexao.php";

?>

<!DOCTYPE html>

<html>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
<center>
<img src="img/qca.jpg"  style=" width: 50% ;" class="w3-round" alt="Norway">

</center>


<center>

    <form name = "search_form" method="post" action="results.php">

    <a>Instância:</a>
   
   
    <select class="dropdown" name = "ordem">
    <option value="">
        Instância
    </option>

    <?php
    
    $getordem = "select * from ordem";
    $getordem_query =  mysqli_query($conn,$getordem);
while ($getordemline = mysqli_fetch_array($getordem_query)){

    $ordem = $getordemline ['ordem'];
    $id_ordem = $getordemline ['id_ordem'];
    echo "<option value = '$id_ordem'> $ordem  </option>";
}
    
    ?>
</select>
    

<label>Foro/Órgão: </label> 
 
<select class="dropdown" name = "unidades">
    <option value="">
    Foro/Órgão

    </option>

    <?php
    
    $getunidades = "select * from unidades";
    $getunidades_query =  mysqli_query($conn,$getunidades);
while ($getunidadesline = mysqli_fetch_array($getunidades_query)){

    $unidades = $getunidadesline ['unidades'];
    $unidade_id = $getunidadesline ['id_unidade'];
    echo "<option value = '$unidade_id'> $unidades  </option>";
}
    
    ?>
</select>


<a>Buscar comarca:</a> 

    <input  class="form" type="text" name="buscar" placeholder="comarca"/> <input type="submit" value="Buscar" >



</form>

</center>

</body>


</html>