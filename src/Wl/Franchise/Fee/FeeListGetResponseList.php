<?php

namespace WlSdk\Wl\Franchise\Fee;

class FeeListGetResponseList
{
    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

    /**
     * No description.
     *
     * @var int[]|null
     */
    public ?array $a_apply = null;

    /**
     * No description.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $f_fee = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $i_day = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $id_date_week = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $id_fee_schedule = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $id_fee_type = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $id_frequency = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $k_franchise_fee = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_min = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_remove = isset($data['is_remove']) ? (bool)$data['is_remove'] : null;
        $this->a_apply = isset($data['a_apply']) ? (array)$data['a_apply'] : null;
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->f_fee = isset($data['f_fee']) ? (string)$data['f_fee'] : null;
        $this->i_day = isset($data['i_day']) ? (int)$data['i_day'] : null;
        $this->id_date_week = isset($data['id_date_week']) ? (int)$data['id_date_week'] : null;
        $this->id_fee_schedule = isset($data['id_fee_schedule']) ? (int)$data['id_fee_schedule'] : null;
        $this->id_fee_type = isset($data['id_fee_type']) ? (int)$data['id_fee_type'] : null;
        $this->id_frequency = isset($data['id_frequency']) ? (int)$data['id_frequency'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_franchise_fee = isset($data['k_franchise_fee']) ? (string)$data['k_franchise_fee'] : null;
        $this->m_min = isset($data['m_min']) ? (string)$data['m_min'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
