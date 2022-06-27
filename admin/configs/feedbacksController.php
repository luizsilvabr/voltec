<?php
session_start();
require_once('database.php');

// Add
if (isset($_POST['add'])) {
    $extensao = strrchr($_FILES['imgFeedback']['name'], '.');
    $novoNome = md5(time()) . $extensao;
    $dir = "../../assets/databaseImg/feedback/";
    move_uploaded_file($_FILES['imgFeedback']['tmp_name'], $dir . $novoNome);

    $nomePessoa = mysqli_escape_string($connect, $_POST['nomePessoa']);
    $testemunho = mysqli_escape_string($connect, $_POST['testemunho']);
    $query = "INSERT INTO feedback(imgFeedback, nomePessoa, testemunho, data) VALUES ('$novoNome', '$nomePessoa', '$testemunho', NOW())";
    if (mysqli_query($connect, $query)) {
        $_SESSION['controller'] = "Feedback Adicionado com Sucesso!";
        header("Location: ../feedbacks");
    } else {
        $_SESSION['controller'] = "Erro ao Adicionar Feedback.";
        header("Location: ../feedbacks");
    }
}
// End Add

// Update
if (isset($_POST['update'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);
    $sql = "SELECT imgFeedback FROM feedback WHERE id = '$id'";
    $nomePessoa = mysqli_escape_string($connect, $_POST['nomePessoa']);
    $testemunho = mysqli_escape_string($connect, $_POST['testemunho']);

    $result = mysqli_query($connect, $sql);
    $arr = mysqli_fetch_assoc($result);
    $imgAntiga = $arr['imgFeedback'];

    $extensao = strrchr($_FILES['imgFeedback']['name'], '.');
    $novoNome = md5(time()) . $extensao;
    $dir = "../../assets/databaseImg/feedback/";
    $sqlUpdate = "UPDATE feedback SET imgFeedback = '$novoNome', nomePessoa = '$nomePessoa', testemunho = '$testemunho', data = NOW() WHERE id = '$id'";
    if (mysqli_query($connect, $sqlUpdate)) {
        move_uploaded_file($_FILES['imgFeedback']['tmp_name'], $dir . $novoNome);
        if (unlink("../../assets/databaseImg/feedback/".$imgAntiga)) {
           $_SESSION['controller'] = "Feedback Atualizado com Sucesso!";
           header("Location: ../feedbacks");
        }
    }
}
// End Update

// Delete
if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT imgFeedback FROM feedback WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $arr = mysqli_fetch_assoc($result);
    $img = $arr['imgFeedback'];
    $sqlDel = "DELETE FROM feedback WHERE id = '$id'";
    if (mysqli_query($connect, $sqlDel)) {
        if (unlink("../../assets/databaseImg/feedback/".$img)) {
           $_SESSION['controller'] = "Feedback Deletado com Sucesso!";
           header("Location: ../feedbacks");
        }
    }
}
// End Delete