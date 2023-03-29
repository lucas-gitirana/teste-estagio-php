<?php   

    require_once('autoload.php');

    use Gitirana\Teste\Model\Pessoa;
    use Gitirana\Teste\Model\Contato;

    // CADASTRO DE PESSOA
    $nome = $_GET["nome"];
    $cpf = $_GET["cpf"];
    $pessoa = new Pessoa($nome, $cpf);
    
    // CADASTRO DE CONTATO
    $tipo = $_GET["tipo"];
    $descricao = $_GET["desc"];
    $contato = new Contato($tipo, $descricao, $pessoa);
    
    echo "<hr>";
    echo "<p>Nome: {$pessoa->getNome()} </p>";
    echo "<p>CPF: {$pessoa->getCpf()} </p>";
    echo "<hr>";
    echo "<pre>" ;
        var_dump($pessoa);
    echo "</pre>";

    echo "<hr>";
    echo "<p>Nome: {$contato->getTipo()} </p>";
    echo "<p>CPF: {$contato->getDescricao()} </p>";
    echo "<hr>";
    echo "<pre>" ;
        var_dump($contato);
    echo "</pre>";

    
