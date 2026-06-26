<?php

namespace WlSdk\Wl\Profile\Rank;

class AddonGetResponseAddon
{
    /**
     * Date, when rank has been added.
     *
     * @var string|null
     */
    public ?string $dt_add = null;

    /**
     * Rank key. Primary key in the RsRankSql table.
     *
     * @var string|null
     */
    public ?string $k_rank = null;

    /**
     * Category rank key. Primary key in the RsRankCategorySql table.
     *
     * @var string|null
     */
    public ?string $k_rank_category = null;

    /**
     * Rank name.
     *
     * @var string|null
     */
    public ?string $s_rank = null;

    /**
     * Rank category name.
     *
     * @var string|null
     */
    public ?string $s_rank_category = null;

    /**
     * User's key. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Compressed and serialised list of addons, that client has.
     *
     * @var string|null
     */
    public ?string $z_addon = null;

    /**
     * Colors for character and skill sections.
     *
     * @var string[]|null
     */
    public ?array $a_addon = null;

    /**
     * Date, when rank has been added.
     *
     * @var string|null
     */
    public ?string $s_date = null;

    /**
     * The number of days that have passed since the start date of the set time period for class attendance.
     *
     * @var int|null
     */
    public ?int $i_days_left = null;

    /**
     * The number of days/months/years that were set for attending the classes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Tha name of the duration (day/month/year).
     *
     * @var string|null
     */
    public ?string $s_duration = null;

    public function __construct(array $data)
    {
        $this->dt_add = isset($data['dt_add']) ? (string)$data['dt_add'] : null;
        $this->k_rank = isset($data['k_rank']) ? (string)$data['k_rank'] : null;
        $this->k_rank_category = isset($data['k_rank_category']) ? (string)$data['k_rank_category'] : null;
        $this->s_rank = isset($data['s_rank']) ? (string)$data['s_rank'] : null;
        $this->s_rank_category = isset($data['s_rank_category']) ? (string)$data['s_rank_category'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->z_addon = isset($data['z_addon']) ? (string)$data['z_addon'] : null;
        $this->a_addon = isset($data['a_addon']) ? (array)$data['a_addon'] : null;
        $this->s_date = isset($data['s_date']) ? (string)$data['s_date'] : null;
        $this->i_days_left = isset($data['i_days_left']) ? (int)$data['i_days_left'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->s_duration = isset($data['s_duration']) ? (string)$data['s_duration'] : null;
    }
}
