<?php include("header.php"); ?>

<?php 
    // Bloco para declaração de variáveis
    $fotoUsuario = $nomeUsuario = $cidadeUsuario = $telefoneUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
    $erroPreenchimento = false; // Variável para controlar erros de preenchimento

    // Verifica o método de envio do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo do formulário está vazio utilizando a função empty
        if (empty($_POST["nomeFormulario"])) {
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>NOME</strong> é obrigatório!
                  </div>";
            $erroPreenchimento = true;
        } else {
            $nomeUsuario = $_POST["nomeFormulario"]; // Atribui o valor do campo ao $nomeUsuario
        }
    }
 // Verifica o método de envio do formulário
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo do formulário está vazio utilizando a função empty
    if (empty($_POST["cidadeFormulario"])) {
        echo "<div class='alert alert-warning text-center'>
                O campo <strong>NOME</strong> é obrigatório!
              </div>";
        $erroPreenchimento = true;
    } else {
        $cidadeUsuario = $_POST["cidadeFormulario"]; // Atribui o valor do campo ao $cidadeUsuario
    }
}
 // Verifica o método de envio do formulário
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo do formulário está vazio utilizando a função empty
    if (empty($_POST["telefoneFormulario"])) {
        echo "<div class='alert alert-warning text-center'>
                O campo <strong>NOME</strong> é obrigatório!
              </div>";
        $erroPreenchimento = true;
    } else {
        $nomeUsuario = $_POST["telefoneFormulario"]; // Atribui o valor do campo ao $telefoneUsuario
    }
}
 // Verifica o método de envio do formulário
 if ($_SERVER["REQUEST_METHOD"] == "POST") {s
    // Verifica se o campo do formulário está vazio utilizando a função empty
    if (empty($_POST["emailFormulario"])) {
        echo "<div class='alert alert-warning text-center'>
                O campo <strong>NOME</strong> é obrigatório!
              </div>";
        $erroPreenchimento = true;
    } else {
        $emailUsuario = $_POST["emailFormulario"]; // Atribui o valor do campo ao $emailUsuario
    }
}
 // Verifica o método de envio do formulário
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo do formulário está vazio utilizando a função empty
    if (empty($_POST["confsenhaFormulario"])) {
        echo "<div class='alert alert-warning text-center'>
                O campo <strong>NOME</strong> é obrigatório!
              </div>";
        $erroPreenchimento = true;
    } else {
        $confsenhaUsuario = $_POST["nomeFormulario"]; // Atribui o valor do campo ao $confsenhaUsuario
    }
}

?>


<?php include("footer.php"); ?>
