<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subject'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Description'), ['controller' => 'Description', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Description'), ['controller' => 'Description', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Theme'), ['controller' => 'Theme', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Theme'), ['controller' => 'Theme', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subject form large-9 medium-8 columns content">
    <?= $this->Form->create($subject) ?>
    <fieldset>
        <legend><?= __('Add Subject') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
