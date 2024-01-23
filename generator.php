<?php
require_once __DIR__ .'/utilities/functions.php';


if ($_GET['length'] && is_numeric($_GET['length'])){ ?>
    <h1>
        Your newly SUPER SAFE generated password is:
    </h1>
    <pre>
        <?php
            $generatedPsw = createPassword( intval($_GET['length']), $_GET['repeatRadio'], generateCharsPool( $_GET['chars'],1, isset($_GET['numbers']), isset($_GET['symbols'])));

            echo $generatedPsw;
        ?>
    </pre>
<?php } else {?>
    <p>
        <strong>
            RIPROVA !!!!
        </strong>
    </p>
<?php }

// var_dump($generatedPsw);?>