<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Refuse;

/**
 * Response from GET
 */
class ReimbursementRefuseListGetResponse
{
    /**
     * A list refuse translate message:
     *
     * @var ReimbursementRefuseListGetResponseList|null
     */
    public ?ReimbursementRefuseListGetResponseList $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? new ReimbursementRefuseListGetResponseList((array)$data['a_list']) : null;
    }
}
