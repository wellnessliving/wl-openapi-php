<?php
namespace WlSdk\Wl\Location;

class ListBulkGetResponseLocation
{
    /**
     * The latitude coordinate.
     *
     * @var float|null
     */
    public ?float $f_latitude = null;

    /**
     * The longitude coordinate.
     *
     * @var float|null
     */
    public ?float $f_longitude = null;

    /**
     * The location rate.
     *
     * @var float|null
     */
    public ?float $f_rate = null;

    /**
     * The order number.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * The business's primary key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location's primary key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The location title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The full location address.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * The location logo.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->f_latitude = isset($data['f_latitude']) ? (float)$data['f_latitude'] : null;
        $this->f_longitude = isset($data['f_longitude']) ? (float)$data['f_longitude'] : null;
        $this->f_rate = isset($data['f_rate']) ? (float)$data['f_rate'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
