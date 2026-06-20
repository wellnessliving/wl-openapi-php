<?php
namespace WlSdk\Wl\Member\Progress\Log\Edit;

class LogPostRequest
{
    /**
     * Progress log local date.
     * 
     * If `null` use the current date.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of fields.
     * 
     * Keys are field IDs ({@link \WlSdk\Wl\Member\Progress\Field\ProgressFieldSid} constants).
     * Values are new field values.
     * Structure of value completely defined by individual fields.
     *
     * @var \WlSdk\Wl\Member\Progress\Field\ProgressFieldSid[]|null
     */
    public ?array $a_field_log = null;

    /**
     * Whether field is only weight should be updated.
     *
     * @var bool|null
     */
    public ?bool $is_weight_only = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_field_log' => $this->a_field_log,
            'is_weight_only' => $this->is_weight_only,
            ],
            static fn($v) => $v !== null
        );
    }
}
