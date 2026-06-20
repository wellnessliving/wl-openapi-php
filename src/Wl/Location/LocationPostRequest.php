<?php

namespace WlSdk\Wl\Location;

class LocationPostRequest
{
    /**
     * The key of the business.
     * This field is required.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the city.
     * This field is required for creating a new location.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * The key of the location.
     * This will be `null` if it's being used to create a new location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the time zone.
     * This field is optional.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The address of the location.
     * This field is required for creating a new location.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * The mail address.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /**
     * The phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * The postal code.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * The title of the location.
     * This field is required for creating a new location.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_city' => $this->k_city,
            'k_location' => $this->k_location,
            'k_timezone' => $this->k_timezone,
            'text_address' => $this->text_address,
            'text_email' => $this->text_email,
            'text_phone' => $this->text_phone,
            'text_postal' => $this->text_postal,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
