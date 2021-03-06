<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="Primos, Burguer, Lanches, São José, Delivery, Rápido" http-equiv="keywords" /> 
    <meta name="description" content="" http-equiv="description" /> 
    <meta name="author" content="Agência TAIÓ - 12 - 3206.1690 - contato@agenciataio.com.br" /> 
    <meta name="robots" content="all" /> 
    <meta name="language" content="pt-br" /> 
    <meta name="classification" content="Primos Burguer" /> 
    <meta name="rating" content="general" /> 

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-42476898-3', 'primosburger.com.br');
      ga('send', 'pageview');
    </script> 

    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="shortcut icon" href="favicon.ico" />

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
    <script type="text/javascript">
		$(function() {
			var offset = $("#peca_o_seu").offset();
			var topPadding = 132;
			$(window).scroll(function() {
				if ($(window).scrollTop() > offset.top) {
					$("#peca_o_seu").stop().animate({
						marginTop: $(window).scrollTop() - offset.top + topPadding
					});
				} else {
					$("#peca_o_seu").stop().animate({
						marginTop: 0
					});
				};
			});
		});
	</script>
    


<title>Primos Burguer ::</title>
</head>

<body id="body_empresa">

    <div id="topo">
        <a href="http://www.primosburger.com.br"><img src="images/logo.jpg" alt="Logo Primo's Burger" title="Logo Primo's Burger" /></a>
        <ul id="menu">
            <li><a href="empresa.php" class="link_menu">Empresa</a></li>
            <li><a href="cardapio.php" class="link_menu">Cardápio</a></li>
            <li><a href="delivery.php" class="link_menu">Delivery</a></li>
            <li><a href="contato.php" class="link_menu">Contato</a></li>
        </ul>    	
    </div>

	<div id="cardapio" class="banner_cardapio_sjc">
    	&nbsp;
    </div>

    <div id="cont">
    	<div id="peca_o_seu"><a href="contato.php"><img src="images/peca_o_seu.png" /></a></div>
    	<!--
    	<div id="combinados" class="cardapio">
        	<div class="titulos" style="text-align:center;">Combinados</div>
            
            <div id="combinado1" style="width:205px;">
            	<div class="n1">1</div>
              	<div class="descricao_comb1" style="margin-left:60px;">
                	<img src="images/dog_gr.png" />
                    <div style="margin-top:15px;">
                       <span class="nome_1">Dog Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_1">lata 350ml<br /></span>
                    <span class="nome_1">Fritas média<br /></span>
                    <span class="preco1">
                    	<span style="font-size:16px;">R$</span> 10,90
                    </span>
                    </div>
               	</div>     
			</div>     
                
            <div id="combinado1">
            	<div class="n1">2</div>
              	<div class="descricao_comb1">
                	<img src="images/lanche_gr.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_1">Bancon Junior<br /> Refrigerante<br /></span>
                    <span class="descricao_1">lata 350ml<br /></span>
                    <span class="nome_1">Fritas média<br /></span>
                    <span class="preco1">
                    	<span style="font-size:16px;">R$</span> 11,96
                    </span>
                    </div>
               	</div>     
			</div>  
            
            <div id="combinado1">
            	<div class="n1">3</div>
              	<div class="descricao_comb1">
                	<img src="images/lanche_gr.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_1">Bancon Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_1">lata 350ml<br /></span>
                    <span class="nome_1">Fritas média<br /></span>
                    <span class="preco1">
                    	<span style="font-size:16px;">R$</span> 14,20
                    </span>
                    </div>
               	</div>     
			</div>  
            
            <div id="combinado2">
            	<div class="n2">4</div>
              	<div class="descricao_comb2">
                	<img src="images/lanche_pq.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_2">Big burger Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_2">lata 350ml<br /></span>
                    <span class="nome_2">Fritas média<br /></span>
                    <span class="preco2">
                    	<span style="font-size:12px;">R$</span> 14,90
                    </span>
                    </div>
               	</div>     
			</div>  
            
            <div id="combinado2">
            	<div class="n2">5</div>
              	<div class="descricao_comb2">
                	<img src="images/lanche_pq.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_2">Double Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_2">lata 350ml<br /></span>
                    <span class="nome_2">Fritas média<br /></span>
                    <span class="preco2">
                    	<span style="font-size:12px;">R$</span> 15,90
                    </span>
                    </div>
               	</div>     
			</div>
            
            <div id="combinado2">
            	<div class="n2">6</div>
              	<div class="descricao_comb2">
                	<img src="images/lanche_pq.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_2">Tropical Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_2">lata 350ml<br /></span>
                    <span class="nome_2">Fritas média<br /></span>
                    <span class="preco2">
                    	<span style="font-size:12px;">R$</span> 13,90
                    </span>
                    </div>
               	</div>     
			</div>

            <div id="combinado2">
            	<div class="n2">7</div>
              	<div class="descricao_comb2">
                	<img src="images/lanche_pq.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_2">Chicken Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_2">lata 350ml<br /></span>
                    <span class="nome_2">Fritas média<br /></span>
                    <span class="preco2">
                    	<span style="font-size:12px;">R$</span> 14,95
                    </span>
                    </div>
               	</div>     
			</div> 
                        
			<div id="combinado_fritas">
            	<img src="images/fritas_gr.png" />
                <div class="descricao_fritas">
                	Fritas Pequena (40g):<br />
                    R$ <span style="font-size:36px;">2,30</span>
                </div>
                <div class="descricao_fritas" style="margin-left:280px;">
                	Fritas Pequena (40g):<br />
                    R$ <span style="font-size:36px;">4,20</span>
                </div>                
            </div>
                                                                    
                                
        </div>
       -->
    	<div id="lanches_sjc" class="cardapio" style="margin-top:335px;">
            
            
            <div id="lanches1_sjc" >
                <div class="n3_sjc">1</div>
                <div class="descricao_lanches_sjc">
                    <span>Dog Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, tomate, batata palha e salsicha)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>5,50
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>11,00
                        </div>
                </div>
            </div>              

            <div id="lanches1_sjc" >
                <div class="n3_sjc">13</div>
                <div class="descricao_lanches_sjc">
                    <span>Calabresa Salada</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, cebola, molho especial, calabresa, hamburguer e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>9,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>19,90
                        </div>
                </div>
            </div>         

            <div id="lanches1_sjc" >
                <div class="n3_sjc">2</div>
                <div class="descricao_lanches_sjc">
                    <span>Burger Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, hambúrguer e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>6,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>12,50
                        </div>
                </div>
            </div>    

            <div id="lanches1_sjc" >
                <div class="n3_sjc">14</div>
                <div class="descricao_lanches_sjc">
                    <span>Misto Quente</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, presunto e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>7,00
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>14,00
                        </div>
                </div>
            </div>                

            <div id="lanches1_sjc" >
                <div class="n3_sjc">3</div>
                <div class="descricao_lanches_sjc">
                    <span>Burger Salada</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, molho especial, hambúrguer e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>8,50
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>15,00
                        </div>
                </div>
            </div>         

            <div id="lanches1_sjc" >
                <div class="n3_sjc">15</div>
                <div class="descricao_lanches_sjc">
                    <span>Americano</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, presunto, ovo e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>9,50
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>18,50
                        </div>
                </div>
            </div>               

            <div id="lanches1_sjc" >
                <div class="n3_sjc">4</div>
                <div class="descricao_lanches_sjc">
                    <span>Bacon Júnior</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, bacon, hambúrguer e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>9,00
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>17,00
                        </div>
                </div>
            </div>     

            <div id="lanches1_sjc" >
                <div class="n3_sjc">16</div>
                <div class="descricao_lanches_sjc">
                    <span>X-Frango</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, batata palha, tomate, hamburguer, peito de frango e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>10,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>21,50
                        </div>
                </div>
            </div>      

            <div id="lanches1_sjc" >
                <div class="n3_sjc">5</div>
                <div class="descricao_lanches_sjc">
                    <span>Bacon Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, cebola, molho especial, bacon, hambúrguer e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>9,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>19,90
                        </div>
                </div>
            </div>          

            <div id="lanches1_sjc" >
                <div class="n3_sjc">17</div>
                <div class="descricao_lanches_sjc">
                    <span>Hot Frango</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, batata palha, tomate, salsicha, peito de frango e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>9,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>19,90
                        </div>
                </div>
            </div>   

            <div id="lanches1_sjc" >
                <div class="n3_sjc">6</div>
                <div class="descricao_lanches_sjc">
                    <span>Big Burger Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, cebola, molho especial, hambúrguer, cheddar e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>10,50
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>20,50
                        </div>
                </div>
            </div>                   

            <div id="lanches1_sjc" >
                <div class="n3_sjc">18</div>
                <div class="descricao_lanches_sjc">
                    <span>Hot Burger </span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, batata palha, tomate, salsicha, hamburguer, presunto e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>9,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>19,90
                        </div>
                </div>
            </div>       

            <div id="lanches1_sjc" >
                <div class="n3_sjc">7</div>
                <div class="descricao_lanches_sjc">
                    <span>Egg Bacon Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, cebola, molho especial, bacon, ovo, hamburguer e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>10,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>21,50
                        </div>
                </div>
            </div>        

            <div id="lanches1_sjc" >
                <div class="n3_sjc">19</div>
                <div class="descricao_lanches_sjc">
                    <span>Hot Bacon</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, batata palha, tomate, salsicha, bacon e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>9,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>19,90
                        </div>
                </div>
            </div>          

            <div id="lanches1_sjc" >
                <div class="n3_sjc">8</div>
                <div class="descricao_lanches_sjc">
                    <span>Double Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, cebola, molho especial, 2 hamburgueres, cheddar e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>10,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>21,50
                        </div>
                </div>
            </div>    

            <div id="lanches1_sjc" >
                <div class="n3_sjc">20</div>
                <div class="descricao_lanches_sjc">
                    <span>Hot Calabresa</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, batata palha, tomate, salsicha, calabresa e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>9,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>19,90
                        </div>
                </div>
            </div>                

            <div id="lanches1_sjc" >
                <div class="n3_sjc">9</div>
                <div class="descricao_lanches_sjc">
                    <span>Tropical Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, batata palha, cebola, peito de frango, requeijão cremoso e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>8,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>17,90
                        </div>
                </div>
            </div>                        

            <div id="lanches1_sjc" >
                <div class="n3_sjc">21</div>
                <div class="descricao_lanches_sjc">
                    <span>Hot CalaBacon</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, batata palha, tomate, salsicha, calabresa, bacon e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>12,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>21,90
                        </div>
                </div>
            </div>                

            <div id="lanches1_sjc" >
                <div class="n3_sjc">10</div>
                <div class="descricao_lanches_sjc">
                    <span>Chicken Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, molho especial, peito de frango e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>9,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>19,90
                        </div>
                </div>
            </div>                

            <div id="lanches1_sjc" >
                <div class="n3_sjc">22</div>
                <div class="descricao_lanches_sjc">
                    <span>Gauchão Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, contra-filé, cebola roxa, barbecue ou requeijão cremoso e queijo prato )</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>12,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>21,90
                        </div>
                </div>
            </div>                

            <div id="lanches1_sjc" >
                <div class="n3_sjc">11</div>
                <div class="descricao_lanches_sjc">
                    <span>Chicken Bacon Primo’s</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, molho especial, bacon, peito de frango e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>11,50
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>23,50
                        </div>
                </div>
            </div>                  

            <div id="lanches1_sjc" >
                <div class="n3_sjc">23</div>
                <div class="descricao_lanches_sjc">
                    <span>Hot Dog Tradicional</span><br />
                        <div class="descricao_lanche_sjc">(Pão de cachorro quente, maionese, purê de batata, vinagrete, batata palha, molho de tomate e salsicha )</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Unidade:</span>
                            <span style="font-size:12px">R$</span>7,40
                        </div>
                </div>
            </div>                  

            <div id="lanches1_sjc" >
                <div class="n3_sjc">12</div>
                <div class="descricao_lanches_sjc">
                    <span>Primo’s Tudo</span><br />
                        <div class="descricao_lanche_sjc">(Pão, maionese, alface, tomate, hamburguer, molho especial, bacon, ovo, salsicha, requeijão cremoso, peito de frango, calabresa, cheddar e queijo prato)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Médio:</span>
                            <span style="font-size:12px">R$</span>18,90
                            <span style="font-size:14px;">Grande:</span>
                            <span style="font-size:12px">R$</span>28,90
                        </div>
                </div>
            </div>            

            <div id="lanches1_sjc" >
                <div class="n3_sjc">24</div>
                <div class="descricao_lanches_sjc">
                    <span>Hot Dog Tropical</span><br />
                        <div class="descricao_lanche_sjc">(Pão de cachorro quente, maionese, purê de batata, tomate, alface, batata palha, molho de tomate e salsicha)</div>
                        <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                            <span style="font-size:14px;">Unidade:</span>
                            <span style="font-size:12px">R$</span>8,90
                        </div>
                </div>
            </div>     
                                                                   
                                    
        </div>        
        
    	<div id="adicional_extra" class="cardapio">
        	<div class="titulos">Adicional Extra:</div>
           <div id="extras1">
                    Cebola<br />
                    Batata Palha<br />
                    Alface<br />
                    Tomate<br />
                    Ovo<br />
                    Queijo prato
                </div>
                <div id="preco_extras1">
                    R$ 1,00<br />
                    R$ 1,00<br />
                    R$ 1,00<br />
                    R$ 1,00<br />
                    R$ 1,00<br />
                    R$ 1,50
                </div>

                <div id="extras2">
                    Requeijão cremoso<br />
                    Cheddar<br />
                    Salsicha<br />
                    Frango<br />
                    Hambúrguer<br />
                    Bacon
                </div>
                <div id="preco_extras2">
                    R$ 1,50<br />
                    R$ 1,50<br />
                    R$ 1,50<br />
                    R$ 2,00<br />
                    R$ 2,00<br />
                    R$ 2,50
                </div>           
        </div>                
    
    <div id="porcoes" class="cardapio">

        <div class="titulos">Porções:</div>

        <div class="extras1">
            Fritas <br />
            Fritas com queijo prato <br />
            Fritas com queijo prato e bacon <br />
            Fritas com Cheddar <br />
            Fritas com cheddar e bacon <br />
        </div>
        <div class="preco_extras1">
            R$ 14,00<br />
            R$ 17,00<br />
            R$ 22,00<br />
            R$ 17,00<br />
            R$ 22,00
        </div>

        <div class="extras2">
            Calabresa <br />
            Calabresa acebolada <br />
            Polenta frita <br />
            Mandioca
        </div>
        <div class="preco_extras2">
            R$ 12,00 <br />
            R$ 13,00 <br />
            R$ 13,00 <br />
            R$ 13,00
        </div>

    </div>                

    <div id="refrigerantes" class="cardapio">
            <div class="titulos">Refrigerantes e Sucos:</div>
            <div id="opcoes">

                <div class="itens">
                    <img src="images/bebidas/lata.png" /><br />
                    Lata 350 ml<br />
                    R$<span style="font-size:28px;">3,50</span>
                </div>
                <div class="itens" style="margin-top:-19px;">
                    <img src="images/bebidas/600.png" /><br />
                    600 ml<br />
                    R$<span style="font-size:28px;">3,50</span>
                </div> 
                <div class="itens" style="margin-top:-30px;">
                    <img src="images/bebidas/1-5l.png" /><br />
                    1,5 / 2 Litros<br />
                    R$<span style="font-size:28px;">6,90</span>
                </div>  
                
                <div class="itens" style="margin-top:-18px;">
                    <img src="images/bebidas/agua.png" /><br />
                    Água 510 ml<br />
                    R$<span style="font-size:28px;">2,00</span>
                </div>                                                                              
                
            </div>
            <div id="marcas">
                <img src="images/bebidas/sprite.jpg" />
                <img src="images/bebidas/fanta.jpg" />
                <img src="images/bebidas/coca.jpg" />
                <img src="images/bebidas/kuat.jpg" />
                <img src="images/bebidas/del_valle.jpg" />                                                
            </div>
        </div> 


         <div id="cerveja" class="cardapio">
            <div class="titulos">Cervejas:</div>

            <div id="acai2_2">
                <div class="nome_acrescimos_acai">
                    Skol lata 269 ml:<br/>
                    Skol senses:<br/>
                    Budweiser Long neck:<br/>
                    Heinneken Long neck:<br/>
                    Corona:</span>:<br />
                </div>  
                <div class="precos_acrescimos_acai"> 
                    <span style="font-size:14px;">R$</span> 3,00<br />
                    <span style="font-size:14px;">R$</span> 5,50<br />
                    <span style="font-size:14px;">R$</span> 5,00<br />
                    <span style="font-size:14px;">R$</span> 5,00<br />
                    <span style="font-size:14px;">R$</span> 7,00<br />
                </div>
            </div>    



            <div id="acai2_1">
                <div class="descricao_cerveja1">
                    
                    <div class="itens" style="margin-top:-19px; margin-left:-10px;">
                        <img src="images/cerveja/beer.png" />
                    </div> 
                </div>
            </div>
      
        </div> 
        





















    	<div id="acai2" class="cardapio">
        	<div id="acai2_1">
                <div class="titulos">Açaí:</div>
                <div class="descricao_acai1">
                    <div class="itens">
                        <img src="images/bebidas/copo300.png" /><br />
                        Copo 300ml<br />
                        R$<span style="font-size:28px;">4,90</span>
                    </div>
                    <div class="itens" style="margin-top:-19px; margin-left:-10px;">
                        <img src="images/bebidas/copo500.png" /><br />
                        Copo 500ml<br />
                        R$<span style="font-size:28px;">6,50</span>
                    </div> 
                    <div class="itens" style="margin-top:-35px;">
                        <img src="images/bebidas/copo700.png" /><br />
                        Copo 700ml<br />
                        R$<span style="font-size:28px;">9,00</span>
                    </div>
                </div>
            </div>
        	<div id="acai2_2">
                <div class="titulos">Acréscimos:</div>
                <div class="nome_acrescimos_acai">
                    Banana:<br />
                    Paçoca:<br />
                    Leite condensado:<br />
                    Leite em pó:<br />
                    Granola:<br />
                    Choco boll:<br />
                    Ovomaltine:<br />
                    Confete:<br />
                    Chocolate ao leite:<br />
                    Mousse de maracujá:<br />
                    Mousse de morango:<br />
                    Mousse de limão:<br />
                    Crocante:<br />
                    Prestigio:<br />
                    Morango fruta</span>:<br />
                </div>  
                <div class="precos_acrescimos_acai"> 
                    <span style="font-size:14px;">R$</span> 1,00<br />
                    <span style="font-size:14px;">R$</span> 1,00<br />
                    <span style="font-size:14px;">R$</span> 1,50<br />
                    <span style="font-size:14px;">R$</span> 1,50<br />
                    <span style="font-size:14px;">R$</span> 1,50<br />
                    <span style="font-size:14px;">R$</span> 2,00<br />
                    <span style="font-size:14px;">R$</span> 2,00<br />
                    <span style="font-size:14px;">R$</span> 2,00<br />
                    <span style="font-size:14px;">R$</span> 2,00<br />
                    <span style="font-size:14px;">R$</span> 2,00<br />
                    <span style="font-size:14px;">R$</span> 2,00<br />
                    <span style="font-size:14px;">R$</span> 2,00<br />
                    <span style="font-size:14px;">R$</span> 2,50<br />
                    <span style="font-size:14px;">R$</span> 2,50<br />
                    <span style="font-size:14px;">R$</span> 2,50<br />
                </div>
            </div>    
        </div>                
    </div>

<div style="clear:both;"&nbsp;</div>

<div id="rodape">
	<div id="cont">
    	<img src="images/logo_rodape.jpg" />
        <ul id="menu_rodape">
        	<li><a href="empresa.php" class="link_menu">Empresa</a></li>
        	<li><a href="cardapio.php" class="link_menu">Cardápio</a></li>
        	<li><a href="delivery.php" class="link_menu">Delivery</a></li>
        	<li><a href="contato.php" class="link_menu">Contato</a></li>                                    
        </ul>
        <div id="form_rodape">
        	<div style="float: left;">

            </div>
            <ul id="midias">
	        <li><a href="https://www.facebook.com/pages/Primos-Burger/337847863016288" target="_blank"><img src="images/icone_face.png" border="0" /></a></li>
	        <li><a href="https://twitter.com/primosburger" target="_blank"><img src="images/icone_twitter.png" border="0" /></a></li>
	        <li><a href="http://instagram.com/primosburger" target="_blank"><img src="images/icone_instagram.png" border="0" /></a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
