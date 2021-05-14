<?php

$texto = "hello world <br />";

//testando o hello world e a exibição de itens na tela do usuário
/* testando outro tipo de comentário*/
//testando variáveis
echo "hello world  <br />";
echo "hello world  <br />";

echo $texto;

echo "oi <br />";

//Continuação Do trabalho com variáveis

$nome = "Matheusao";
$idade ="20";
$formacoes = array();
$ultimavisualização = null;

echo $nome . "<br />"; // Vai printar Matheusao
echo $idade . "<br />"; // Vai printar 20
// o "." serve para linkar mais informações dentro de um unico echo

//Isset não é indicado para verificar array, mas serve para verificar se uma variável está setada ou está vazia
echo isset($formacoes) . "<br />"; //Vai printar true pois o vetor está vazio
echo isset($ultimavisualização) . "<br />"; //Vai printar false pois a variável é null

//Para verificar array sempre usar o empty()
//Para verificar se está vazio usar o !empty()
echo empty($formacoes) . "<br />"; //Vai printar true também
echo empty($ultimavisualização) . "<br />";// Vai printar true

// tipo de variáveis constantes, que não variam, vão ser sempre iguais ao valor atribuido a ela

define('MEU_NOME', 'Matheusao'); // atribui o nome a constante e depois o conteudo dela

echo MEU_NOME . "<br />"; //não precisa das aspas pois estou acessando direto o valor da variável

//tipos de variáveis existentes no php

$palavra = "Matheus"; //String
$booleana = false; //Booleana
$numero = 17; //Inteiro ou int
$decimal = 3.14; //Real ou Float ou Double
$parentes = array('mae', 'pai', 'irmao'); //Array ou a famosa matriz de elementos
$familia = ['tio', 'tia', 'vo']; //Outra forma de declarar array 

//Arrays
$frutas = array('maça', 'banana' , 'laranja'. '<br />');

//echo $frutas; não printa a array
//para printar array usamos 
print_r ($frutas); //porém ele printa as posições que as informações estão ocupando na array

//array associativo
$sobrenome = array(
    'matheus' => 'ribeiro', //Aqui ao invés de a chave ser 0, eu atribuo um nome pra chave dele
    'Neymar' => 'Junior' //A chave Neymar está associada ao sobrenome Junior
);

echo '<br />';
print_r ($sobrenome ); // mesma fita do anterior
echo '<br />';
print_r ($sobrenome ['matheus']); //Ele printa a posição "matheus" ou seja, na posição matheus está associado o Ribeiro, logo o Ribeiro será printado
echo '<br />';
echo $sobrenome['matheus']; //posso printar a string assim também

//compact (uma função pra transformar variáveis em arrays associativos)

$marca = 'Aston Martin';
$modelo = '2015';

$carro = compact('marca', 'modelo');
echo '<br />';
print_r($carro); //ele vai printar as duas variáveis associadas
echo '<br />';

/*StdClass é uma classe vazia do php, sem metodo, atributo e propriedade, classe padrão dos objetos não declarados
quando se converte um array para objeto, esse objeto pertence a classe StdClass */

$objeto = new \StdClass(); //Criando o meu objeto StdClass
$objeto -> nome = "Matheusao"; //Criando o atributo nome no objeto
$objeto -> sobrenome = "Ribeiro"; //Criando o atributo sobrenome no objeto

var_dump($objeto); //Ele printa o meu objeto com todas as informações, é como se fosse um print_r só que de objeto
echo "<br />";
echo $objeto -> nome; //Ele printa o atributo nome
echo "<br />";
echo gettype($objeto); //Ele printa o tipo da variável, ou o tipo do objeto

$idadeMatheusao = 21;
$idadeGabriel = '21';
echo "<br />";
var_dump ($idadeGabriel == $idadeMatheusao); // dois iguais ele verifica se os valores das variáveis são iguais e informa o tipo da variável
echo "<br />"; 
var_dump ($idadeMatheusao === $idadeGabriel); // três iguais ele verifica se os valores e os tipos das variáveis são as mesmas
echo "<br />";
var_dump ($idadeGabriel > $idadeMatheusao); //aqui é bem intuitivo né? ele verifica se a idade do Gabriel é maior do que a idade do Matheus
                                            // temos também o <, <=, >=, ! antes para negar uma variável booleana
