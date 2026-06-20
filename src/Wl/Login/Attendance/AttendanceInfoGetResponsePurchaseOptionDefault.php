<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceInfoGetResponsePurchaseOptionDefault
{
    /**
     * The sale item type, one of the {@link \WlSdk\RsSaleSid} constants.
     * This will be `null` if the class has no default Purchase Option, or it sets to "Drop-in rate".
     *
     * @var int|null
     * @see \WlSdk\RsSaleSid
     */
    public ?int $id_sale = null;

    /**
     * The default Purchase Option key.
     * This will be `null` if the class has no default Purchase Option, or it sets to "Drop-in rate".
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * If the default Purchase Option is set to "Drop-in rate" then the value will be `true`, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_single_default = null;

    public function __construct(array $data)
    {
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->is_single_default = isset($data['is_single_default']) ? (bool)$data['is_single_default'] : null;
    }
}
