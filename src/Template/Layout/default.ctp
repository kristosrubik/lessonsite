<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */


$cakeDescription = 'CakePHP: the rapid development php framework';
?>



<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<header>
<div class="header-title">Учебный центр</div>
</header>



<div id="container">
<nav>
  <ul class="topmenu">
    <li><a href="/lessonsite/" >Главная</a></li>
    <li><a >Курсы</a>
  <ul class="submenu">
    <li><a href="/lessonsite/subject/view/1">Математика</a></li>
    <li><a href="/lessonsite/subject/view/2">Химия</a></li>
    <li><a href="/lessonsite/subject/view/3">Программирование</a></li>
    <li><a href="/lessonsite/subject/view/4">История</a></li>
  </ul>
</li>

</nav>
</div>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
