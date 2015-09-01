<?php
$pageDescription = 'KIWI App';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $pageDescription ?>
    </title>
</head>
<body class="home">
    <header>
        <div class="header-image">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png') ?>
            <h1>KIWI App</h1>
        </div>
    </header>
    <div id="content">
        <div class="row">
              <?php echo $info; ?>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>


