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
					<meta itemprop="url" content="/index.php?option=com_content&amp;view=article&amp;id=966&amp;catid=30&amp;Itemid=806&amp;lang=pt-br" />


					<header class="article-header clearfix">
						<h1 class="article-title" itemprop="name">
							MA18 – Média e Desvio Padrão para tabelas de frequência
							<meta itemprop="url" content="https://www.ime.usp.br/index.php?option=com_content&amp;view=article&amp;id=966&amp;catid=30&amp;Itemid=806&amp;lang=pt-br" />
						</h1>

					</header>

					<!-- Aside -->
					<!-- //Aside -->








					<section class="article-content clearfix" itemprop="articleBody">
						<p><strong>Tópicos:</strong> Medidas resumo</p>
						<p><span style="text-align: justify;"><strong>Nível de ensino:</strong> Médio, Superior.</span></p>
						<p><strong>Descrição:</strong></p>
						<p>Este miniaplicativo, do portal Art of Stat em inglês, fornece a média e o desvio padrão amostral (divisão por n-1) para uma tabela de frequência (com dados agrupados). No quadro de opções, o usuário escolhe trabalhar com seus próprios dados (<em>Your Own</em>) e seleciona tabela de frequências (<em>Frequency Table</em>) e, em seguida, digita (ou copia a coluna) da tabela da variável quantitativa de interesse. Outras medidas também são fornecidas.</p>
						<p>&nbsp;</p>
						<p><strong><a href="https://istats.shinyapps.io/EDA_quantitative/" target="_blank" rel="noopener">Link</a></strong></p>
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