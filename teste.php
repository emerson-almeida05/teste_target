<?php

// 1
$indice = 13;
$soma = 0;
$k = 0;

while($k<$indice){
    $k = $k + 1;
    $soma = $soma + $k;
}

echo "SOMA = " . $soma;

echo "<br><br>";

/////////////////////////////////////

// 2
$num = 20;
$anterior = 0;
$atual = 1;
$posterior = 0;

$sequencia = [$anterior,$atual];

while($posterior < $num){

    $posterior = $atual + $anterior;
    $anterior = $atual;
    $atual = $posterior;

    $sequencia[] =  $posterior;
}

if(in_array($num,$sequencia) ){
    echo $num . ' Pertence a Sequência.';
}else{
    echo $num . ' Não Pertence a Sequência.';
}


echo "<br><br>";
///////////////////////////////////////////////////////////////////////////

// 3
$json = '[
	{
		"dia": 1,
		"valor": 22174.1664
	},
	{
		"dia": 2,
		"valor": 24537.6698
	},
	{
		"dia": 3,
		"valor": 26139.6134
	},
	{
		"dia": 4,
		"valor": 0.0
	},
	{
		"dia": 5,
		"valor": 0.0
	},
	{
		"dia": 6,
		"valor": 26742.6612
	},
	{
		"dia": 7,
		"valor": 0.0
	},
	{
		"dia": 8,
		"valor": 42889.2258
	},
	{
		"dia": 9,
		"valor": 46251.174
	},
	{
		"dia": 10,
		"valor": 11191.4722
	},
	{
		"dia": 11,
		"valor": 0.0
	},
	{
		"dia": 12,
		"valor": 0.0
	},
	{
		"dia": 13,
		"valor": 3847.4823
	},
	{
		"dia": 14,
		"valor": 373.7838
	},
	{
		"dia": 15,
		"valor": 2659.7563
	},
	{
		"dia": 16,
		"valor": 48924.2448
	},
	{
		"dia": 17,
		"valor": 18419.2614
	},
	{
		"dia": 18,
		"valor": 0.0
	},
	{
		"dia": 19,
		"valor": 0.0
	},
	{
		"dia": 20,
		"valor": 35240.1826
	},
	{
		"dia": 21,
		"valor": 43829.1667
	},
	{
		"dia": 22,
		"valor": 18235.6852
	},
	{
		"dia": 23,
		"valor": 4355.0662
	},
	{
		"dia": 24,
		"valor": 13327.1025
	},
	{
		"dia": 25,
		"valor": 0.0
	},
	{
		"dia": 26,
		"valor": 0.0
	},
	{
		"dia": 27,
		"valor": 25681.8318
	},
	{
		"dia": 28,
		"valor": 1718.1221
	},
	{
		"dia": 29,
		"valor": 13220.495
	},
	{
		"dia": 30,
		"valor": 8414.61
	}
]';

$array = json_decode($json);

$valores = [];
$dias = [];
foreach($array as $objeto){
    if($objeto->valor > 0){
        $valores[] = $objeto->valor;
    }
}

$menor = min($valores);
$maior = max($valores);
$media = array_sum($valores)/count($valores);

$numDias=0;
foreach($valores as $valor){
    if($valor > $media){
        $numDias++;
    }
}

echo "O menor valor de faturamento ocorrido em um dia do mês é: $menor <br>";
echo "O maior valor de faturamento ocorrido em um dia do mês é: $maior <br>";
echo "O Número de dias no mês em que o valor de faturamento diário foi superior à média mensal é: $numDias dias <br>";

echo "<br><br>";
///////////////////////////////////////////////////////////////

//4
$valores = [];
$valores["SP"] = 67836.43;
$valores["RJ"] = 36678.66;
$valores["MG"] = 29229.88;
$valores["ES"] = 27165.48;
$valores["Outros"] = 19849.53;

$valorTotal = array_sum($valores);

$porcentagens = [];
$porcentagens["SP"] = round(($valores["SP"]/$valorTotal)*100, 2);
$porcentagens["RJ"] = round(($valores["RJ"]/$valorTotal)*100, 2);
$porcentagens["MG"] = round(($valores["MG"]/$valorTotal)*100, 2);
$porcentagens["ES"] = round(($valores["ES"]/$valorTotal)*100, 2);
$porcentagens["Outros"] = round(($valores["Outros"]/$valorTotal)*100, 2);

echo "Porcentagens dos Estados: <br>";
print_r($porcentagens);

echo "<br><br>";
///////////////////////////////////////////////////

//5
$string = "emprego";
$strRevert = '';
for($i = 1; $i <= strlen($string); $i++){
    $strRevert = $strRevert . substr($string,-$i,1); //poderia usar o substr para pegar a string invertida toda de uma vez também, sem a necssidade do for.
}

echo "String invertida: " . $strRevert;

?>