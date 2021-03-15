<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BalanceTransaction[]|\Cake\Collection\CollectionInterface $balanceTransactions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Balance Transaction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Voucher Transactions'), ['controller' => 'VoucherTransactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Voucher Transaction'), ['controller' => 'VoucherTransactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="balanceTransactions index large-9 medium-8 columns content">
    <h3><?= __('Balance Transactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voucher_transactions_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('credit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('debit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('balance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($balanceTransactions as $balanceTransaction): ?>
            <tr>
                <td><?= $this->Number->format($balanceTransaction->id) ?></td>
                <td><?= $balanceTransaction->has('user') ? $this->Html->link($balanceTransaction->user->name, ['controller' => 'Users', 'action' => 'view', $balanceTransaction->user->id]) : '' ?></td>
                <td><?= $balanceTransaction->has('voucher_transaction') ? $this->Html->link($balanceTransaction->voucher_transaction->id, ['controller' => 'VoucherTransactions', 'action' => 'view', $balanceTransaction->voucher_transaction->id]) : '' ?></td>
                <td><?= $this->Number->format($balanceTransaction->credit) ?></td>
                <td><?= $this->Number->format($balanceTransaction->debit) ?></td>
                <td><?= $this->Number->format($balanceTransaction->balance) ?></td>
                <td><?= h($balanceTransaction->created) ?></td>
                <td><?= h($balanceTransaction->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $balanceTransaction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $balanceTransaction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $balanceTransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $balanceTransaction->id)]) ?>
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
