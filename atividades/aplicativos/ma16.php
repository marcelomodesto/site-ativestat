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
					<meta itemprop="url" content="/index.php?option=com_content&amp;view=article&amp;id=964&amp;catid=30&amp;Itemid=804&amp;lang=pt-br" />


					<header class="article-header clearfix">
						<h1 class="article-title" itemprop="name">
							MA16 - Intervalo de confiança
							<meta itemprop="url" content="https://www.ime.usp.br/index.php?option=com_content&amp;view=article&amp;id=964&amp;catid=30&amp;Itemid=804&amp;lang=pt-br" />
						</h1>

					</header>

					<!-- Aside -->
					<!-- //Aside -->








					<section class="article-content clearfix" itemprop="articleBody">
						<p><strong>Tópicos:</strong> Inferência Estatística.</p>
						<p><span style="text-align: justify;"><strong>Nível de ensino:</strong> Superior.</span></p>
						<p><strong>Descrição:</strong></p>
						<p>Este miniaplicativo, em inglês, possibilita construir intervalos de confiança. Uma caixa com bolas nas cores azul e laranja é entendida como a “população” e deseja-se obter o intervalo de confiança para a proporção de bolas laranjas dentro da caixa. O usuário pode escolher o nível de confiança e o tamanho da amostra (o <em>default</em> é 250). Clicando sucessivamente no ícone “1 CI”, vão aparecendo os sucessivos ICs gerados e isso permite discutir com os estudantes a aleatoriedade do intervalo construído. Ao invés de construir um intervalo de cada vez, o usuário pode solicitar a construção de 100 deles. Isto auxilia a interpretação do significado do nível de confiança.</p>
						<p>&nbsp;</p>
						<p><strong><a href="http://www.math.usu.edu/~schneit/Statlets/CI/index.html" target="_blank" rel="noopener noreferrer">Link</a></strong></p>
						<p>&nbsp;</p>
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