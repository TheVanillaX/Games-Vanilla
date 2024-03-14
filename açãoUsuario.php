<?php
//Bloco de declaração de variáveis
$nomeUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
$erroPreenchimento = false; // Inicialize $erroPreenchimento como false

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["nomeUsuario"])){
        echo "<p>O campo NOME é obrigatório!</p>";
        $erroPreenchimento = true;
    } else{
        $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);
    }

    if(empty($_POST["emailUsuario"])){
        echo "<p>O campo EMAIL é obrigatório!</p>";
        $erroPreenchimento = true;
    } else{
        $emailUsuario = filtrar_entrada($_POST["emailUsuario"]); // Corrigir atribuição da variável
    }

    if(empty($_POST["senhaUsuario"])){
        echo "<p>O campo SENHA é obrigatório!</p>";
        $erroPreenchimento = true;
    } else{
        $senhaUsuario = filtrar_entrada($_POST["senhaUsuario"]); // Corrigir atribuição da variável
    }

    if(empty($_POST["confirmarSenhaUsuario"])){
        echo "<p>O campo CONFIRMAR SENHA é obrigatório!</p>";
        $erroPreenchimento = true;
    } else{
        $confirmarSenhaUsuario = filtrar_entrada($_POST["confirmarSenhaUsuario"]); // Corrigir atribuição da variável
    }
}

//Atribui às variáveis PHP os valores recebidos pelo Array POST do formUsuario = ""/
$nomeUsuario = $_POST["nomeUsuario"];
$emailUsuario = $_POST["emailUsuario"]; // Corrigir o nome da variável
$senhaUsuario = $_POST["senhaUsuario"];
$confirmarSenhaUsuario = $_POST["confirmarSenhaUsuario"];

if(!$erroPreenchimento){
    echo"
    <h3>Usuario cadastrado com sucesso!</h3>
     <table border='1'>
        <tr>
            <th>NOME:</th>
            <td>$nomeUsuario</td>
        
        </tr>
        <tr>
            <th>EMAIL:</th>
            <td>$emailUsuario</td> <!-- Corrigir o nome da variável -->
        
        </tr>
        <tr>
            <th>SENHA:</th>
            <td>$senhaUsuario</td>
        
        </tr>
        <tr>
            <th>CONFIRMAR SENHA:</th>
            <td>$confirmarSenhaUsuario</td>
        
        </tr>

    </table>";
}

function filtrar_entrada($dado){
    $dado = trim($dado); //TRIM - Remove caracteres de espaço no início e no final
    $dado = stripslashes($dado); // Corrigir chamada da função stripslashes
    return $dado; // Retornar o dado filtrado
}
?>