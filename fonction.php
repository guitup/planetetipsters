<?php
function code_header(){

    echo '<!DOCTYPE html>
    <html>
        <head>
            <!-- En-tête de la page -->
            <meta charset="utf-8" />
            <title>'.$titre.'</title>
        </head>
    
        <body>
        ';
}

function code_footer(){

    echo '</body>
    </html>';
}
?>