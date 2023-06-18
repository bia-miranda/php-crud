<?php

switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $sql = "insert into usuario(nome, senha)
                values('{$nome}', '{$senha}');";
  
                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Cadastrado com sucesso');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }
                else{
                    print "<script>alert('Não foi possível cadastrar');</script>";
                    print "<script>location.href='?page=listar';</script>";
                }

                break;
    
    
    case 'editar':
        break;

    case 'deletar':
        break;
}

?>