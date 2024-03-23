<?php
//BUSCA OS VALORES DO FORM E ATRIBUI A VAR PHP
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

//PERGUNTA QUAL AÇÃO DESEJA

    echo "<button> 
        <a href='inserir.php'> 
            Inserir Usuário 
        </a> 
    </button>";

    echo "<button> 
        <a href='selecionar.php'> 
            Selecionar Usuário 
        </a> 
    </button>";

    echo "<button> 
        <a href='deletar.php'> 
            Deletar Usuário 
        </a> 
    </button>";

    echo "<button> 
        <a href='update.php'> 
            Atualizar Usuário 
        </a> 
    </button>";

?>
