<?php

namespace WlSdk\Wl\Integration\GoHighLevel\Location;

class LocationPostRequest
{
    /**
     * Location key.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Go High Level location id.
     *
     * @var string|null
     */
    public ?string $text_location_id = null;

    /**
     * Go High Level location token.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_location' => $this->a_location,
            'k_business' => $this->k_business,
            'text_location_id' => $this->text_location_id,
            'text_token' => $this->text_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
