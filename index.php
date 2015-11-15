<?php
	define('CLASS_DIR', 'src');
	set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
	spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Listagem de Clientes</title>

	<link rel="stylesheet" type="text/css" href="src/FontAwesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="src/Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src/Normalize/normalize.css">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container-fluid">
	<?php

		$Cliente[1] = new Classes\Cliente\Types\Cliente();
		$Cliente[1]->setNome("João Carlos");
		$Cliente[1]->setCpf("093.234.354-09");
		$Cliente[1]->setRg("3431234-8");
		$Cliente[1]->setEndereco("Rua dos Manacás, 234");
		$Cliente[1]->setMunicipio("Cuiabá");
		$Cliente[1]->setEstado("MT");

		$Cliente[2] = new Classes\Cliente\Types\Cliente();
		$Cliente[2]->setNome("José Carlos");
		$Cliente[2]->setCpf("243.223.344-19");
		$Cliente[2]->setRg("2345434-8");
		$Cliente[2]->setEndereco("Avenida Oito de Abril, 233");
		$Cliente[2]->setMunicipio("Várzea Grande");
		$Cliente[2]->setEstado("MT");

		$Cliente[3] = new Classes\Cliente\Types\Cliente();
		$Cliente[3]->setNome("André Marques");
		$Cliente[3]->setCpf("873.543.234-53");
		$Cliente[3]->setRg("453463-3");
		$Cliente[3]->setEndereco("Rua B, 1400");
		$Cliente[3]->setMunicipio("Cáceres");
		$Cliente[3]->setEstado("MT");

		$Cliente[4] = new Classes\Cliente\Types\Cliente();
		$Cliente[4]->setNome("Maria Antonieta");
		$Cliente[4]->setCpf("763.363.744-89");
		$Cliente[4]->setRg("6754345-0");
		$Cliente[4]->setEndereco("Rua Isaac Póvoas, 65-A");
		$Cliente[4]->setMunicipio("Rondonópolis");
		$Cliente[4]->setEstado("MT");

		$Cliente[5] = new Classes\Cliente\Types\Cliente();
		$Cliente[5]->setNome("Carlos César");
		$Cliente[5]->setCpf("567.223.344-19");
		$Cliente[5]->setRg("45675434-8");
		$Cliente[5]->setEndereco("Avenida do Centro, 7654");
		$Cliente[5]->setMunicipio("Barra do Garças");
		$Cliente[5]->setEstado("MT");

		$Cliente[6] = new Classes\Cliente\Types\Cliente();
		$Cliente[6]->setNome("Caio Moreira");
		$Cliente[6]->setCpf("563.223.344-19");
		$Cliente[6]->setRg("987534-8");
		$Cliente[6]->setEndereco("Rua Cândido Mariano, 34");
		$Cliente[6]->setMunicipio("Sinop");
		$Cliente[6]->setEstado("MT");

		$Cliente[7] = new Classes\Cliente\Types\Cliente();
		$Cliente[7]->setNome("Mariana dos Santos");
		$Cliente[7]->setCpf("643.422.344-19");
		$Cliente[7]->setRg("75373445-8");
		$Cliente[7]->setEndereco("Alameda Carioca, 233");
		$Cliente[7]->setMunicipio("Rio de Janeiro");
		$Cliente[7]->setEstado("RJ");

		$Cliente[8] = new Classes\Cliente\Types\Cliente();
		$Cliente[8]->setNome("Joana Linfenstain");
		$Cliente[8]->setCpf("438.543.876-43");
		$Cliente[8]->setRg("5684342-6");
		$Cliente[8]->setEndereco("Rua das Flores, 342");
		$Cliente[8]->setMunicipio("Sinop");
		$Cliente[8]->setEstado("MT");

		$Cliente[9] = new Classes\Cliente\Types\Cliente();
		$Cliente[9]->setNome("Humberto Silva");
		$Cliente[9]->setCpf("756.354.344-19");
		$Cliente[9]->setRg("68763443-8");
		$Cliente[9]->setEndereco("Avenida Paulista, 3433");
		$Cliente[9]->setMunicipio("São Paulo");
		$Cliente[9]->setEstado("SP");

		$Cliente[10] = new Classes\Cliente\Types\Cliente();
		$Cliente[10]->setNome("Tatiana Leite");
		$Cliente[10]->setCpf("987.234.546-76");
		$Cliente[10]->setRg("1327557-5");
		$Cliente[10]->setEndereco("Avenida Marginal Santos, 2345");
		$Cliente[10]->setMunicipio("Juína");
		$Cliente[10]->setEstado("MT");


		//print_r($Cliente);


		$ordem = ($_REQUEST["ordenar"]=="ASC") ? "DESC" : "ASC";

		($ordem=="ASC") ? ksort($Cliente) : krsort($Cliente);

		$fa_sort = ($ordem=="ASC") ? "sort-asc" : "sort-desc";
	?>
	<h1>Listagem de Clientes</h1>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th><a href="?ordenar=<?php echo $ordem; ?>">ID <i class="fa fa-<?php echo $fa_sort; ?>"></i></a></th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Município</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($Cliente as $id => $cliente_obj)
				{
			?>
					<tr>
						<td><?php echo $id; ?></td>
						<td><a tabindex="0" data-toggle="popover" role="button" data-trigger="focus" title="<?php echo $cliente_obj->getNome(); ?>" data-content="<?php echo "<strong>CPF:</strong> ".$cliente_obj->getCpf()."<br><strong>RG:</strong> ".$cliente_obj->getRg()."<br><strong>Endereço:</strong> ".$cliente_obj->getEndereco()."<br><strong>Município:</strong> ".$cliente_obj->getMunicipio()."<br><strong>Estado:</strong> ".$cliente_obj->getEstado(); ?>"><?php echo $cliente_obj->getNome(); ?></a></td>
						<td><?php echo $cliente_obj->getCpf(); ?></td>
						<td><?php echo $cliente_obj->getMunicipio(); ?></td>
						<td><?php echo $cliente_obj->getEstado(); ?></td>
					</tr>
			<?
				}
			?>
		</tbody>
	</table>
	</div>

	<script type="text/javascript" src="src/jQuery/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="src/Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function () {
		  $('[data-toggle="popover"]').popover({html:true})
		})
	</script>
</body>
</html>