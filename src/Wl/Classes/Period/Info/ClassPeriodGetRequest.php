<?php

namespace WlSdk\Wl\Classes\Period\Info;

class ClassPeriodGetRequest
{
    /**
     * Datetime of the session.
     *
     * @var string|null
     */
    public ?string $dtu_session = null;

    /**
     * ID of book now tab.
     * One of {@link \WlSdk\Wl\Classes\Tab\TabSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\Tab\TabSid
     */
    public ?int $id_class_tab = null;

    /**
     * Key of a business to show information for.
     *
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of a class period to show information for.
     *
     * Primary key in RsClassPeriodSql.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Primary key of book now tab in Sql table.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_session' => $this->dtu_session,
            'id_class_tab' => $this->id_class_tab,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'k_class_tab' => $this->k_class_tab,
            ],
            static fn ($v) => $v !== null
        );
    }
}
