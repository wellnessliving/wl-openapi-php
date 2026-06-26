<?php

namespace WlSdk\Wl\Staff\Load;

/**
 * Response from GET
 */
class LoadGetResponse
{
    /**
     * Staff pay rates info. See PayRate::staffHourlyCheckInRateGet().
     *
     * @var array|null
     */
    public ?array $a_pay_rate = null;

    /**
     * Staff work information. See rs_staff_load_check_work_trx().
     *
     * @var array|null
     */
    public ?array $a_work = null;

    /**
     * Whether staff member can manage staff clock in/out for other staff members.
     *
     * @var bool|null
     */
    public ?bool $is_time_manage = null;

    /**
     * Message, when the work has been started.
     *
     * @var string|null
     */
    public ?string $text_work_start = null;

    public function __construct(array $data)
    {
        $this->a_pay_rate = isset($data['a_pay_rate']) ? (array)$data['a_pay_rate'] : null;
        $this->a_work = isset($data['a_work']) ? (array)$data['a_work'] : null;
        $this->is_time_manage = isset($data['is_time_manage']) ? (bool)$data['is_time_manage'] : null;
        $this->text_work_start = isset($data['text_work_start']) ? (string)$data['text_work_start'] : null;
    }
}
