<?php
$target_dir = "../pdf/" . $_POST['departamento'] . "/" . $_POST['tipo'] . "/";

// Verifique se o diretório existe, se não, crie-o
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Verifique o tipo de arquivo
if($fileType != "pdf") {
  echo "Desculpe, apenas arquivos PDF são permitidos.";
  $uploadOk = 0;
}

// Verifique se $uploadOk está definido como 0 por um erro
if ($uploadOk == 0) {
  echo "Desculpe, seu arquivo não foi enviado.";
// se tudo estiver ok, tente fazer o upload do arquivo
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi enviado.";
  } else {
    echo "Desculpe, houve um erro ao enviar seu arquivo.";
  }
}
?>
