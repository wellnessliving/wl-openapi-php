<?php

namespace WlSdk\Wl\Visit\Pay;

/**
 * Response from POST
 */
class PayChangePostResponse
{
    /**
     * Whether changes applied to visit (if user selected the same promotion, we should do nothing).
     *
     * @var bool|null
     */
    public ?bool $is_change = null;

    public function __construct(array $data)
    {
        $this->is_change = isset($data['is_change']) ? (bool)$data['is_change'] : null;
    }
}
