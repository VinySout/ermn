<?php
include_once '../util/conexaoInstitucional.php';

         $sql = "SELECT * FROM heraldica";
            $result = mysqli_query($conexao, $sql);
            $array = array();
            while($data = mysqli_fetch_assoc($result)){
                $array[] = $data;
                }
            echo json_encode($array);
            