echo "<br />";
$Eformado = true;
$Elindo = false;
var_dump ($Eformado && $Elindo); //Verifica se os dois são verdadeiros
echo "<br />";
var_dump ($Eformado || $Elindo); // é o "ou", vai retornar true se um dos dois for verdadeiro apenas 
echo "<br />";

//estrutura condicional (if e else)
if ($Elindo === true){
    echo ("lindão");
}                                   
else {
    echo ("FEIO");
}
echo "<br />";
if ($idadeGabriel > $idadeMatheusao){
    echo ("Gabriel mais velho");
} elseif ($idadeGabriel < $idadeMatheusao){
    echo("Matheus mais velho");
} else {
    echo ("São iguais");
}
echo "<br />";

$cpf = '1';
$cnpj = '1';

//estruturas condicionais sem usar if e else
$tipodocumento = ($cpf != '') ? 'CPF' : 'CNPJ'; //aqui eu criei uma estrutura condicional só que sem usar o if e else, o que eu quis dizer nessa expressão foi:
echo $tipodocumento;                            // que se a variável cpf não estiver vazia eu printo ela, se não eu printo CNPJ

$_POST = array (
    'nome' => 'Matheusao Ribeiro',
    'sobrenome' => null
);

$nomedopost = $_POST ['nome'] ?? 'não preenchido';
$sobrenomedopost = $_POST ['sobrenome'] ?? 'não preenchido';
echo "<br />";
echo "{$nomedopost} <br />";
echo "{$sobrenomedopost} <br />";

//Switch
$resultadoJogo = "perdeu";
switch ($resultadoJogo){
    case "ganhou":
        echo "vamoooooooooo";
    break;
    case "perdeu":
        echo "fora crespo filho da puta";
    break;
    case "empatou":
        echo "Ah, ok...";
    break;
}
echo "<br />";
//Estruturas de Repetição
//for
for ($i = 3; $i <= 8; $i++){ // o i começa em 3; vai até 8; i++ = i+1
    echo $i;
}
echo "<br />";

//while
$valor = 1;

while($valor <= 5){ //enquanto o valor for menor ou igual a 5
    echo $valor;    // ele printa o valor
    $valor++;       // valor++ é pra ele contar valor +1 e verificar no while se ele para ou se ele continua para o próximo numero
}
echo "<br />";

//foreach
$amigos = ['Gege' , 'Gabriel' , 'Preto' , 'Nivaldo'];

foreach ($amigos as $amigo){    //o foreach é um laço de repetição para tratar elemento por elemento, esse "as" é justamente pra eu tratar cada item do vetor. $amigos é
                                //o vetor inteiro, já $amigo é posição por posição
    echo "meu melhor amigo é o {$amigo} <br />";
}

$cores = ['amarelo' , 'azul' , 'verde' , 'rosa' , 'preto'];
$lista = [];

foreach ($cores as $chave => $value){ //eu declarei que as cores são uma chave e que essas chaves são uma posição
    if (($chave % 2)){                // então se essa chave que é uma posição for par
        continue;                     // ele continua
    }
    array_push ($lista , $value); //ai aqui se ele não atender a condição do if, eu pego o vetor vazio que é o lista e jogo os value dentro dele
}
var_dump ($lista);                //ai aqui eu printo o vetor e as posições pra chegar se a verificação foi correta

//Funções
function espaco (){ //função pra eu não ter mais que fazer o echo <br />
    echo "<br />";
} 
 espaco ();


 function soma ($numero1 = 2, $numero2 = 2){  //função de somar 2 números passando os dois numeros como parametro e retornando uma resposta
    $resposta = $numero1 + $numero2;
    echo $resposta;
    return $resposta;
 }  

 soma();

 espaco();

 //Função Type Hint
 
 function latir ( string $nomedocao){
     echo "O cão {$nomedocao} latiu";
 }
 latir ('Matheus');

espaco();

function multiplicacao (int $algarismo1, int $algarismo2) : int{

    return $resultado = $algarismo1 * $algarismo2;
}
$resultado = multiplicacao(5, 5);
echo $resultado;
 
espaco();

//função com Lambda
$cidades = ['Muzambinho' , 'Guaxupé' , 'Monte Belo' , 'Areado' , 'Alterosa'];

$nomeCidades = array_filter($cidades , function ($valorzao){ //esse array_filter vai filtrar determinadas informações de um array pra mim, ai como parametro eu posso passar
    return ($valorzao === 'Muzambinho') || ($valorzao === 'Monte Belo'); // o array e uma função com um parametro, depois eu retorno o filtro que eu quero aplicar
});
print_r($nomeCidades); //printo como se fosse um vetor

