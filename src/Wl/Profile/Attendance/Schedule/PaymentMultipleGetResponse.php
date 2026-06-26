<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

/**
 * Response from GET
 */
class PaymentMultipleGetResponse
{
    /**
     * Clients' data.
     * Clients with unpaid appointments data, each element has next structure:
     *
     * @var PaymentMultipleGetResponseClient|null
     */
    public ?PaymentMultipleGetResponseClient $a_client = null;

    /**
     * List of available staff members for tips.
     *
     * @var array|null
     */
    public ?array $a_staff_list = null;

    /**
     * Total number of unpaid appointments.
     *
     * @var int|null
     */
    public ?int $i_unpaid_number = null;

    /**
     * Whether tips are accepted.
     *
     * @var bool|null
     */
    public ?bool $is_tip = null;

    public function __construct(array $data)
    {
        $this->a_client = isset($data['a_client']) ? new PaymentMultipleGetResponseClient((array)$data['a_client']) : null;
        $this->a_staff_list = isset($data['a_staff_list']) ? (array)$data['a_staff_list'] : null;
        $this->i_unpaid_number = isset($data['i_unpaid_number']) ? (int)$data['i_unpaid_number'] : null;
        $this->is_tip = isset($data['is_tip']) ? (bool)$data['is_tip'] : null;
    }
}
