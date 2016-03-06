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


//testa os INPUTs com método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome_problema      = test_input($_POST["nome-problema"]);
  $categoria_problema = test_input($_POST["categoria-problema"]);
  $local_problema     = test_input($_POST["local-problema"]);
  $descricao_problema = test_input($_POST["descricao-problema"]);
  $foto_alerta        = test_input($_POST["foto-alerta"]);
}

$sql_insert_alerta = 