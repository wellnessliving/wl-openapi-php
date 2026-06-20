<?php
namespace WlSdk\Thoth\WlPay\Address;

class AddressGetResponsePayAddress
{
    /**
     * `true` if this address is currently selected, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_selected = null;

    /**
     * Country geo key. `null` if the country cannot be determined.
     *
     * @var string|null
     */
    public ?string $k_country = null;

    /**
     * Payment address key. Primary key in the `rs_pay_address` table.
     *
     * @var string|null
     */
    public ?string $k_pay_address = null;

    /**
     * Region geo key.
     *
     * @var string|null
     */
    public ?string $k_region = null;

    /**
     * City name.
     *
     * @var string|null
     */
    public ?string $s_city = null;

    /**
     * Country name. `null` if the country cannot be determined.
     *
     * @var string|null
     */
    public ?string $s_country = null;

    /**
     * Country abbreviation code, or an empty string if unavailable.
     *
     * @var string|null
     */
    public ?string $s_country_code = null;

    /**
     * Full name of the address owner.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Phone number.
     *
     * @var string|null
     */
    public ?string $s_phone = null;

    /**
     * Postal code.
     *
     * @var string|null
     */
    public ?string $s_postal = null;

    /**
     * Region name.
     *
     * @var string|null
     */
    public ?string $s_region = null;

    /**
     * Region abbreviation code. `null` if the region cannot be determined.
     *
     * @var string|null
     */
    public ?string $s_region_code = null;

    /**
     * First line of the street address.
     *
     * @var string|null
     */
    public ?string $s_street1 = null;

    /**
     * Second line of the street address.
     *
     * @var string|null
     */
    public ?string $s_street2 = null;

    /**
     * Email address of the owner. `null` if the owner is a business.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    public function __construct(array $data)
    {
        $this->is_selected = isset($data['is_selected']) ? (bool)$data['is_selected'] : null;
        $this->k_country = isset($data['k_country']) ? (string)$data['k_country'] : null;
        $this->k_pay_address = isset($data['k_pay_address']) ? (string)$data['k_pay_address'] : null;
        $this->k_region = isset($data['k_region']) ? (string)$data['k_region'] : null;
        $this->s_city = isset($data['s_city']) ? (string)$data['s_city'] : null;
        $this->s_country = isset($data['s_country']) ? (string)$data['s_country'] : null;
        $this->s_country_code = isset($data['s_country_code']) ? (string)$data['s_country_code'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_phone = isset($data['s_phone']) ? (string)$data['s_phone'] : null;
        $this->s_postal = isset($data['s_postal']) ? (string)$data['s_postal'] : null;
        $this->s_region = isset($data['s_region']) ? (string)$data['s_region'] : null;
        $this->s_region_code = isset($data['s_region_code']) ? (string)$data['s_region_code'] : null;
        $this->s_street1 = isset($data['s_street1']) ? (string)$data['s_street1'] : null;
        $this->s_street2 = isset($data['s_street2']) ? (string)$data['s_street2'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
    }
}
