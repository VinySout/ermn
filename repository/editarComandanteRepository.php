<?php
$conexao = mysql_connect("localhost","root", ""); 
if (!$conexao){
    die("Erro ao conectar: " . mysql_error());
}
mysql_select_db("intranetermn", $conexao);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['nome']) && isset($_POST['periodo'])){
$id = $_POST['id']; 
$foto = $_FILES['foto']['name'];
$nome = $_POST['nome'];
$periodo = $_POST['periodo'];
    
$ext = strtolower(strrchr($foto,"."));
$nome_atual = time().$ext;
if (!move_uploaded_file($_FILES['foto']['tmp_name'], "../img/fotosDosComandantes/".$nome_atual)) {                    
                }else {
                    echo 'Não foi Possivel Concluir o Upload da Imagem';
                }
                if (!move_uploaded_file($_FILES['foto']['tmp_name'], "../img/fotosDosComandantes/".$nome_atual)) {                    
                }else {
                    echo 'Não foi Possivel Concluir o Upload da Imagem';
                }
                
        $query = "UPDATE comandantes SET id ='$id', foto='$nome_atual', nome='$nome', periodo='$periodo' WHERE id=".$id;
        mysql_query($query); 
        mysql_close($conexao); 
        header("location: ../views/comandantes.php");
            }
}

?>