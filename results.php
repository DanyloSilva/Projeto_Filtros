<?php
include "conexao.php";

?>

<!DOCTYPE html>

<html>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<body>
<center>

    <table   style=" width: 70% ;"  border="1" class="table text-center table-bordered table-striped" >
   
            <thead  class="table-dark">
				
                <tr>
			<br>
                                <td>UF</td>
                                <td>Comarca</td>
                                <td >Instância</td>
                                <td>Nº Foro/Órgão</td>
                                <td >Foro/Órgão</td>
                                <td >Responsavel</td> 
                                <td >E-mail</td>
                                <td>Telefone</td>
								</tr>
                                <br>
		
    
      
<?php
  $unidade = $_POST ['unidades'];
   $busca = $_POST ['buscar'];
   $ordem = $_POST  ['ordem'];

 
   //teste de retorno 
    /*  echo "<br>";
      echo $ordem;
   echo "<br>";
  echo $unidade;
   echo "<br>";
    echo $busca;
  */?>


<thead >


 <?php
   $getqca = "SELECT  Q.uf,Q.comarca,U.unidades,Q.responsavel,Q.email,Q.telefone,Q.instancia,O.ordem
   FROM qca AS Q 
   JOIN ordem AS O ON O.id = Q.id_ordem and q.id_ordem ='$ordem'
   JOIN unidades AS U ON U.id = Q.id_unidade and Q.id_unidade  =
   '$unidade' and '$ordem' and Q.comarca like '%".$busca."%'";

$getqcaquerry = mysqli_query($conn, $getqca) ;

$row = mysqli_num_rows($getqcaquerry);




if($row > 0 ){
    while($getqcaline= mysqli_fetch_array($getqcaquerry)){



echo " 

                          
    
    
				
                <tr>
			
                <td>".$getqcaline['uf']."</td>
                <td >".$getqcaline['comarca']."</td>
              <td >".$getqcaline['ordem']."</td>
              <td >".$getqcaline['instancia']."</td>
              <td>".$getqcaline['unidades']."</td>
              <td >".$getqcaline['responsavel']."</td>
             <td >".$getqcaline['email']."</td>
              <td>".$getqcaline['telefone']."</td>
		
       
          ";


}
}

else{
    echo"<center> Nem um resultado encontrado...  </center>";
}


  ?>
              </thead >

   </table>
   </center>
<br>
<br>
<br>
<br>

<center><h5><a href="index.php"><button class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">VOLTAR</button></a></h5></center>

</body>


</html>