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
					<meta itemprop="url" content="/ativestat1/atividades/projetos" />


					<header class="article-header clearfix">
						<h1 class="article-title" itemprop="name">
							Lista de Propostas de Projeto
							<meta itemprop="url" content="https://www.ime.usp.br/ativestat1/atividades/projetos" />
						</h1>

					</header>

					<!-- Aside -->
					<!-- //Aside -->








					<section class="article-content clearfix" itemprop="articleBody">
						<div id="te">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td><a href="/ativestat/atividades/projetos/pp01.php" id="plan">projeto</a>
										</td>
										<td><a href="/ativestat/atividades/projetos/pp01.php"  rel="noopener noreferrer">PP01: Coleta de dados</a></td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/projetos/pp02.php" id="plan">projeto</a>
										</td>
										<td><a href="/ativestat/atividades/projetos/pp02.php"  rel="noopener noreferrer">PP02: Perfil da turma</a></td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/projetos/pp03.php" id="plan">projeto</a>
										</td>
										<td><a href="/ativestat/atividades/projetos/pp03.php"  rel="noopener noreferrer">PP03: Planeta água</a></td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/projetos/pp04.php" id="plan">projeto</a>
										</td>
										<td><a href="/ativestat/atividades/projetos/pp04.php"  rel="noopener noreferrer">PP04: Homem vitruviano</a></td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/projetos/pp05.php" id="plan">projeto</a>
										</td>
										<td><a href="/ativestat/atividades/projetos/pp05.php"  rel="noopener noreferrer">PP05: Planeta luz</a></td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/projetos/pp06.php" id="plan">projeto</a>
										</td>
										<td><a href="/ativestat/atividades/projetos/pp06.php"  rel="noopener noreferrer">PP06: Séries Temporais</a></td>
									</tr>
									<tr>
										<td><a href="/ativestat/atividades/projetos/pp07.php" id="plan">projeto</a>
										</td>
										<td><a href="/ativestat/atividades/projetos/pp07.php"  rel="noopener noreferrer">PP07: Clima na cidade</a></td>
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