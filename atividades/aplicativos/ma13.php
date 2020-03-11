<?php
include "../../config.php";
$config = new Config();
include($config->cabecalho);
?>







<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">


			<div class="item-page clearfix">


				<!-- Article -->
				<article itemscope itemtype="http://schema.org/Article">
					<meta itemprop="inLanguage" content="pt-BR" />
					<meta itemprop="url" content="/index.php?option=com_content&amp;view=article&amp;id=961&amp;catid=30&amp;Itemid=801&amp;lang=pt-br" />


					<header class="article-header clearfix">
						<h1 class="article-title" itemprop="name">
							MA13 - Simulador da Binomial (Rossman &amp; Chance)
							<meta itemprop="url" content="https://www.ime.usp.br/index.php?option=com_content&amp;view=article&amp;id=961&amp;catid=30&amp;Itemid=801&amp;lang=pt-br" />
						</h1>

					</header>

					<!-- Aside -->
					<!-- //Aside -->








					<section class="article-content clearfix" itemprop="articleBody">
						<p><em>Obs.: problemas no link</em></p>
						<p><strong>Tópicos:</strong> Gráficos e Tabelas, Probabilidade e Modelos.</p>
						<p><span style="text-align: justify;"><strong>Nível de ensino:</strong> Superior.</span></p>
						<p><strong>Descrição:</strong></p>
						<p>Este miniaplicativo, em inglês, apresenta o gráfico de frequência das ocorrências simuladas de um modelo Binomial. O usuário escolhe os parâmetros do modelo, isto é, a probabilidade de sucesso (p) e o número de ensaios (n) e, também, indica o número de amostras que deseja. O miniaplicativo fornece ainda o número de ocorrências na simulação e os valores exatos de probabilidade para eventos de interesse. Ao clicar sucessivamente no ícone <em>Draw Sample</em>, as amostras são geradas cumulativamente e é possível verificar a evolução da forma do gráfico que se aproxima de uma curva Normal.</p>
						<p>&nbsp;</p>
						<p><strong><a href="http://www.rossmanchance.com/applets/OneProp/OneProp.htm" target="_blank" rel="noopener noreferrer">Link</a></strong></p>
					</section>

					<!-- footer -->
					<!-- //footer -->



				</article>
				<!-- //Article -->


			</div>


		</div>
		<!-- //MAIN CONTENT -->

	</div>
</div>



<?php
include($config->rodape);
?>