<?php
include "config.php";
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
					<meta itemprop="url" content="/ativestat1/atividades/planilhas" />


					<header class="article-header clearfix">
						<h1 class="article-title" itemprop="name">
							Lista de Atividades de Planilha
							<meta itemprop="url" content="https://www.ime.usp.br/ativestat1/atividades/planilhas" />
						</h1>

					</header>

					<!-- Aside -->
					<!-- //Aside -->




					<section class="article-content clearfix" itemprop="articleBody">
						<div id="te">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td><a href="/ativestat/atividades/planilhas/pl01.php"  id="sheet"> PDF </a></td>
										<td><a href="/ativestat/atividades/planilhas/pl01.php"  rel="noopener noreferrer">PL01: Simulação de uma moeda
												equilibrada</a></td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/planilhas/pl02.php"  id="sheet"> PDF </a></td>
										<td><a href="/ativestat/atividades/planilhas/pl02.php"  rel="noopener noreferrer">PL02: Simulação de um dado equilibrado</a>
										</td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/planilhas/pl03.php"  id="sheet"> PDF </a></td>
										<td><a href="/ativestat/atividades/planilhas/pl03.php"  rel="noopener noreferrer">PL03: Simulação de um dado
												desequilibrado</a></td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/planilhas/pl04.php"  id="sheet"> PDF </a></td>
										<td><a href="/ativestat/atividades/planilhas/pl04.php"  rel="noopener noreferrer">PL04: Simulação de um dado especial</a>
										</td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/planilhas/pl05.php"  id="sheet"> PDF </a></td>
										<td><a href="/ativestat/atividades/planilhas/pl05.php"  rel="noopener noreferrer">PL05: Valor de π</a></td>
									</tr>
								</tbody>
							</table>
						</div>
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