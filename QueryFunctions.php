<?php

//Neste arquivo ha somente funcoes de interacao, mas o repositorio precisa ter conexao com banco de dados ja feita

class ExecutaSQL{

    public function pesquisa($sql, $i = true){
          $temp = mysql_query($sql);
                if($i){
                      $temp = mysqli_fetch_assoc($temp);
                }
          return $temp; 
    }

    public function insere($sql){
          $temp = mysql_query($sql);
                
    }
}





?>