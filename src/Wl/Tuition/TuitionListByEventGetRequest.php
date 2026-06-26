<?php

namespace WlSdk\Wl\Tuition;

class TuitionListByEventGetRequest
{
    /**
     * Business key from RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the event to get list of tuition for.
     *
     * @var string|null
     */
    public ?string $k_event = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_event' => $this->k_event,
            ],
            static fn ($v) => $v !== null
        );
    }
}
