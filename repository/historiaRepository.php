<?php
include_once '../util/conexaoInstitucional.php';

         $sql = "SELECT * FROM historia";
            $result = mysqli_query($conexao, $sql);
            $array_user = array();
            while($data = mysqli_fetch_assoc($result)){
                $array_user[] = $data;
                }
            echo json_encode($array_user);
            