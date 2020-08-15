<?php


try {
    header("Location: admin/template/template_html/index.html");
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
?>