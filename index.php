<?php

echo "<h1> String</h1>";

function quebra()
{
    echo "\n<br>";
}

$str = "uma string";
echo $str[-2];

$str[4] = "A";
echo "<br>" . $str;

echo "<br>" . $str[1] . "ateus \n Paulo";

quebra();
$tamanho = strlen($str);
echo "Tamanho " . $tamanho;


for ($i = 0; $i < $tamanho; $i++) {
    echo "<br> - " . $str[$i] . " < ";
}

quebra();
echo "<br> eu sou feliz";
echo '<br> eu sou feliz';

quebra();
echo "<br> Vamo \n embora";
echo '<br> Vamo \n embora';

quebra();
$videogame = "Sonic";
echo "<br> Estou jogando {$videogame}";
echo '<br> Estou jogando {$videogame}';

quebra();
echo "this isn't";
echo 'this isn\'t';

quebra();
echo "<br> Deletar Disco C:\\";
echo "<br> Deletar Disco C:\\usuario\\nathan";

quebra();
function soma($a, $b)
{
    return $a + $b;
}

$num = soma(10, 25);
echo "<br> O resultado da soma é $num.";
echo '<br> O resultado da soma é {$num}.';

echo "<br> O resultado da soma é $soma(10,25).";
echo "<br> O resultado da soma é {soma(10, 25)}.";
echo "<br> O resultado da soma é " . soma(10, 25);

$cores = ["roxo", "Amarelo", "Cinza"];
echo "<br> Valor do Array: {$cores[1]} ";
echo "<br> Valor do Array: " . $cores[2] . " . ";


quebra();
$a = 10;
$$a = 20;
$valor = 50;
echo "<br> Valor {$a} -- valor {$$a} -- R\$$$valor";

quebra();

// heredoc
// nowdoc

$heredoc = <<<NOMEFELIZ

    <h2>O titulo da pagina</h2>
    <p> O texto da pagina </p>
    </p> Valor R$ {$valor} </p>

NOMEFELIZ;

echo $heredoc;

$nowdoc = <<< 'OUTRONOME'

<h2>O titulo da pagina</h2>
<p> O texto da pagina </p>
</p> Valor R$ {$valor} </p>


OUTRONOME;

echo $nowdoc;   

quebra();
$str = "123MINORES";
$tamanho = strlen($str);
echo "String: {$str}";
echo "tamanho: {$tamanho}";

quebra();
$str = "Janela";
$parte = substr($str , 3, 6); 
echo "<br> String : {$str}";
echo "<br>Parte: {$parte}";


echo "<br>Maicusculo :" . strtoupper($parte);
echo "<br>Minusculo :" . strtolower($str);

$nova = str_replace("la" , "linha", $str);
echo "<br> Nova : {$nova}";


/*

number_format() // formatar um numero
print_r() // mostra o array
printf() // Imprime e formata
var_dump() // Mostra o array e o tipo de variável 


$str = "   aqui começa   "
ltrim() // remove espaços da esquerda
rtrim() // remove espaços da direita
trim() // remove ambos os espaços

str_word_count() // contagem de palavras

explode() // quebra as palavras ["eu" , "estou" , "com", "fome"]
str_split()

implode() // o oposto de "Eu estou com fome"
join()

strtoupper() // tudo maisculo
strtolower() // tudo minusculo
ucfirst() // Só a primeira maisculo // UC = Uper Case
ucwords() // As Palavras Desse Jeito

strrev() // "danilo" -> "olinad"
strpos() // "rafael" -> "ae" -> 3 // case sensitive
stripos() // "rafael" -> "AE" -> 3 // não case sensitive


$input = "Alien"
echo str_pad($input, 10, "--" , STR_PAD_LEFT) // "-----------ALIEN"
echo str_pad($input, 10, "--" , STR_PAD_BOTH) // "-----------ALIEN-----------" 


*/ 

function titulo($texto, $char){
    $tamanho = 20 + strlen($texto);

    echo "\n<br><h2>";
    echo str_pad(" ", $tamanho, $char, STR_PAD_BOTH);
    echo "<br>";
    echo str_pad($texto, $tamanho, $char, STR_PAD_BOTH);
    echo "<br>";
    echo str_pad(" ", $tamanho, $char, STR_PAD_BOTH);
    echo "</h2><br>\n";

    
    
    
} 