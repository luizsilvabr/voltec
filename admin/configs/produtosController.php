<?php
session_start();
require_once('database.php');

// Add
if (isset($_POST['add'])) {
    $extensao = strrchr($_FILES['imgProduto']['name'], '.');
    $novoNome = md5(time()) . $extensao;
    $dir = "../../assets/databaseImg/produtos/";
    move_uploaded_file($_FILES['imgProduto']['tmp_name'], $dir . $novoNome);

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $query = "INSERT INTO produto(imgProduto, nome, descricao, data) VALUES ('$novoNome', '$nome', '$descricao', NOW())";
    if (mysqli_query($connect, $query)) {
        $_SESSION['controller'] = "Produto Adicionado com Sucesso!";
        header("Location: ../produtos");
    } else {
        $_SESSION['controller'] = "Erro ao Adicionar Produto.";
        header("Location: ../produtos");
    }
}
// End Add

// Update
if (isset($_POST['update'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);
    $sql = "SELECT imgProduto FROM produto WHERE id = '$id'";
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);

    $result = mysqli_query($connect, $sql);
    $arr = mysqli_fetch_assoc($result);
    $imgAntiga = $arr['imgProduto'];

    $extensao = strrchr($_FILES['imgProduto']['name'], '.');
    $novoNome = md5(time()) . $extensao;
    $dir = "../../assets/databaseImg/produtos/";
    $sqlUpdate = "UPDATE produto SET imgProduto = '$novoNome', nome = '$nome', descricao = '$descricao', data = NOW() WHERE id = '$id'";
    if (mysqli_query($connect, $sqlUpdate)) {
        move_uploaded_file($_FILES['imgProduto']['tmp_name'], $dir . $novoNome);
        if (unlink("../../assets/databaseImg/produtos/".$imgAntiga)) {
            $_SESSION['controller'] = "Produto Atualizado com Sucesso!";
           header("Location: ../produtos");
        }
    }
}
// End Update

// Delete
if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT imgProduto FROM produto WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $arr = mysqli_fetch_assoc($result);
    $img = $arr['imgProduto'];
    $sqlDel = "DELETE FROM produto WHERE id = '$id'";
    if (mysqli_query($connect, $sqlDel)) {
        if (unlink("../../assets/databaseImg/produtos/".$img)) {
           $_SESSION['controller'] = "Produto Deletado com Sucesso!";
           header("Location: ../produtos");
        }
    }
}
// End Delete