<?php
session_start();
require_once('database.php');

// Add
if (isset($_POST['add'])) {
    $extensao = strrchr($_FILES['imgNovidade']['name'], '.');
    $novoNome = md5(time()) . $extensao;
    $dir = "../../assets/databaseImg/novidades/";
    move_uploaded_file($_FILES['imgNovidade']['tmp_name'], $dir . $novoNome);

    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $query = "INSERT INTO novidade(imgNovidade, titulo, descricao, data) VALUES ('$novoNome', '$titulo', '$descricao', NOW())";
    if (mysqli_query($connect, $query)) {
        $_SESSION['controller'] = "Novidade Adicionada com Sucesso!";
        header("Location: ../novidades");
    } else {
        $_SESSION['controller'] = "Erro Ao Adicionar Novidade.";
        header("Location: ../novidades");
    }
}
// End Add

// Update
if (isset($_POST['update'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);
    $sql = "SELECT imgNovidade FROM novidade WHERE id = '$id'";
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);

    $result = mysqli_query($connect, $sql);
    $arr = mysqli_fetch_assoc($result);
    $imgAntiga = $arr['imgNovidade'];

    $extensao = strrchr($_FILES['imgNovidade']['name'], '.');
    $novoNome = md5(time()) . $extensao;
    $dir = "../../assets/databaseImg/novidades/";
    $sqlUpdate = "UPDATE novidade SET imgNovidade = '$novoNome', titulo = '$titulo', descricao = '$descricao', data = NOW() WHERE id = '$id'";
    if (mysqli_query($connect, $sqlUpdate)) {
        move_uploaded_file($_FILES['imgNovidade']['tmp_name'], $dir . $novoNome);
        if (unlink("../../assets/databaseImg/novidades/".$imgAntiga)) {
           $_SESSION['controller'] = "Novidade Atualizada com Sucesso!";
           header("Location: ../novidades");
        }
    }
}
// End Update

// Delete
if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT imgNovidade FROM novidade WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $arr = mysqli_fetch_assoc($result);
    $img = $arr['imgNovidade'];
    $sqlDel = "DELETE FROM novidade WHERE id = '$id'";
    if (mysqli_query($connect, $sqlDel)) {
        if (unlink("../../assets/databaseImg/novidades/".$img)) {
           $_SESSION['controller'] = "Novidade Deletada com Sucesso!";
           header("Location: ../novidades");
        }
    }
}
// End Delete