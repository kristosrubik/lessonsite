<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Description $description
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Description'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="description form large-9 medium-8 columns content">
    <?= $this->Form->create($description) ?>
    <fieldset>
        <legend><?= __('Add Description') ?></legend>
        <?php
            echo $this->Form->control('target');
            echo $this->Form->control('methods');
            echo $this->Form->control('results');
            echo $this->Form->control('subject_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
