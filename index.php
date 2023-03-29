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
        var_dump($pessoa);
    echo "</pre>";


    // unset($pessoa2);
    //echo "<p>Número de pessoas: ". Pessoa::getNumDePessoas(). "</p>";

    
    /* $pessoa1->nome = "Lucas";
    $pessoa1->cpf = "049.695.200-54"; */

    /* $pessoa1->setNome("Lucas Emanoel");
    $pessoa1->setCpf("04969520054");
    $pessoa1->setIdade(19); */
    
    /* echo "<p>Nome: $pessoa1->nome </p>";
    echo "<p>CPF: $pessoa1->cpf</p>";
    echo "<hr>"; */

    

    /* echo "<p>Nome: {$pessoa2->getNome()} </p>";
    echo "<p>CPF: {$pessoa2->getCpf()} </p>";
    echo "<p>Idade: {$pessoa2->getIdade()} </p>";
    echo "<hr>"; */

    