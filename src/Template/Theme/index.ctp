<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Theme[]|\Cake\Collection\CollectionInterface $theme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Theme'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Video'), ['controller' => 'Video', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Video', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="theme index large-9 medium-8 columns content">
    <h3><?= __('Theme') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($theme as $theme): ?>
            <tr>
                <td><?= $this->Number->format($theme->ID) ?></td>
                <td><?= $this->Number->format($theme->subject_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $theme->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $theme->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $theme->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $theme->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
