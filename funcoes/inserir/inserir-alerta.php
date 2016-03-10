<?php
/*
                      ___                  __               
         __          /\_ \                /\ \__            
 __  __ /\_\     __  \//\ \      __   _ __\ \ ,_\    __     
/\ \/\ \\/\ \  /'__`\  \ \ \   /'__`\/\`'__\ \ \/  /'__`\   
\ \ \_/ |\ \ \/\ \L\.\_ \_\ \_/\  __/\ \ \/ \ \ \_/\ \L\.\_ 
 \ \___/  \ \_\ \__/.\_\/\____\ \____\\ \_\  \ \__\ \__/.\_\
  \/__/    \/_/\/__/\/_/\/____/\/____/ \/_/   \/__/\/__/\/_/


    Vialerta 2.0
    Desenvolvimento Inicial por: Erik Perin em 22/02/2016
    :: Equipe de Desenvolvimento
    dev@vialerta.cc
    
    
    Licenciado via GPLv3
    
    Este programa é um software livre; você pode redistribuí-lo e/ou 
    modificá-lo dentro dos termos da Licença Pública Geral GNU como 
    publicada pela Fundação do Software Livre (FSF); na versão 3 da 
    Licença, ou (na sua opinião) qualquer versão.

    Este programa é distribuído na esperança de que possa ser útil, 
    mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO
    a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
    Licença Pública Geral GNU para maiores detalhes.

    Você deve ter recebido uma cópia da Licença Pública Geral GNU junto
   */

include('../conexao/db.php');

//INPUTs com método POST e adiciona as variaveis

  $nome_alerta      = $_POST["nome-problema"];
  $categoria_alerta = 1;
  $local_alerta     = $_POST["local-problema"];
  $descricao_alerta = $_POST["descricao-problema"];
  $foto_alerta      = $_POST["foto-problema"];
  $status_alerta    = 1;
  $id_usuario       = 1;
  $data_alerta      = date("Y-m-d H:i:s");


$sql_insert_alerta = "INSERT INTO alertas (nome_alerta, status_alerta, id_categoria,
                                    descricao_alerta, id_usuario, foto_alerta, coordenadas_alerta)
                      VALUES ('$nome_alerta', $status_alerta ,$categoria_alerta, '$descricao_alerta', $id_usuario,
                               '$foto_alerta', '$local_alerta')";


if ($conexao->query($sql_insert_alerta) === TRUE) {
    echo "Criado com Suscesso"; //caso funcione
} else {
    echo "Erro: " . $sql_insert_alerta . "<br>" . $conexao->error;
}

$conexao->close();
 
?>
