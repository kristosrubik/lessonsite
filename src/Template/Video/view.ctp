<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Video $video
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Video'), ['action' => 'edit', $video->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Video'), ['action' => 'delete', $video->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $video->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Video'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="video view large-9 medium-8 columns content">
    <h3><?= h($video->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($video->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject Id') ?></th>
            <td><?= $this->Number->format($video->subject_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($video->title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Link') ?></h4>
        <?= $this->Text->autoParagraph(h($video->link)); ?>
    </div>
</div>
