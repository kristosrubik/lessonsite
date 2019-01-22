<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Theme $theme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Theme'), ['action' => 'edit', $theme->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Theme'), ['action' => 'delete', $theme->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $theme->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Theme'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Theme'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Video'), ['controller' => 'Video', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Video', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="theme view large-9 medium-8 columns content">
    <h3><?= h($theme->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($theme->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject Id') ?></th>
            <td><?= $this->Number->format($theme->subject_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($theme->title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($theme->text)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tests') ?></h4>
        <?php if (!empty($theme->tests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Question') ?></th>
                <th scope="col"><?= __('Answ1') ?></th>
                <th scope="col"><?= __('Answ2') ?></th>
                <th scope="col"><?= __('Answ3') ?></th>
                <th scope="col"><?= __('Answ4') ?></th>
                <th scope="col"><?= __('Correct') ?></th>
                <th scope="col"><?= __('Theme Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($theme->tests as $tests): ?>
            <tr>
                <td><?= h($tests->ID) ?></td>
                <td><?= h($tests->question) ?></td>
                <td><?= h($tests->answ1) ?></td>
                <td><?= h($tests->answ2) ?></td>
                <td><?= h($tests->answ3) ?></td>
                <td><?= h($tests->answ4) ?></td>
                <td><?= h($tests->correct) ?></td>
                <td><?= h($tests->theme_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tests', 'action' => 'view', $tests->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tests', 'action' => 'edit', $tests->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tests', 'action' => 'delete', $tests->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $tests->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Video') ?></h4>
        <?php if (!empty($theme->video)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Theme Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($theme->video as $video): ?>
            <tr>
                <td><?= h($video->ID) ?></td>
                <td><?= h($video->title) ?></td>
                <td><?= h($video->link) ?></td>
                <td><?= h($video->theme_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Video', 'action' => 'view', $video->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Video', 'action' => 'edit', $video->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Video', 'action' => 'delete', $video->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $video->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