espaco();

//Função Closure

$cidades = ['Muzambinho' , 'Guaxupé' , 'Monte Belo' , 'Areado' , 'Alterosa'];
$filtrar = [ 'cidade1' => 'Muzambinho' , 'cidade2' => 'Guaxupé']; 

$nomeCidades = array_filter($cidades, function ($vallueh) use ($filtrar){ //eu uso o use para trabalhar com um array externo a função

    return ($vallueh === $filtrar ['cidade1']) || ($vallueh === $filtrar ['cidade2'] );
 
});

print_r ($nomeCidades);

espaco();

date_default_timezone_set ('America/Sao_Paulo'); //aqui é só pra eu ajustar pra ele me dar a hora certa

echo "hoje é " . date(l)  . date (" d/m/Y") . "e são " . date("h:m") . " horas";

espaco();

//Funções nativas do php
//php_info() vai puxar todas as informações da minha versão do php

//strtoupper - deixa a letra maiuscula
$maiuscula = 'Matheusao';

echo strtoupper ($maiuscula);

espaco();

//strtolower - deixa a letra minuscula
$minuscula = 'Matheusao';

echo strtolower($minuscula);

espaco ();

//trim - tira os espaços em branco
$espaco = '       Matheusao Ribeiro         ';

echo trim($espaco);

espaco();

//stripslashes - remove  contra barras KKKKKKKKKKKKKKKKKKKKKKKKKKKKK 
$lifeisatrips = 'Matheusão \ Lindo';

echo stripcslashes($lifeisatrips);

espaco();

//<b> </b> negrito e htmlspecialchars
$testenegrito = '<b>Lindo</b> Demais';

echo $testenegrito;
espaco();
echo htmlspecialchars($testenegrito);
espaco();
//transformando string em array através do explode
$restaurantes = "divino fogão , Dona Palmira , Burger King";
$array_restaurantes = explode(",", $restaurantes);
var_dump ($array_restaurantes);
espaco();

//transformando array em string usando o implode (pode usar o join também, a implementação é a mesma)
$array_pizza = ['Bacon' , 'Frango' , 'Calabresa'];

$string_pizza = implode("," , $array_pizza);
echo $string_pizza;
espaco();

//cortar uma string com substr
$mensagem = 'Olá, meu nome é Matheus Ribeiro e eu tenho 19cm de rola';

$mensagemcortada = substr($mensagem, 10); //(nome do array, numero de posições que eu quero cortar da string)
echo $mensagemcortada;
espaco();

//json encode converte um objeto php para String json
$filhos = [
    'Matheus' => 'Vilma',
    'Gege' => 'Viviane'
];

$json = json_encode ($filhos, JSON_UNESCAPED_UNICODE); // (O JSON_UNESCAPED_UNICODE serve só pra deixar acentos caso tenha)

echo $json;
espaco();

//json decode para converter uma string em objeto json
$jsonn = '{"Matheus":"Vilma","Gege":"Viviane"}';

$object =  json_decode($json, true); //esse true me dá um array como resultado e não um objeto
//var_dump ($object -> Matheus); //aqui eu estou utilizando o objeto Matheus, ou seja, a resposta esperada é que ele é filho da Vilma
var_dump ($object ['Matheus']); // aqui eu estou utilizando o array Matheus, repare como muda a implementação para acessar a posição "Matheus" DO ARRAY
espaco ();

//acessando e pegando o conteudo de um arquivo de texto no pc com file_get_contents
$txt = file_get_contents ('teste.txt');

echo $txt;
espaco();

//escrevendo texto dentro de um arquivo do pc usando file_put_contents
$escreve = file_put_contents('teste.txt' , 'O Gabriel é gay');

echo $escreve;
espaco();

//gerando números aleatórios usando o rand()
echo rand(0 , 10); //vai gerar números aleatórios de 0 à 10

espaco();

//contando quantos itens tem dentro de um array
$quantidade = ['uma' , 'duas' , 'tres' , 'quatro'];

echo count ($quantidade);

espaco();

//para arredondamento temos duas funções, o ceil que arredonda para o numero inteiro mais proximo pra cima se for positivo, e pra baixo se negativo
// e o round que arredonda para o inteiro mais proximo
echo (ceil('0.8')); //arredonda para 1
espaco(); 
echo (ceil('-0.8')); //arredonda pra 0
espaco(); 
echo (round('0.8')); //arredonda para 1
espaco(); 
echo (round ('-0.8'));// arredonda pra -1
espaco(); 

