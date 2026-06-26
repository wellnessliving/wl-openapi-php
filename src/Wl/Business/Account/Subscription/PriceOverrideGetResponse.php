<?php

namespace WlSdk\Wl\Business\Account\Subscription;

/**
 * Response from GET
 */
class PriceOverrideGetResponse
{
    /**
     * List of override options.
     *
     * @var array|null
     */
    public ?array $a_override = null;

    /**
     * Whether override is active.
     *
     * @var bool|null
     */
    public ?bool $has_override = null;

    public function __construct(array $data)
    {
        $this->a_override = isset($data['a_override']) ? (array)$data['a_override'] : null;
        $this->has_override = isset($data['has_override']) ? (bool)$data['has_override'] : null;
    }
}
