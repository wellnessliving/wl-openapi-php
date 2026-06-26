<?php

namespace WlSdk\Wl\Schedule\Page\AppointmentView;

class AppointmentViewGetResponseLocation
{
    /**
     * First address line of location.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Second address line of location.
     *
     * @var string|null
     */
    public ?string $text_address2 = null;

    /**
     * Name of city.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * Phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Postal code.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * Name of region.
     *
     * @var string|null
     */
    public ?string $text_region = null;

    /**
     * Title of the location.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_address2 = isset($data['text_address2']) ? (string)$data['text_address2'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_region = isset($data['text_region']) ? (string)$data['text_region'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
