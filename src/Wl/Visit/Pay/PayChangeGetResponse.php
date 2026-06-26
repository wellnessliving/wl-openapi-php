<?php

namespace WlSdk\Wl\Visit\Pay;

/**
 * Response from GET
 */
class PayChangeGetResponse
{
    /**
     * List of purchase options that can be applied to pay for visit:
     *
     * @var PayChangeGetResponseList|null
     */
    public ?PayChangeGetResponseList $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? new PayChangeGetResponseList((array)$data['a_list']) : null;
    }
}
