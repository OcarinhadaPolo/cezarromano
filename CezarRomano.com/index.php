<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cezar Romano</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/geral.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	</head>
	<body onload="aparecerimage();" id="page-top" >
			<nav class="navbar navbar-default menu navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" id="mainNav">
      			<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
		      			</button>
						<a class="navbar-brand js-scroll-trigge" href="#page-top"><img src="img/logo.png"  class="img-responsive logo" alt="Cezar-Romano" width="160"></a>
					</div>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="nav navbar-nav ml-auto navbar-right">
							<li class="nav-item text-center item-menu">
								<a class="nav-link itens js-scroll-trigger scrollSuave" href="#busca">Buscar Imóveis</a>
							</li>
							<li class="nav-item text-center item-menu">
								<a class="nav-link itens js-scroll-trigger scrollSuave" href="#destaque">Imóveis em destaque</a>
							</li>
							<li class="nav-item text-center item-menu">
								<a class="nav-link itens js-scroll-trigger scrollSuave" href="#sobre">Sobre</a>
							</li>
							<li class=" nav-item text-center  item-menu">
								<a class="nav-link itens js-scroll-trigger scrollSuave" id="itemcontato"  href="#contato" > Contato</a>
							</li>
						</ul>
					</div>
				</div>
    		</nav>


		<!--FIM DO MENU COM LOGOS E LINKS-->

		<!--SECTION COM OS BANNERS-->
		<section id="home">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="img/img-slider/slide.jpg" alt="...">
			    </div>
			    <div class="item">
			      <img src="img/img-slider/slide.jpg" alt="...">
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>
		<!--FIM SECTION COM BANNERS-->

		<!-- SISTEMA DE BUSCA -->
		<section class="section section-busca" id="busca">
			<div class="container">
				<div class="col-md-12">
					<h1 class="text-center espaco-text">BUSCAR IMÓVEIS</h1>
				</div>
				<div class="col-md-3">
					<form method="POST" action="pag/func_av.php">
						<div class="col-md-12">
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-12 control-label padding-label">Tipo</label>
								<div class="col-sm-12">
									<select class="form-control select-padrao" name="tipoTop" required="" id="tipoTop" onchange="ChamarLink();">
												<option class="option-select-padrao" value="padrao">Selecione o tipo de imóvel</option>
												<option class="option-select-padrao" value="comercial">Comercial</option>
												<option class="option-select-padrao" value="residencial">Residencial</option>
												<option class="option-select-padrao" value="rural">Rural</option>
												<option class="option-select-padrao" value="terreno">Terreno</option>

											</select>
								</div>
							</div>
						</div>
					</div>
				<!-- BUSCA COMERCIAL -->
					<div class="col-md-9" id="comercial">
							<div class="form-group">
								<div class="col-md-12">
									<div class="col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Tipo de Negócio</label>
										<select class="form-control select-padrao" name="negocio" required="" id="negocio">
											<option class="option-select-padrao" value="aluguel">Aluguel</option>
										</select>
									</div>
									<div class="col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Imóveis</label>
											<select class="form-control select-padrao" name="tipoComercial" required="" id="tipoComercial">
												<option class="option-select-padrao" value="padrao">Selecione o tipo de imóvel</option>
												<option class="option-select-padrao" value="sala">Sala</option>
												<option class="option-select-padrao" value="lojas">Lojas</option>
												<option class="option-select-padrao" value="salaliving">Sala Living</option>
												<option class="option-select-padrao" value="galpao">Galpão</option>
												<option class="option-select-padrao" value="predio">Prédio</option>
												<option class="option-select-padrao" value="pontocomercial">Ponto Comercial</option>
												<option class="option-select-padrao" value="andarcomercial">Andar Comercial</option>

										</select>
									</div>
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="col-sm-12 col-xs-12">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Cidade</label>
										<select class="form-control select-padrao" name="cidade" required="" id="cidade">
												<option class="option-select-padrao" value="eunapolis">Eunapolis</option>
											</select>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="col-sm-12 control-label padding-label">Bairro</label>
										<select class="form-control select-padrao" name="bairro" id="bairro">
												<option class="option-select-padrao" value="padrao">Selecione o Bairro</option>
												<option class="option-select-padrao" value="alecrim">Alecrim</option>
												<option class="option-select-padrao" value="cajueiro">Cajueiro</option>
												<option class="option-select-padrao" value="centauro">Centauro</option>
												<option class="option-select-padrao" value="centro">Centro</option>
												<option class="option-select-padrao" value="dinaborges">Diná Borges</option>
												<option class="option-select-padrao" value="drgusmao">Doutor Gusmão</option>
												<option class="option-select-padrao" value="itapuã">Itapuã</option>
												<option class="option-select-padrao" value="jardinsdeeunapolis">Jardins De Eunápolis</option>
												<option class="option-select-padrao" value="jucarosa">Juca Rosa</option>
												<option class="option-select-padrao" value="minasgerais">Minas Gerais</option>
												<option class="option-select-padrao" value="moisesreis">Moisés Reis</option>
												<option class="option-select-padrao" value="motor">Motor</option>
												<option class="option-select-padrao" value="pequi">Pequi</option>
												<option class="option-select-padrao" value="rosaneto">Rosa Neto</option>
												<option class="option-select-padrao" value="santaisabel">Santa Isabel</option>
												<option class="option-select-padrao" value="santalucia">Santa Lucia</option>
												<option class="option-select-padrao" value="sapucaeira">Sapucaeira</option>
												<option class="option-select-padrao" value="stelareis">Stela Reis</option>
												<option class="option-select-padrao" value="trancoso">Trancoso</option>
												<option class="option-select-padrao" value="urbis1">Urbis I</option>
												<option class="option-select-padrao" value="urbis2">Urbis II</option>
												<option class="option-select-padrao" value="urbis3">Urbis III</option>
												<option class="option-select-padrao" value="vivendascostaazul">Vivendas Costa Azul</option>
												<option class="option-select-padrao" value="gabiarra">Gabiarra</option>
												<option class="option-select-padrao" value="mundonovo">Mundo Novo</option>
												<option class="option-select-padrao" value="projetomaravilha">Projeto Maravilha</option>
												<option class="option-select-padrao" value="rocadopovo">Roça do Povo</option>
										

										</select>


									</div>
									
								</div>
							</div>
							<div class="form-group">		
								<div class="col-sm-12 col-xs-12">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="col-sm-12 control-label padding-label">Valor Mínimo R$</label>
										<input type="text" class="form-control select-padrao dinheiro" name="valorMinimo" id="money" onKeyPress="return(MascaraMoeda(this,'.',',',event))">
									</div>	
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="col-sm-12 control-label padding-label">Valor Máximo R$</label>
										<input type="text" class="form-control select-padrao dinheiro" name="valorMaximo" id="money2" onKeyPress="return(MascaraMoeda(this,'.',',',event))">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<label for="inputPassword3" class="col-sm-12 control-label padding-label"> </label>
									<button class="bt-principal col-md-12 col-sm-12 col-xs-12" name="bt-comercial">BUSCAR</button>
								</div>
							</div>
						</div>		

					<!-- FIM DA BUSCA COMERCIAL -->

					<!-- BUSCA RESIDENCIAL --> 
						<div class="col-md-9" id="residencial">
							
							<div class="form-group">
								<div class="col-md-12">
									<div class="col-sm-6 col-md-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Tipo de Negócio</label>
										<select class="form-control select-padrao" name="negocio" required="" id="negocio">
											<option class="option-select-padrao" value="padrao">Selecione o tipo de Negócio</option>
											<option class="option-select-padrao" value="aluguel">Aluguel</option>
											<option class="option-select-padrao" value="venda">Venda</option>
										</select>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Imóveis</label>
											<select class="form-control select-padrao" name="tipoResidencial" required="" id="tipoResidencial">
												<option class="option-select-padrao" value="padrao">Selecione o tipo de imóvel</option>
												<option class="option-select-padrao" value="apartamento">Apartamento</option>
												<option class="option-select-padrao" value="casa">Casa</option>
												<option class="option-select-padrao" value="cobertura">Cobertura</option>
												<option class="option-select-padrao" value="kitnet">Kitnet</option>
												<option class="option-select-padrao" value="sobrado">Sobrado</option>
										</select>
									</div>
								</div>
							</div>
						
							
							<div class="form-group">
								<div class="col-sm-12 col-xs-12">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Cidade</label>
										<select class="form-control select-padrao" name="cidade" required="" id="cidade">
												<option class="option-select-padrao" value="eunapolis">Eunapolis</option>
											</select>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Bairro</label>
										<select class="form-control select-padrao" name="bairro" required="" id="bairro">
												<option class="option-select-padrao" value="padrao">Selecione o Bairro</option>
												<option class="option-select-padrao" value="alecrim">Alecrim</option>
												<option class="option-select-padrao" value="cajueiro">Cajueiro</option>
												<option class="option-select-padrao" value="centauro">Centauro</option>
												<option class="option-select-padrao" value="centro">Centro</option>
												<option class="option-select-padrao" value="dinaborges">Diná Borges</option>
												<option class="option-select-padrao" value="drgusmao">Doutor Gusmão</option>
												<option class="option-select-padrao" value="itapuã">Itapuã</option>
												<option class="option-select-padrao" value="jardinsdeeunapolis">Jardins De Eunápolis</option>
												<option class="option-select-padrao" value="jucarosa">Juca Rosa</option>
												<option class="option-select-padrao" value="minasgerais">Minas Gerais</option>
												<option class="option-select-padrao" value="moisesreis">Moisés Reis</option>
												<option class="option-select-padrao" value="motor">Motor</option>
												<option class="option-select-padrao" value="pequi">Pequi</option>
												<option class="option-select-padrao" value="rosaneto">Rosa Neto</option>
												<option class="option-select-padrao" value="santaisabel">Santa Isabel</option>
												<option class="option-select-padrao" value="santalucia">Santa Lucia</option>
												<option class="option-select-padrao" value="sapucaeira">Sapucaeira</option>
												<option class="option-select-padrao" value="stelareis">Stela Reis</option>
												<option class="option-select-padrao" value="trancoso">Trancoso</option>
												<option class="option-select-padrao" value="urbis1">Urbis I</option>
												<option class="option-select-padrao" value="urbis2">Urbis II</option>
												<option class="option-select-padrao" value="urbis3">Urbis III</option>
												<option class="option-select-padrao" value="vivendascostaazul">Vivendas Costa Azul</option>
												<option class="option-select-padrao" value="gabiarra">Gabiarra</option>
												<option class="option-select-padrao" value="mundonovo">Mundo Novo</option>
												<option class="option-select-padrao" value="projetomaravilha">Projeto Maravilha</option>
												<option class="option-select-padrao" value="rocadopovo">Roça do Povo</option>


										</select>


									</div>
								
								</div>
							</div>

							<div class="form-group">		
								<div class="col-sm-12 col-xs-12">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Valor Mínimo R$</label>
										<input type="text" class="form-control select-padrao dinheiro" name="valorMinimo" id="money3" onKeyPress="return(MascaraMoeda(this,'.',',',event))">
									</div>	
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Valor Máximo R$</label>
										<input type="text" class="form-control select-padrao dinheiro" name="valorMaximo" id="money4" onKeyPress="return(MascaraMoeda(this,'.',',',event))">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12 col-xs-12">
									<div class="col-md-4 col-sm-4 col-xs-4">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Nº Quartos</label>
										<input type="number" class="form-control select-padrao " name="Nquartos" min="1" value="1" />
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Nº Suítes</label>
										<input type="number" class="form-control select-padrao " name="Nsuites" min="0" value="0" />
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Nº Banheiros</label>
										<input type="number" class="form-control select-padrao " name="Nbanheiros" min="1" value="1"  id="banheiro" />
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12">
									<label for="inputPassword3" class="col-sm-12 control-label padding-label"> </label>
									<button class="bt-principal col-md-12 col-sm-12 col-xs-12" name="bt-residencial" id="busca-residencial">BUSCAR</button>
								</div>
							</div>
							
						</div>
					<!-- FIM DE BUSCA RESIDENCIA -->

					<!-- BUSCA RURAL -->

					<div class="col-md-9" id="rural">
						<div class="form-group">
							<div class="col-md-12">
								<div class="col-sm-6">
									<label for="inputPassword3" class="col-sm-12 control-label padding-label">Tipo de Negócio</label>
									<select class="form-control select-padrao" name="negocio" required="" id="negocio">
										<option class="option-select-padrao" value="venda">Venda</option>
									</select>
								</div>
								<div class="col-sm-6">
									<label for="inputPassword3" class="col-sm-12 control-label padding-label">Imóveis</label>
									<select class="form-control select-padrao" name="tipoRural" required="" id="tipoRural">
										<option class="option-select-padrao" value="padrao">Selecione o tipo de Imóvel</option>
										<option class="option-select-padrao" value="fazenda">Fazenda</option>
										<option class="option-select-padrao" value="sitio">Sítio</option>
									</select>
								</div>
							</div>
							<div class="form-group">		
								<div class="col-sm-12 col-xs-12">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Valor Mínimo R$</label>
										<input type="text" class="form-control select-padrao dinheiro" name="valorMinimo" id="money5" onKeyPress="return(MascaraMoeda(this,'.',',',event))">
									</div>	
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label for="inputPassword3" class="col-sm-12 control-label padding-label">Valor Máximo R$</label>
										<input type="text" class="form-control select-padrao dinheiro" name="valorMaximo" id="money6" onKeyPress="return(MascaraMoeda(this,'.',',',event))">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label for="inputPassword3" class="col-sm-12 control-label padding-label"> </label>
								<button class="bt-principal col-md-12 col-sm-12 col-xs-12" name="bt-rural" id="busca-rural">BUSCAR</button>
							</div>
						</div>
					</div>
					<!-- FIM BUSCA RURAL -->

					<!-- BUSCA TERRENO -->
					<div class="col-md-9" id="terreno">
						<div class="form-group">
							<div class="col-md-12">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<label for="inputPassword3" class="col-sm-12 control-label padding-label">Valor Mínimo R$</label>
									<input type="text" class="form-control select-padrao dinheiro" name="valorMinimo" id="money5" onKeyPress="return(MascaraMoeda(this,'.',',',event))">
								</div>	
								<div class="col-md-6 col-sm-6 col-xs-6">
									<label for="inputPassword3" class="col-sm-12 control-label padding-label">Valor Máximo R$</label>
									<input type="text" class="form-control select-padrao dinheiro" name="valorMaximo" id="money6" onKeyPress="return(MascaraMoeda(this,'.',',',event))">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label for="inputPassword3" class="col-sm-12 control-label padding-label"> </label>
								<button class="bt-principal col-md-12 col-sm-12 col-xs-12" name="bt-rural" id="busca-rural">BUSCAR</button>
							</div>
						</div>
					</div>
					</form>
					<!-- FIM BUSCA TERRENO -->
					<label for="inputPassword3" class="col-sm-12 control-label padding-label"></label>
					<label for="inputPassword3" class="col-sm-12 control-label padding-label"></label>

					<!--BUSCAR POR CÓDIGO-->
						<div class="col-md-12">
							<div class="col-md-12">
								<form  name="buscaCodigo" method="POST" action="buscarCodigo.php">
								<div class="form-group">
									<div class="col-sm-9 col-xs-9">
										<input type="text" class="form-control diferente" name="buscarCodigo" placeholder="Buscar por código, Ex: A001, C001, T001" id="email">
									</div>
									<div class="col-sm-3 col-xs-3">
										<button type="submit" class="bt-principal col-md-12" name="bt-codigo">BUSCAR</button>
									</div>
								</div>
							</div>
						</div>
					<!--FIM BUSCAR POR CÓDIGO-->						
			</div>
					
		</section>
		<!-- FIM SISTEMA DE BUSCA -->
		
		<!--SECTION FAVORITOS-->
		<section class="section-favoritos" id="destaque">
			<div class="container">
					<div class="col-md-12">
						<h1 class="text-center espaco-text">IMÓVEIS MAIS VISITADOS</h1>
					</div>
					<div class="col-md-12">
						<div class="col-md-2 item-favorito" >
							<center><a href="#"><img src="img/img-favorito.jpg" class="img-responsive transparencia" id="f4"></a></center>
							<div class="list-group esconder" id="text4">
							  <span class="list-group-item top-list">
							   Código: A001
							  </span>
							  <span  class="list-group-item">Tipo: Comercial</span>
							  <span  class="list-group-item">Negócio: Aluguel</span>
							  <span  class="list-group-item">Valor: R$ 5.000</span>
							</div>
						</div>
						<div class="col-md-2 item-favorito">
							<center><a href="#"><img src="img/img-favorito.jpg" class="img-responsive transparencia" id="f4"></a></center>
							<div class="list-group esconder" id="text4">
							  <span class="list-group-item top-list">
							   Código: A002
							  </span>
							  <span  class="list-group-item">Tipo: Comercial</span>
							  <span  class="list-group-item">Negócio: Aluguel</span>
							  <span  class="list-group-item">Valor: R$ 5.000</span>
							</div>
						</div>
						<div class="col-md-2 item-favorito">
							<center><a href="#"><img src="img/img-favorito.jpg" class="img-responsive transparencia" id="f4"></a></center>
							<div class="list-group esconder" id="text4">
							  <span class="list-group-item top-list">
							   Código: A004
							  </span>
							  <span  class="list-group-item">Tipo: Comercial</span>
							  <span  class="list-group-item">Negócio: Aluguel</span>
							  <span  class="list-group-item">Valor: R$ 5.000</span>
							</div>
						</div>
						<div class="col-md-2 item-favorito">
							<center><a href="#"><img src="img/img-favorito.jpg" class="img-responsive transparencia" id="f4"></a></center>
							<div class="list-group esconder" id="text4">
							  <span class="list-group-item top-list">
							   Código: A004
							  </span>
							  <span class="list-group-item">Tipo: Comercial</span>
							  <span class="list-group-item">Negócio: Aluguel</span>
							  <span  class="list-group-item">Valor: R$ 5.000</span>
							</div>
						</div>
						<div class="col-md-2 item-favorito">
							<center><a href="#"><img src="img/img-favorito.jpg" class="img-responsive transparencia" id="f4"></a></center>
							<div class="list-group esconder" id="text4">
							  <span class="list-group-item top-list">
							   Código: A004
							  </span>
							  <span class="list-group-item">Tipo: Comercial</span>
							  <span  class="list-group-item">Negócio: Aluguel</span>
							  <span  class="list-group-item">Valor: R$ 5.000</span>
							</div>
						</div>
						<div class="col-md-2 item-favorito">
							<center><a href="#"><img src="img/img-favorito.jpg" class="img-responsive transparencia" id="f4"></a></center>
							<div class="list-group esconder" id="text4">
							  <span class="list-group-item top-list">
							   Código: A004
							  </span>
							  <span  class="list-group-item">Tipo: Comercial</span>
							  <span  class="list-group-item">Negócio: Aluguel</span>
							  <span  class="list-group-item">Valor: R$ 5.000</span>
							</div>
						</div>
				</div>
			</div>
		</section>
		<!-- FIM SECTION FAVORITOS-->
		<!-- SECTION SOBRE -->
		<section class="section-sobre fundo-cor-padrao" id="sobre">
			<div class="container">
					<div class="col-md-12 ">
						<div class="col-md-12 texto-branco">
							<h1 class="text-center espaco-text">SOBRE</h1>
						</div>
						<label for="inputPassword3" class="col-sm-12 control-label padding-label"> </label>
						<div class="col-md-1"></div>
			    		<div class="col-md-4 text-sobre  img-sobre img-responsive" id="img-aparecer">
			    			<img src="img/ramster.jpg"  class="img-thumbnail img-responsive" >	
			    		</div>
			    		<div class="col-md-1"></div>
			    		<div class="col-md-5 text-sobre">
			    			<p class="text-justify">
			    				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dictum sapien eu purus ultrices eleifend. Proin eget mi cursus, lacinia lectus auctor, sodales sapien. Phasellus ut rutrum nulla. Aenean eu turpis condimentum justo accumsan auctor. Aliquam erat volutpat. Nunc dapibus magna ut rutrum gravida. Mauris vel placerat leo. Nullam lobortis sapien nec tellus pretium, ac ullamcorper erat iaculis. Nulla sit amet nulla at arcu feugiat fermentum. Proin accumsan massa quis sapien sollicitudin commodo. Mauris dictum accumsan urna eu mattis. Nunc tempor augue lectus, non fermentum dolor dignissim ac.
			    			</p>

			    			<p class="text-justify">

								Aliquam eleifend, odio non fermentum malesuada, nisl ante viverra nisl, vitae accumsan purus lorem sed ligula. Nulla nec leo a lacus elementum mattis. Vestibulum tristique semper purus non convallis. Cras sollicitudin tempus augue, aliquet venenatis quam dapibus ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc gravida nisl sem, ut venenatis nibh dapibus sed. Nam lacinia odio non nunc congue, vitae vulputate tellus euismod. Cras bibendum felis id condimentum finibus. Nunc bibendum maximus urna, vel mollis elit sollicitudin nec. Duis nec tincidunt purus. Nullam ornare libero id orci rhoncus laoreet. Praesent fringilla mauris id nisi imperdiet, et rhoncus nunc suscipit.
							</p>

							<p class="text-justify">

								Aliquam eleifend, odio non fermentum malesuada, nisl ante viverra nisl, vitae accumsan purus lorem sed ligula. Nulla nec leo a lacus elementum mattis. Vestibulum tristique semper purus non convallis.
							</p>

			    		</div>
			    		<div class="col-md-3"></div>
			    		<label for="inputPassword3" class="col-sm-12 control-label padding-label"> </label>
			    		<label for="inputPassword3" class="col-sm-12 control-label padding-label"> </label>
			    	</div>

				</div>

		</section>
		<!-- FIM SECTION SOBRE -->
		<!-- SECTION CONTATOS-->
		<section class="section-contatos fundo-contatos" id="contato">
			<div class="container">
					<div class="col-md-12  text-contatos">
						<div class="col-md-12">
							<h1 class="text-center espaco-text text-contatos">CONTATO</h1>
							<div class="col-md-12">
								<form method="POST" action="pag/contatar.php">
									<div class="col-md-2"></div>
									<div class="col-md-9">
										<div class="form-group">
											<label for="inputPassword3" class="col-sm-12 control-label padding-label">Nome</label>
											<input type="text" class="form-control inputs-fundo-cinza " name="nome" required="required" />
										</div>
										<div class="form-group">
											<label for="inputPassword3" class="col-sm-12 control-label padding-label">E-mail</label>
											<input type="email" class="form-control inputs-fundo-cinza " name="email"  required="required" />
										</div>
										<div class="form-group">
											<label for="inputPassword3" class="col-sm-12 control-label padding-label">Telefone</label>
											<input type="text" class="form-control inputs-fundo-cinza " name="telefone" id="phone" required="required" />
										</div>
										<div class="form-group">
											<label for="inputPassword3" class="col-sm-12 control-label padding-label">Mensagem</label>
											<textarea class="form-control inputs-fundo-cinza mensagem" name="mensagem" rows="10" required="required"></textarea>
										</div>
									</div>
								</form>
							</div>
						</div>
			    	</div>
			</div>
		</section>
		<!-- FIM SECTION CONTATOS-->	

		<!--RODAPÉ-->
		<section class="rodape">
			<label for="inputPassword3" class="col-sm-12 control-label padding-label"> </label>
			<div class="container">
	    			<div class="col-md-12">
	                    <center><ul class="social-network social-circle">
	                  
	                        <li><a href="#" class="icoFacebook r-social" title="Facebook"><i class="fa fa-facebook"></i></a></li>
	                        <li><a href="#" class="icoGoogle r-social" title="Google +"><i class="fa fa-google-plus"></i></a></li>
	                        <li><a href="#" class="icoPhone r-social" title="Telefone"><i class="fa fa-whatsapp"></i></a></li>
	                    </ul></center>				
					</div>
					<div class="col-md-12">
						<h6 class="text-left branco col-md-6">Telefone: (73) Xxxxx-xxxx</h6>
						<h6 class="text-right branco col-md-6">© Copyright - Todos os direitos reservados</h6>
					</div>
			</div>
		</section>
		<!--RODAPÉ-->
	
		
		<script src="js/js.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script  src = "libs/jquery-maskmoney-master/dist/jquery.maskMoney.min.js"  type = "text/javascript " ></script>
		<script src="js/scrolling-nav.js"></script>
    	<script src="js/bootstrap.bundle.min.js"></script>

    	<!-- Plugin JavaScript -->
    	<script src="js/jquery.easing.min.js"></script>
		<script type="text/javascript">
			$( function () { 
				$ ('#money'). maskMoney();   
				$ ('#money2'). maskMoney();   
				$ ('#money3'). maskMoney();   
				$ ('#money4'). maskMoney();   
				$ ('#money5'). maskMoney();   
				$ ('#money6'). maskMoney();   
			}); 
		</script>
		<script type="text/javascript">
			function aparecerimage(){
				$('#img-aparecer').show('slow');
			}
			
		</script>

		<script text="javascript">
			function ChamarLink() {
	        var valorCombo = document.getElementById("tipoTop").value;
					
					if(valorCombo == "padrao"){
						$('#comercial').hide('slow');
						$('#residencial').hide('slow');
						$('#rural').hide('slow');
						$('#terreno').hide('slow');

					}else if(valorCombo == "comercial"){
						$('#comercial').show('slow');
						$('#residencial').hide('slow');
						$('#rural').hide('slow');
						$('#terreno').hide('slow');

					}else if(valorCombo == "residencial"){
						$('#comercial').hide('slow');
						$('#residencial').show('slow');
						$('#rural').hide('slow');
						$('#terreno').hide('slow');

					}else if(valorCombo == "rural"){
						$('#comercial').hide('slow');
						$('#residencial').hide('slow');
						$('#rural').show('slow');
						$('#terreno').hide('slow');

					}else if(valorCombo == "terreno"){
						$('#comercial').hide('slow');
						$('#residencial').hide('slow');
						$('#rural').hide('slow');
						$('#terreno').show('slow');
					}

	        
	    }
		</script>
		<script type="text/javascript">

			$(window).scroll(function () {
          		var topWindow = $(this).scrollTop();
          		if (topWindow > 70 ) {
            		$('nav').addClass('nav-cor');
            		$('.logo').addClass('nav-logo');
			 } else{
            	$('nav').removeClass('nav-cor');
            	$('.logo').removeClass('nav-logo');
 			}

  			});
		</script>
		<script type="text/javascript">
			/*$('#f1').mouseover(function(){
     			$('#text1').show('slow');
			});
			$('#f1').mouseout(function(){
     			$('#text1').hide();
			});
	
			$('#f2').mouseover(function(){
     			$('#text2').show('slow');
			});
			$('#f2').mouseout(function(){
     			$('#text2').hide();
			});

			$('#f3').mouseover(function(){
     			$('#text3').show('slow');
			});
			$('#f3').mouseout(function(){
     			$('#text3').hide();
			});

			$('#f4').mouseover(function(){
     			$('#text4').show('slow');
			});
			$('#f4').mouseout(function(){
     			$('#text4').hide();
			});

			$('#f5').mouseover(function(){
     			$('#text5').show('slow');
			});
			$('#f5').mouseout(function(){
     			$('#text5').hide();
			});

			$('#f6').mouseover(function(){
     			$('#text6').show('slow');
			});
			$('#f6').mouseout(function(){
     			$('#text6').hide();
			});*/
	
	
	
	
	
		</script>

	</body>

</html>