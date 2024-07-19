

<?php
/*isso e um comentario*/

if(isset($_GET["bt_Nome"])){
    $Nome = $_GET["bt_Nome"];
    $Email= $_GET["bt_Email"];
    $Telefone= $_GET["bt_Telefone"];
    
  

}
 
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo - Média Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container text-center">
        <h1>Página_Contato</h1>
    </div>
    <div class="container">
        <form action="" method="get">
            <label for="">Nome</label>
            <input class="form-control" type="text" name="bt_Nome">
            <label for="">Email</label>
            <input class="form-control" type="text" name="bt_Email">
            <label for="">Telefone</label>
            <input class="form-control" type="text" name="bt_Telefone">
             

            <!--
            <input class="btn btn-success" type="submit">
            <input class="btn btn-danger" type="reset">

            -->
    
            <input type="submit" class="btn btn-outline-danger" value="Enviar">
            <input type="reset" class="btn btn-outline-success" value="Apagar">
        </form>
       
       
        <?php
       
if(isset($Nome)){

echo"<hr>";
echo $Nome;
echo $Email;
echo $Telefone;
echo"<hr>";



}
        
     
        ?> 



    </div>
</body>

</html>