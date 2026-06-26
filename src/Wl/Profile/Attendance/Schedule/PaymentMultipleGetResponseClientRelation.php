<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultipleGetResponseClientRelation
{
    /**
     * Family relation ID.
     *
     * @var int|null
     */
    public ?int $id_family_relation = null;

    /**
     * Payer UID.
     *
     * @var string|null
     */
    public ?string $uid_payer = null;

    public function __construct(array $data)
    {
        $this->id_family_relation = isset($data['id_family_relation']) ? (int)$data['id_family_relation'] : null;
        $this->uid_payer = isset($data['uid_payer']) ? (string)$data['uid_payer'] : null;
    }
}
