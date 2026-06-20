<?php
namespace WlSdk\Wl\Business\Config;

class BusinessConfigGetResponsePenalty
{
    /**
     * List of class period keys.
     *
     * @var string[]|null
     */
    public ?array $a_class_period = null;

    /**
     * List of client type keys.
     * 
     * Empty array means all active login types at concrete business.
     *
     * @var string[]|null
     */
    public ?array $a_login_type = null;

    /**
     * List of resources keys.
     *
     * @var string[]|null
     */
    public ?array $a_resource = null;

    /**
     * List of services keys.
     *
     * @var string[]|null
     */
    public ?array $a_service = null;

    /**
     * Number of blamed visits.
     *
     * @var int|null
     */
    public ?int $i_blame = null;

    /**
     * Count of days/weeks/months.
     *
     * @var int|null
     */
    public ?int $i_cancel_period = null;

    /**
     * Count of applied penalty.
     *
     * @var int|null
     */
    public ?int $i_charge_measure = null;

    /**
     * One of {@link \WlSdk\Wl\Business\Policy\BlameSid} constants.
     *
     * @var \WlSdk\Wl\Business\Policy\BlameSid|null
     */
    public ?\WlSdk\Wl\Business\Policy\BlameSid $id_blame = null;

    /**
     * Duration ID. One of {@link \WlSdk\ADurationSid} constants.
     *
     * @var \WlSdk\ADurationSid|null
     */
    public ?\WlSdk\ADurationSid $id_cancel_period = null;

    /**
     * One of {@link \WlSdk\Wl\Business\Policy\ChargeSid} constants.
     *
     * @var \WlSdk\Wl\Business\Policy\ChargeSid|null
     */
    public ?\WlSdk\Wl\Business\Policy\ChargeSid $id_charge = null;

    /**
     * Charge measure type. `0` for percent, `1` for money amount.
     *
     * @var int|null
     */
    public ?int $id_charge_measure = null;

    /**
     * `1` if all classes are selected, `0` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_appointment_all = null;

    /**
     * `1` if all classes are selected, `0` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_class_all = null;

    /**
     * `true` if promotion penalties is enable, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_enable_cancel_charge = null;

    /**
     * `1` if all events are selected, `0` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_event_all = null;

    /**
     * `1` if all login types are selected, `0` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_login_type_all = null;

    /**
     * `1` if all resources are selected, `0` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_resource_all = null;

    /**
     * `1` if all services are selected, `0` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_service_all = null;

    public function __construct(array $data)
    {
        $this->a_class_period = isset($data['a_class_period']) ? (array)$data['a_class_period'] : null;
        $this->a_login_type = isset($data['a_login_type']) ? (array)$data['a_login_type'] : null;
        $this->a_resource = isset($data['a_resource']) ? (array)$data['a_resource'] : null;
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
        $this->i_blame = isset($data['i_blame']) ? (int)$data['i_blame'] : null;
        $this->i_cancel_period = isset($data['i_cancel_period']) ? (int)$data['i_cancel_period'] : null;
        $this->i_charge_measure = isset($data['i_charge_measure']) ? (int)$data['i_charge_measure'] : null;
        $this->id_blame = isset($data['id_blame']) ? \WlSdk\Wl\Business\Policy\BlameSid::tryFrom((int)$data['id_blame']) : null;
        $this->id_cancel_period = isset($data['id_cancel_period']) ? \WlSdk\ADurationSid::tryFrom((int)$data['id_cancel_period']) : null;
        $this->id_charge = isset($data['id_charge']) ? \WlSdk\Wl\Business\Policy\ChargeSid::tryFrom((int)$data['id_charge']) : null;
        $this->id_charge_measure = isset($data['id_charge_measure']) ? (int)$data['id_charge_measure'] : null;
        $this->is_appointment_all = isset($data['is_appointment_all']) ? (bool)$data['is_appointment_all'] : null;
        $this->is_class_all = isset($data['is_class_all']) ? (bool)$data['is_class_all'] : null;
        $this->is_enable_cancel_charge = isset($data['is_enable_cancel_charge']) ? (bool)$data['is_enable_cancel_charge'] : null;
        $this->is_event_all = isset($data['is_event_all']) ? (bool)$data['is_event_all'] : null;
        $this->is_login_type_all = isset($data['is_login_type_all']) ? (bool)$data['is_login_type_all'] : null;
        $this->is_resource_all = isset($data['is_resource_all']) ? (bool)$data['is_resource_all'] : null;
        $this->is_service_all = isset($data['is_service_all']) ? (bool)$data['is_service_all'] : null;
    }
}
