<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;">Procedimentos, funções e métodos.</h1>
        <h4 style="text-align: center;">Funções com string</h4>
        <hr>
        <br>
            <?php

                require_once "funcoes_string.php";

                echo "Teste de quebra de linha com wordwrap";
                pule_linha(2);

                $texto = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni quisquam saepe reiciendis voluptatum tempora cumque cum iste sunt quas. Rerum ab dolorem nobis sunt aspernatur cupiditate magnam a tempore repudiandae.";
                $resposta = wordwrap($texto, 30, "<br>");
                echo "$resposta";
                pule_linha(2);

                echo "Quantidade de letras no texto com a função strlen: ". strlen($texto);
                pule_linha(2);

                echo "Utilizando do: trim() - para remoção de espaços....";
                $nome = "     Pedro Paulo Garcia Age   ";
                pule_linha(1);
                echo $nome;
                pule_linha(1);
                echo "Quantidade de letras: " . strlen($nome);
                pule_linha(1);
                trim($nome);
                echo "Quantidade de letras depois do trim (): " . strlen(trim($nome));
                pule_linha(2);

                echo "Quantidade de palavras em uma string com : str_word_count()";
                pule_linha(1);
                $teste = str_word_count($nome, 0);
                echo "Quantidade de palavras - com a opção : 0: " . $teste;
                pule_linha(1);
                $teste = str_word_count($nome, 1);
                echo "Quantidade de palavras - com a opção : 1: ";
                print_r($teste);
                pule_linha(1);
                $teste = str_word_count($nome, 2);
                echo "Quantidade de palavras - com a opção : 2: ";
                print_r($teste);
                pule_linha(2);
                
                echo "Função explode()";
                $data_nascimento = "03/09/2004";
                $vetor = explode("/", $data_nascimento);
                pule_linha(0);
                print_r($vetor);
                pule_linha(2);

                echo "Função implode()";
                $data_nascimento2 = implode("-", $vetor);
                $vetor = explode("/", $data_nascimento);
                pule_linha(0);
                echo $data_nascimento2;
                pule_linha(2);

                echo "Função str_split()";
                $novo_vetor = str_split("Pedro");
                pule_linha(1);
                print_r($novo_vetor);
                pule_linha(2);

                echo "Função chr()";
                pule_linha(1);
                echo "A letra de código 77 é " . chr(77);
                pule_linha(2);

                echo "Função ord()";
                pule_linha(1);
                echo "O código da letra A é " . ord("A");
                pule_linha(2);

                echo "Função strtolower()";
                pule_linha(1);
                echo "Formação de texto com strtolower(): " . strtolower($nome);
                pule_linha(2);

                echo "Função strtoupper()";
                pule_linha(1);
                echo "Forrmatação de texto com strtoupper(): " . strtoupper($nome);
                pule_linha(2);

                echo "Função ucfirst()";
                pule_linha(1);
                echo "Forrmatação de texto com ucfirst(): " . ucfirst($nome);
                pule_linha(2);

                echo "Função ucwords()";
                pule_linha(1);
                echo "Forrmatação de texto com ucwords(): " . ucwords($nome);
                pule_linha(2);

                echo "Função strpos()";
                pule_linha(1);
                echo "Forrmatação de texto com strpos(): " . strpos($nome, "Pedro");
                pule_linha(2);

                echo "Função substr_count()";
                pule_linha(1);
                echo "Forrmatação de texto com substr_count(): " . substr_count($nome, "Paulo");
                pule_linha(2);

                echo "Função substr()";
                pule_linha(1);
                echo "Forrmatação de texto com substr(): " . substr($nome, 0, 6);
                pule_linha(1);
                echo "Forrmatação de texto com substr(): " . substr($nome, 6);
                pule_linha(2);

                echo "Função str_replace()";
                pule_linha(1);
                echo "Retorna um novo texto alterando a palavra: " . str_replace("Garcia", "G.", $nome);
                pule_linha(2); 







                

            ?>     

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>