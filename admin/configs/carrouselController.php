<?php
session_start();
require_once('database.php');

// Add
if (isset($_POST['add'])) {
    $extensao = strrchr($_FILES['imgCarrousel']['name'], '.');
    $novoNome = md5(time()) . $extensao;
    $dir = "../../assets/databaseImg/carrousel/";
    move_uploaded_file($_FILES['imgCarrousel']['tmp_name'], $dir . $novoNome);
    $query = "INSERT INTO carrousel(imgCarrousel, data) VALUES ('$novoNome', NOW())";
    if (mysqli_query($connect, $query)) {
        $_SESSION['controller'] = "Imagem Adicionada com Sucesso!";
        header("Location: ../carrousel");
    } else {
        $_SESSION['controller'] = "Erro ao Adicionar Imagem.";
        header("Location: ../carrousel");
    }
}
// End Add

// Update
if (isset($_POST['update'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);
    $sql = "SELECT imgCarrousel FROM carrousel WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $arr = mysqli_fetch_assoc($result);
    $imgAntiga = $arr['imgCarrousel'];

    $extensao = strrchr($_FILES['imgCarrousel']['name'], '.');
    $novoNome = md5(time()) . $extensao;
    $dir = "../../assets/databaseImg/carrousel/";
    $sqlUpdate = "UPDATE carrousel SET imgCarrousel = '$novoNome', data = NOW() WHERE id = '$id'";
    if (mysqli_query($connect, $sqlUpdate)) {
        move_uploaded_file($_FILES['imgCarrousel']['tmp_name'], $dir . $novoNome);
        if (unlink("../../assets/databaseImg/carrousel/".$imgAntiga)) {
           $_SESSION['controller'] = "Imagem Atualizada com Sucesso!";
           header("Location: ../carrousel");
        }
    }
}
// End Update

// Delete
if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT imgCarrousel FROM carrousel WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $arr = mysqli_fetch_assoc($result);
    $img = $arr['imgCarrousel'];
    $sqlDel = "DELETE FROM carrousel WHERE id = '$id'";
    if (mysqli_query($connect, $sqlDel)) {
        if (unlink("../../assets/databaseImg/carrousel/".$img)) {
            $_SESSION['controller'] = "Imagem Deletada com Sucesso!";
           header("Location: ../carrousel");
        }
    }
}
// End Delete