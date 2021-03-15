<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VoucherTransaction Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $partner_user_id
 * @property int $realm_id
 * @property int $profile_id
 * @property int|null $credit
 * @property int|null $debit
 * @property int|null $balance
 * @property int|null $transfer_amount
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\PartnerUser $partner_user
 * @property \App\Model\Entity\Realm $realm
 * @property \App\Model\Entity\Profile $profile
 */
class VoucherTransaction extends Entity
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
        'partner_user_id' => true,
        'realm_id' => true,
        'profile_id' => true,
        'credit' => true,
        'debit' => true,
        'balance' => true,
        'transfer_amount' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'partner_user' => true,
        'realm' => true,
        'profile' => true,
    ];
}
