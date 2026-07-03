<?php

namespace WlSdk\Wl\Classes\Period\Modify;

class ModifyPostRequest
{
    /**
     * The end date, returned in MySQL format and the local time.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * The start date, returned in MySQL format and the local time.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * The class modify step type. One of the {@link \WlSdk\RsClassModifyActionSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsClassModifyActionSid
     */
    public ?int $id_class_modify_action = null;

    /**
     * The modify mode type. One of the {@link \WlSdk\RsClassModifyModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsClassModifyModeSid
     */
    public ?int $id_class_modify_mode = null;

    /**
     * The mode type. One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * The class modify action type. One of the {@link \WlSdk\RsClassModifyModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsClassModifyModeSid
     */
    public ?int $id_step = null;

    /**
     * The step direction.
     *
     * `true` - step forward.
     *
     * `false` - step back.
     *
     * After each step, this variable sets to the default position.
     * By default, the step direction is forward.
     *
     * @var bool|null
     */
    public ?bool $is_back = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     *
     * This will be empty if not set yet.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The unique hash string.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * The list of data to save.
     *
     * Data depends on current [ModifyApi::$id_step](/Wl/Classes/Period/Modify/Modify.json):
     *
     * @var array|null
     */
    public ?array $a_set = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_end' => $this->dt_end,
            'dt_start' => $this->dt_start,
            'id_class_modify_action' => $this->id_class_modify_action,
            'id_class_modify_mode' => $this->id_class_modify_mode,
            'id_mode' => $this->id_mode,
            'id_step' => $this->id_step,
            'is_back' => $this->is_back,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_id' => $this->s_id,
            'a_set' => $this->a_set,
            ],
            static fn ($v) => $v !== null
        );
    }
}
