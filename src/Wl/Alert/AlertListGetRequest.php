<?php

namespace WlSdk\Wl\Alert;

class AlertListGetRequest
{
    /**
     * Whether to return the pinned tasks of {@link \WlSdk\Wl\Alert\AlertListGetResponse::$a_pinned}. `true` to
     * return them, `false` otherwise.
     * Only a client that draws the group asks for it.
     *
     * @var bool|null
     */
    public ?bool $is_pinned = null;

    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_pinned' => $this->is_pinned,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
