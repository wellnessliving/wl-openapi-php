<?php

namespace WlSdk\Wl\Tuition;

/**
 * Response from GET
 */
class TuitionListByEventGetResponse
{
    /**
     * List of tuition.
     *
     * @var TuitionListByEventGetResponseTuitionList|null
     */
    public ?TuitionListByEventGetResponseTuitionList $a_tuition_list = null;

    public function __construct(array $data)
    {
        $this->a_tuition_list = isset($data['a_tuition_list']) ? new TuitionListByEventGetResponseTuitionList((array)$data['a_tuition_list']) : null;
    }
}
