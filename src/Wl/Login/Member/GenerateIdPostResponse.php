<?php

namespace WlSdk\Wl\Login\Member;

/**
 * Response from POST
 */
class GenerateIdPostResponse
{
    /**
     * Amount of generated users ids.
     *
     * @var int|null
     */
    public ?int $i_amount = null;

    public function __construct(array $data)
    {
        $this->i_amount = isset($data['i_amount']) ? (int)$data['i_amount'] : null;
    }
}