//para contar a quantidade de caracteres de uma determinada string usamos o strlen
$strlen = "12345678910";

echo strlen($strlen);
espaco();

//para editar os valores de uma string usando o str_replace
$str_replace = "São Paulo";

$novo = str_replace('Paulo' , 'Jose' , $str_replace);
echo str_replace ('Paulo' , 'Marcos' , $str_replace);
espaco();
echo $novo;

espaco();

//codificando meu nome pra colocar no twitter
$meunome = "Matheus Ribeiro da Silva";

$meunomecodificado = base64_encode($nome);

echo $meunomecodificado;

espaco();

//redirecionando pessoas usando o header
//header('location: https://www.google.com/');

//para definir casas decimais para os numeros usando number_format
echo number_format("1000" , 2); //vai imprimir 1,000.00

espaco();

//_$GET para entrada de dados via url
/*
$name = $_GET ['nome'] ?? 'Não colocou o nome'; //para inserir o nome e o sobrenome na url http://localhost/Treino_php/ eu insiro 
$lastname = $_GET ['sobrenome'] ?? 'Não informou o sobrenome'; //?nome=Matheu&&sobrenome=Ribeiro ficando então http://localhost/Treino_php/?nome=Matheus&sobrenome=Ribeiro 

echo $name  .  $lastname;
*/
espaco();

//$_POST 
/* aqui nesse $_POST fiz um formulário HTML para redirecionar a resposta dele para uma página php para tratar e exibir usando a váriavel
globar $_POST, atribuindo uma string nome pra ela e logo em seguida printando ela num arquivo servidor.php */
?>

<!DOCTYPE html>
<html lang="´pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo o PHP</title>
</head>
<body>
    <form action="servidor.php" method = "POST">
        <input type="text" name = "nome"> 
        <button type ="submit">Enviar</button>
    </form>
</body>
</html>

<?php
espaco();
//$_SESSION serve para armazenar uma váriavel durante todas as páginas do site, usa-se muito para fazer carrinhos de site de compra
//ou para assim que o cliente fizer o login você já soltar um "Olá, Matheus. Seja bem vindo!!!

session_start();

$_SESSION['cor_favorita'] = 'laranja'; //eu armazeno na variável global session uma cor favorita que é laranja
                                       //no outro arquivo php eu dou um echo no $_SESSION['cor_favorita'] e ele printa a cor escolhida
                                       //devidamente armazenada na variável globar session e na cor favorita, eu poderia fazer outros
                                       //arrays e aponta-los a algo

echo 'cor favorita escolhida!!!!!!!!!!!!!!!!!!!!!';

espaco();

//include irá adicionar o arquivo especificado na execução do script, se ele não achar o arquivo, ele só dá um warning e boa
//include_once não irá incluir o arquivo novamente se ele já foi adicionado
//require ele precisa que o arquivo especificado esteja na execução, caso contrário o script não vai rodar e dará um fatal erro

//require_once é só pra garantir que não tenha outro erro da mesma importação no script caso já tenha incluido o arquivo
require_once ('config.php'); //requerindo o arquivo que eu quero importar

$connection = getconection(); //esse get conection é uma função que eu criei no config.php

echo $connection; 

espaco();
//trabalhando com composer
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="sendmail.php" method="POST">
    <label for="Nome">Nome Completo</label>
    <input type="text"name=nome>
    <br> <br>
    <label for="Cidade">Cidade</label>
    <select name="Cidade">
    <option value="">escolha a sua cidade </option>
    <option value="Muzambinho">Muzambinho</option>
    <option value="São Paulo">São Paulo </option>
    <option value="Guaxupé">Guaxupé</option>
    </select>
    <br> <br>
    <label for = "mensagem"> Mensagem </label>
    <textarea name= "mensagem" cols= "30" rows = "10"> </textarea>
    <br> <br>
    <input type="submit" value = "enviar">
    </form>
</body>
</html>
<?php

espaco();

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="upload.php" method = "POST" enctype= "multipart/form-data"> 
        Escolha uma Imagem
        <input type="file" name="filetoupload">
        <br>
        <input type="submit" name="submit" value="enviar imagem">
    </form>
</body>
</html>
<?php
echo "Teste de Commit";