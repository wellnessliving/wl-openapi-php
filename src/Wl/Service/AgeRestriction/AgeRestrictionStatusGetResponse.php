<?php

namespace WlSdk\Wl\Service\AgeRestriction;

/**
 * Response from GET
 */
class AgeRestrictionStatusGetResponse
{
    /**
     * Whether a client can book class.
     *
     * @var bool|null
     */
    public ?bool $can_book = null;

    public function __construct(array $data)
    {
        $this->can_book = isset($data['can_book']) ? (bool)$data['can_book'] : null;
    }
}
