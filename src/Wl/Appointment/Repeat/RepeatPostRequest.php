<?php

namespace WlSdk\Wl\Appointment\Repeat;

class RepeatPostRequest
{
    /**
     * Whether future appointments should be booked unpaid even if client have applicable purchase option.
     *
     * @var bool|null
     */
    public ?bool $is_repeat_unpaid = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

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
            'is_repeat_unpaid' => $this->is_repeat_unpaid,
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
