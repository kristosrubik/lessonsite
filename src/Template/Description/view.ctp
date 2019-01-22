<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Description $description
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Description'), ['action' => 'edit', $description->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Description'), ['action' => 'delete', $description->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $description->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Description'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Description'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="description view large-9 medium-8 columns content">
    <h3><?= h($description->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($description->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject Id') ?></th>
            <td><?= $this->Number->format($description->subject_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Target') ?></h4>
        <?= $this->Text->autoParagraph(h($description->target)); ?>
    </div>
    <div class="row">
        <h4><?= __('Methods') ?></h4>
        <?= $this->Text->autoParagraph(h($description->methods)); ?>
    </div>
    <div class="row">
        <h4><?= __('Results') ?></h4>
        <?= $this->Text->autoParagraph(h($description->results)); ?>
    </div>
</div>
