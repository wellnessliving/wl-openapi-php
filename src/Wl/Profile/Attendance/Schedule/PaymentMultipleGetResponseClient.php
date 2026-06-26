<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultipleGetResponseClient
{
    /**
     * Information about relation.
     *
     * @var PaymentMultipleGetResponseClientRelation|null
     */
    public ?PaymentMultipleGetResponseClientRelation $a_relation = null;

    /**
     * Unpaid appointments data. Result returned `_getServices()` method.
     *
     * @var array[]|null
     */
    public ?array $a_service = null;

    /**
     * The user for whom the appointment is booked, primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? new PaymentMultipleGetResponseClientRelation((array)$data['a_relation']) : null;
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
