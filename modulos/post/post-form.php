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
    com este programa. Se não, veja <http://www.gnu.org/licenses/>.

*/
?>
    <div class="conteudo container arredondado  sombra fundo-branco">
        <h1>
            Criar Alerta
        </h1>
        <form id="criar-alerta" name="criar-alerta" class="formulario padding-topo" method="POST" action="funcoes/inserir/inserir-alerta.php">
            <input id="nome-problema" name="nome-problema" type="text" class="width-1-2" placeholder="Nome do problema" required>
            <select id="categoria-problema" name="categoria-problema" class="width-1-3 arrendondado float-direita" required>
                <option>Selecione o Categoria</option>
                <option value="1">problema1</option>
                <option value="2">problema2</option>
            </select>
            <br>
            <input id="local-problema" name="local-problema" type="text" class="width-1-2" placeholder="Local do problema" required>
            <br>
            <textarea id="descricao-problema" placeholder="Descrição do Problema" name="descricao-problema" class="width-1-1" required></textarea>
            <br>
            <input type="file" id="foto-problema" class="width-1-2 espaco-upload" name="foto-problema" required>

            <button class="botao fundo-cor-principal sombra float-direita margem-topo">Criar Alerta</button>
        </form>

    </div>
