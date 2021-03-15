<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VoucherTransaction $voucherTransaction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $voucherTransaction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $voucherTransaction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Voucher Transactions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Realms'), ['controller' => 'Realms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Realm'), ['controller' => 'Realms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="voucherTransactions form large-9 medium-8 columns content">
    <?= $this->Form->create($voucherTransaction) ?>
    <fieldset>
        <legend><?= __('Edit Voucher Transaction') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('partner_user_id');
            echo $this->Form->control('realm_id', ['options' => $realms]);
            echo $this->Form->control('profile_id', ['options' => $profiles]);
            echo $this->Form->control('credit');
            echo $this->Form->control('debit');
            echo $this->Form->control('balance');
            echo $this->Form->control('transfer_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
