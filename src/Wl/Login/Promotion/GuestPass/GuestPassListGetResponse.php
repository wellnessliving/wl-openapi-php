<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass;

/**
 * Response from GET
 */
class GuestPassListGetResponse
{
    /**
     * No description.
     *
     * @var GuestPassListGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new GuestPassListGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
