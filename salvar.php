<?php

if(isset($_POST['nome']) && isset($_POST['email']) && isset ($_POST['celular']) && isset($_POST['mensagem'])) {



$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$mensagem = $_POST['mensagem'];

$arquivo = fopen('dados.txt','a');

            if($arquivo){

                fwrite($arquivo,$nome."-".$email."-".$celular."-".$mensagem."\n");
                fclose($arquivo);

                echo "<p> Obrigado por entrar em contato! </p>";

            }else{

                echo "<p> Erro ao salvar os dados! </p>";

            }
}

?>
<a href="sobre.html">Voltar</a>
