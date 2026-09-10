<?php

namespace WlSdk\Wl\Staff\Load;

/**
 * Response from PUT
 */
class LoadPutResponse
{
    /**
     * Staff work information. See `rs_staff_load_check_work_trx()`. Empty array if the staff
     *  member is currently clocked out. Structure:
     *
     * @var LoadPutResponseWork|null
     */
    public ?LoadPutResponseWork $a_work = null;

    /**
     * `true` if staff member has been clocked in; `false` if clocked out.
     *
     * @var bool|null
     */
    public ?bool $is_start = null;

    public function __construct(array $data)
    {
        $this->a_work = isset($data['a_work']) ? new LoadPutResponseWork((array)$data['a_work']) : null;
        $this->is_start = isset($data['is_start']) ? (bool)$data['is_start'] : null;
    }
}
