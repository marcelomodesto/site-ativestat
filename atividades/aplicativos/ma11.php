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
					<meta itemprop="url" content="/index.php?option=com_content&amp;view=article&amp;id=959&amp;catid=30&amp;Itemid=799&amp;lang=pt-br" />


					<header class="article-header clearfix">
						<h1 class="article-title" itemprop="name">
							MA11 – Simulador da Binomial (Gordon &amp; Gordon)
							<meta itemprop="url" content="https://www.ime.usp.br/index.php?option=com_content&amp;view=article&amp;id=959&amp;catid=30&amp;Itemid=799&amp;lang=pt-br" />
						</h1>

					</header>

					<!-- Aside -->
					<!-- //Aside -->








					<section class="article-content clearfix" itemprop="articleBody">
						<p><strong>Tópicos:</strong> Probabilidade e Modelos.</p>
						<p><span style="text-align: justify;"><strong>Nível de ensino:</strong> Superior.</span></p>
						<p><strong>Descrição:</strong></p>
						<p>Com o uso do <em>software</em> Excel, este miniaplicativo (redigido em inglês) simula as ocorrências do modelo Binomial. O usuário deve clicar em <em>Binomial Simulation</em>&nbsp;e escolher os parâmetros do modelo na planiha, isto é, o número de ensaios (n, entre 1 e 16) e a probabilidade de sucesso (p). Escolhe, também, o número de ocorrências que deseja simular entre 1 e 1000. O miniaplicativo apresenta o gráfico de frequências das ocorrências simuladas, a média e o desvio-padrão (teóricos e os calculados com os valores simulados). O miniaplicativo inclui sugestões de questões a serem discutidas com os estudantes.</p>
						<p>&nbsp;</p>
						<p>&nbsp;<a href="http://iris.nyit.edu/~fgordon/StatisticalSimulations.htm" target="_blank" rel="noopener noreferrer"><strong>Link</strong></a></p>
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