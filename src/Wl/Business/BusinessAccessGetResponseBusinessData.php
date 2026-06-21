<?php

namespace WlSdk\Wl\Business;

class BusinessAccessGetResponseBusinessData
{
    /**
     * The business region. One of the {@link \WlSdk\Core\Amazon\Region\AmazonRegionSid} constants. This will be
     * `null` if no regions are currently set.
     *
     * @var int|null
     * @see \WlSdk\Core\Amazon\Region\AmazonRegionSid
     */
    public ?int $id_region = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The business address.
     *
     * @var string|null
     */
    public ?string $text_office_address = null;

    /**
     * The business title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The business logo URL. This will be empty if the business hasn't added a logo.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->id_region = isset($data['id_region']) ? (int)$data['id_region'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->text_office_address = isset($data['text_office_address']) ? (string)$data['text_office_address'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
