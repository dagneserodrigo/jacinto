<?php
    echo json_encode($_POST);
    //cria arquivo
    $my_file = 'file.txt';
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $data = 'New data line 1';
    fwrite($handle, $data);
    $new_data = "\n".'New data line 2';
    fwrite($handle, $new_data);

?>
<h2>Mensagem de Sucesso!</h2>