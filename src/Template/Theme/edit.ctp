<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Theme $theme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $theme->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $theme->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Theme'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Video'), ['controller' => 'Video', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Video', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="theme form large-9 medium-8 columns content">
    <?= $this->Form->create($theme) ?>
    <fieldset>
        <legend><?= __('Edit Theme') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
            echo $this->Form->control('subject_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
