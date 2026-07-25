<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultipleGetResponseClient
{
    /**
     * Information about relation. `null` if there is no relation, in particular when appointments
     *  are loaded by {@link \WlSdk\Wl\Profile\Attendance\Schedule\PaymentMultiple}.
     *
     * @var PaymentMultipleGetResponseClientRelation|null
     */
    public ?PaymentMultipleGetResponseClientRelation $a_relation = null;

    /**
     * Unpaid appointments data.
     *
     * @var PaymentMultipleGetResponseClientService|null
     */
    public ?PaymentMultipleGetResponseClientService $a_service = null;

    /**
     * The user for whom the appointment is booked.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? new PaymentMultipleGetResponseClientRelation((array)$data['a_relation']) : null;
        $this->a_service = isset($data['a_service']) ? new PaymentMultipleGetResponseClientService((array)$data['a_service']) : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
