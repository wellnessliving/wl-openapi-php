<?php

namespace WlSdk\Wl\Staff\Load;

/**
 * Response from PUT
 */
class Load74PutResponse
{
    /**
     * Staff work information. See rs_staff_load_check_work_trx().
     *
     * @var array|null
     */
    public ?array $a_work = null;

    /**
     * `true` if staff member has been clocked in; `false` if clocked out.
     *
     * @var bool|null
     */
    public ?bool $is_start = null;

    public function __construct(array $data)
    {
        $this->a_work = isset($data['a_work']) ? (array)$data['a_work'] : null;
        $this->is_start = isset($data['is_start']) ? (bool)$data['is_start'] : null;
    }
}
