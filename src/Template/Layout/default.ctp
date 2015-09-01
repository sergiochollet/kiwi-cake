<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php
use Cake\Core\Configure;
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('kiwi.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="home">
    <header>
        <div class="header-title">
            <h1>Kiwi App</h1>
            <?php
            echo $this->Html->link('Promotores', '/promoters/index', ['class' => 'a', 'target' => '_self']);
            echo $this->Html->link('Reportes', '/reports/index', ['class' => 'a', 'target' => '_self']);
            echo $this->Html->link('Tiendas', '/stores/index', ['class' => 'a', 'target' => '_self']);
            echo $this->Html->link('Usuarios', '/users/index', ['class' => 'a', 'target' => '_self']);
            echo $this->Html->link('Ciudades', '/cities/index', ['class' => 'a', 'target' => '_self']);
            echo $this->Html->link('Salir', '/pages/logout', ['class' => 'a', 'target' => '_self']);  
            ?>
        </div>
    </header>
    <div id="container">
        <div id="content">
            <?= $this->Flash->render() ?>
            <div class="row">
                <div class="columns large-12">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>
