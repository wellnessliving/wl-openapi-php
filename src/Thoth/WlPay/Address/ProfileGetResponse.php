<?php

namespace WlSdk\Thoth\WlPay\Address;

/**
 * Response from GET
 */
class ProfileGetResponse
{
    /**
     * The country key.
     *
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_geo_country = null;

    /**
     * The region ID.
     *
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_geo_region = null;

    /**
     * The name of the city in the address.
     *
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $s_city = null;

    /**
     * The client name as listed in their address.
     *
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * The client phone number.
     *
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $s_phone = null;

    /**
     * The client postal or zip code.
     *
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $s_postal = null;

    /**
     * The first line of the client address.
     *
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $s_street1 = null;

    /**
     * The second line of the client address.
     *
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $s_street2 = null;

    public function __construct(array $data)
    {
        $this->k_geo_country = isset($data['k_geo_country']) ? (string)$data['k_geo_country'] : null;
        $this->k_geo_region = isset($data['k_geo_region']) ? (string)$data['k_geo_region'] : null;
        $this->s_city = isset($data['s_city']) ? (string)$data['s_city'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_phone = isset($data['s_phone']) ? (string)$data['s_phone'] : null;
        $this->s_postal = isset($data['s_postal']) ? (string)$data['s_postal'] : null;
        $this->s_street1 = isset($data['s_street1']) ? (string)$data['s_street1'] : null;
        $this->s_street2 = isset($data['s_street2']) ? (string)$data['s_street2'] : null;
    }
}
