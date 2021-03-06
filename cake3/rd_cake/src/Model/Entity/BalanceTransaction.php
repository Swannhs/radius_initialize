<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BalanceTransaction Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $credit
 * @property int|null $debit
 * @property int|null $balance
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\VoucherTransaction $voucher_transaction
 */
class BalanceTransaction extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'credit' => true,
        'debit' => true,
        'balance' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'voucher_transaction' => true,
    ];
}
