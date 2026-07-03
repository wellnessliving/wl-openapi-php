<?php

namespace WlSdk\Wl\Location\LocationRate;

/**
 * Response from GET
 */
class LocationRateGetResponse
{
    /**
     * Location rate.
     *
     * @var float|null
     */
    public ?float $f_rate = null;

    /**
     * Review count.
     *
     * @var int|null
     */
    public ?int $i_review = null;

    /**
     * Determines that the rate type exists in the current business type.
     *
     * @var bool|null
     */
    public ?bool $is_rate = null;

    public function __construct(array $data)
    {
        $this->f_rate = isset($data['f_rate']) ? (float)$data['f_rate'] : null;
        $this->i_review = isset($data['i_review']) ? (int)$data['i_review'] : null;
        $this->is_rate = isset($data['is_rate']) ? (bool)$data['is_rate'] : null;
    }
}
