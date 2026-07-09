<?php

namespace WlSdk\Wl\Pay\Bank\Ach\Add;

/**
 * Response from POST
 */
class AddPostResponse
{
    /**
     * ACH account information:
     *
     * @var AddPostResponsePayBank|null
     */
    public ?AddPostResponsePayBank $a_pay_bank = null;

    public function __construct(array $data)
    {
        $this->a_pay_bank = isset($data['a_pay_bank']) ? new AddPostResponsePayBank((array)$data['a_pay_bank']) : null;
    }
}
