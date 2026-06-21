<?php

namespace WlSdk\Wl\Integration\Curves;

class CurvesFranchiseLocationGetResponseLocationList
{
    /**
     * Currency ID. One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\CurrencySid
     */
    public ?int $id_currency = null;

    /**
     * City key.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * Country key.
     *
     * @var string|null
     */
    public ?string $k_country = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Franchise region key.
     *
     * @var string|null
     */
    public ?string $k_region = null;

    /**
     * State key.
     *
     * @var string|null
     */
    public ?string $k_state = null;

    /**
     * Location title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_currency = isset($data['id_currency']) ? (int)$data['id_currency'] : null;
        $this->k_city = isset($data['k_city']) ? (string)$data['k_city'] : null;
        $this->k_country = isset($data['k_country']) ? (string)$data['k_country'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_region = isset($data['k_region']) ? (string)$data['k_region'] : null;
        $this->k_state = isset($data['k_state']) ? (string)$data['k_state'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
