<?php
/*
Template Name: Sindicato
*/
?>
<?php get_header(); //chama o topo do site ?>
<!--<div id="slider-topo">
        <div class="slides_container">
			<?php //get_template_part('loop', 'slider');?> 
        </div>
	</div>
     </div>--><!--fim do slider-topo-->
    
     	
     	
     
     
</div><!--fim do topo-->


<div id="conteudo">
    		<div id="conteudo-sindicato">
        		
                <?php get_template_part('loop', 'sindicato');?>
                
        	</div><!--fim do conteudo-sindicato-->
            
            <div id="lateral-sindicato1">
            	<?php get_search_form('minha_busca'); ?><!--fim da busca-->
                <div id="diretoria">
                     <div id="dir-div1">
                        <h2><span>DIRETORIA 01</span></h2>
                        <h3>Efetiva</h3>
                        <ul>
                            <li><strong>Presidente:</strong> Reinaldo Pedro Correa</li>
                            <li><strong>Vice-presidente:</strong> Luiz Henrique A. Marques</li>
                            <li><strong>Secretário:</strong> Cláudio Araújo de Lima</li>
                            <li><strong>Tesoureiro:</strong> Amílcar José de Sá</li>
                        </ul>
                        
                        <h3>Suplentes</h3>
                        <ul>
                            <li>Lino Antonio Martins</li>
                            <li>Ivan Sanches</li>
                            <li>Luiz Herculano Pinto</li>
                            <li>Alfredo A. Marin Morales</li>
                        </ul>
                        
                         <h3>Conselho Fiscal</h3>
                         <ul>
                            <li>Roberto Fiorese Filho</li>
                            <li>Hyppolito Martinez Trujillo </li>
                            <li>Laurindo Francisco Diana</li>
                         </ul>
                         
                         <h3>Suplentes</h3>
                         <ul>
                            <li>Clara Vasserman Fiorese</li>
                            <li>Pasquale Cataldo</li>
                            <li>Carlos Eduardo Dias</li>
                         </ul>
                         
                         <h3>Delegados Representantes</h3>
                         <ul>
                            <li>Lázaro Antonio Infante</li>
                            <li>Reinaldo Pedro Correa</li>
                         </ul>
                         
                         <h3>Suplentes</h3>
                         <ul>
                            <li>Amílcar José de Sá</li>
                            <li>Luiz Henrique A. Marques</li>
                         </ul>
                        <a href="#" class="bt-mais"></a>
                    </div><!--fim da dir-div1-->
                    
                    <div id="dir-div2">
                        <h2><span>DIRETORIA 02</span></h2>
                        <h3>Efetiva</h3>
                        <ul>
                            <li>Presidente: Reinaldo Pedro Correa</li>
                            <li>Vice-presidente: Luiz Henrique A. Marques</li>
                            <li>Secretário: Cláudio Araújo de Lima</li>
                            <li>Tesoureiro: Amílcar José de Sá</li>
                        </ul>
                        
                        <h3>Suplentes</h3>
                        <ul>
                            <li>Lino Antonio Martins</li>
                            <li>Ivan Sanches</li>
                            <li>Luiz Herculano Pinto</li>
                            <li>Alfredo A. Marin Morales</li>
                        </ul>
                        
                         <h3>Conselho Fiscal</h3>
                         <ul>
                            <li>Roberto Fiorese Filho</li>
                            <li>Hyppolito Martinez Trujillo </li>
                            <li>Laurindo Francisco Diana</li>
                         </ul>
                         
                         <h3>Suplentes</h3>
                         <ul>
                            <li>Clara Vasserman Fiorese</li>
                            <li>Pasquale Cataldo</li>
                            <li>Carlos Eduardo Dias</li>
                         </ul>
                         
                         <h3>Delegados Representantes</h3>
                         <ul>
                            <li>Lázaro Antonio Infante</li>
                            <li>Reinaldo Pedro Correa</li>
                         </ul>
                         
                         <h3>Suplentes</h3>
                         <ul>
                            <li>Amílcar José de Sá</li>
                            <li>Luiz Henrique A. Marques</li>
                         </ul>
                         <a href="#" class="bt-menos"></a>
                    </div><!--fim da div-dir2-->
                    
                </div><!--dim da DIRETORIA-->
            </div><!--fim da lateral-sindicato-->
            
            <div id="estrutura">
            	<div class="titulo1"><h1 class="titulo1-1"><?php _e('ESTRUTURA','sincomavi')?></h1></div>
                <h2><span><?php _e('SINCOMAVI conta com alto grau de informatização','sincomavi')?></span></h2>
            	<?php get_template_part('loop', 'sindicatoEstrutura');?>
            </div><!--fim da estrutura-->
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>