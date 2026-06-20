<?php
namespace WlSdk\Wl\Location;

class ListGetResponseLocation
{
    /**
     * List of directories from [RsProjectSid](#/components/schemas/RsProjectSid), where location is published.
     *
     * @var int[]|null
     */
    public ?array $a_directories = null;

    /**
     * Information about location timezone:
     *
     * @var ListGetResponseLocationTimezone|null
     */
    public ?ListGetResponseLocationTimezone $a_timezone = null;

    /**
     * The location latitude.
     *
     * @var float|null
     */
    public ?float $f_latitude = null;

    /**
     * The location longitude.
     *
     * @var float|null
     */
    public ?float $f_longitude = null;

    /**
     * Timezone shift in hours.
     *
     * @var int|null
     */
    public ?int $i_shift = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Country key.
     *
     * @var string|null
     */
    public ?string $k_country = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Region key.
     *
     * @var string|null
     */
    public ?string $k_region = null;

    /**
     * The location email address.
     *
     * @var string|null
     */
    public ?string $s_mail = null;

    /**
     * The location phone number.
     *
     * @var string|null
     */
    public ?string $s_phone = null;

    /**
     * The location title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The location's full address.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * The location logo's URL. This will only be set if the location has a logo and contains small thumbnail of
     * the image.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    /**
     * The location logo's URL. This will only be set if the location has a logo and contains full uploaded image.
     *
     * @var string|null
     */
    public ?string $url_logo_source = null;

    public function __construct(array $data)
    {
        $this->a_directories = isset($data['a_directories']) ? (array)$data['a_directories'] : null;
        $this->a_timezone = isset($data['a_timezone']) ? new ListGetResponseLocationTimezone((array)$data['a_timezone']) : null;
        $this->f_latitude = isset($data['f_latitude']) ? (float)$data['f_latitude'] : null;
        $this->f_longitude = isset($data['f_longitude']) ? (float)$data['f_longitude'] : null;
        $this->i_shift = isset($data['i_shift']) ? (int)$data['i_shift'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_country = isset($data['k_country']) ? (string)$data['k_country'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_region = isset($data['k_region']) ? (string)$data['k_region'] : null;
        $this->s_mail = isset($data['s_mail']) ? (string)$data['s_mail'] : null;
        $this->s_phone = isset($data['s_phone']) ? (string)$data['s_phone'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
        $this->url_logo_source = isset($data['url_logo_source']) ? (string)$data['url_logo_source'] : null;
    }
}
