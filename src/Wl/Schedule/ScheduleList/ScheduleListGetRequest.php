<?php

namespace WlSdk\Wl\Schedule\ScheduleList;

class ScheduleListGetRequest
{
    /**
     * Date to show information for.
     * In MySQL format, without time.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * ID of group of category tab. One of {@link \WlSdk\Wl\Classes\Tab\TabSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\Tab\TabSid
     */
    public ?int $id_class_tab = null;

    /**
     * ID of category tab in database.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * ID of business location to show information for.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * ID of user to show information for. Primary key in table PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'id_class_tab' => $this->id_class_tab,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
