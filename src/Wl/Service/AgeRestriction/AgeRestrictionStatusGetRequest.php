<?php

namespace WlSdk\Wl\Service\AgeRestriction;

class AgeRestrictionStatusGetRequest
{
    /**
     * Whether a client can book class.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Class period key.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_date' => $this->dtu_date,
            'k_class_period' => $this->k_class_period,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
