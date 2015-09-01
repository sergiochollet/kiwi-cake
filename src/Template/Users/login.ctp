<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$pageDescription = 'KIWI App';

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    </title>
</head>
<body class="home">
    <div id="content">
        <div class="row">
            <div class="columns large-12">
                <?php
                // Usuario
                echo $this->Form->input('username');
                // Contraseña
                echo $this->Form->input('password');

                echo $this->Form->button('Ingresar');
                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>


