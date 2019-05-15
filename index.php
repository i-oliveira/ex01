<html>
<head>
	<title> Exemplo For </title>
</head>
<body>
	<a href="index.php">Home</a>
	
	<h2>Exemplo 01</h2>
	<p>Mostrar números de 1 a 5 na tela:</p>
	
	<?php
		for ($num=1; $num <=5; $num++)
		{
		echo "Valor de 'num': " .$num. "<br>";
			
		}

	?>
	<h2>Exemplo 02</h2>
	<p>Mostrar números pares entre 0 20:</p>
	<?php
		for($cont=0; $cont <=20; $cont++)
		{
			//% = mod, pega o resto da divisão
			if($cont % 2 == 0)
			{
				echo $cont . " "; //listar um ao lado do outro
			}
		}
	?>
	<h2>Exemplo 03</h2>
	<p>Contar quantos números ímpares existem entre 3 e 734</p>
	<?php
	
		$qtde = 0;
		for($i = 3; $i < 735; $i++)
		{
			
			if($i % 2 == 1)
			{
				$qtde++; 
			}
		}echo "Resposta: " . $qtde;
	?>
	<h2>Exemplo 04</h2>
	<p>Média dos valores pares entre 3 e 734</p>
	<?php
		$qtde = 0;
		$media = 0;
		for($j = 3; $j < 735; $j++)
		{
			
			if($j % 2 == 0)
			{
				$qtde++; 
				$media += $j;  // $media = $media + $j;
			}
		}
		$media /= $qtde;  // $media = $media/$qtde;
		echo "Resposta: " . $media;
	?>
	
	
	
	
	
</body>
</html>
