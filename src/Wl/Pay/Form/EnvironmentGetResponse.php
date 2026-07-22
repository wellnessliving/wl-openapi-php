<?php

namespace WlSdk\Wl\Pay\Form;

/**
 * Response from GET
 */
class EnvironmentGetResponse
{
    /**
     * A list of supported bank card systems.
     * Keys refer to card types based on card numbers (see {@link \WlSdk\ACardSystemSid}),
     * and values are IDs of card systems (one of {@link \WlSdk\ACardSystemSid} constants).
     *
     * @var int[]|null
     */
    public ?array $a_card_system = null;

    /**
     * A list of payment methods enabled for staff members.
     * The ID is one of {@link \WlSdk\RsPayMethodSid} constants.
     * The value is always `true`.
     *
     * @var int[]|null
     */
    public ?array $a_method_staff = null;

    /**
     * A list of all payment methods that can be used within this business.
     * This array is sorted in the order in which payment methods should be shown to the user.
     * Each element of the array has the following structure:
     *
     * @var EnvironmentGetResponseMethodSupport[]|null
     */
    public ?array $a_method_support = null;

    /**
     * The configuration array that's sent to mobile card reader plugin.
     * The structure of this array depends on the payment processor being used.
     * `null` when mobile card readers are not supported, or when actor has no access to them.
     *
     * @var array|mixed|null
     */
    public $a_mobile_config = null;

    /**
     * Represents information about payment processors.
     *
     * Keys are payment methods IDs, one of {@link \WlSdk\RsPayMethodSid} constants.
     *
     * Value is the following array:
     *
     * `null` if no processors are set up.
     *
     * @var EnvironmentGetResponsePayProcessor[]|null
     */
    public ?array $a_pay_processor = null;

    /**
     * Current local date in current location {@link \WlSdk\Thoth\WlPay\Form\Environment}
     * or business {@link \WlSdk\Thoth\WlPay\Form\Environment} if not set location.
     *
     * @var string|null
     */
    public ?string $dl_now = null;

    /**
     * Surcharge amount for payment with card represented as a percent of transaction amount.
     *
     * This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
     *
     * @var string|null
     */
    public ?string $f_surcharge = null;

    /**
     * Surcharge amount for payment with ACH represented as a percent of transaction amount.
     *
     * This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
     *
     * @var string|null
     */
    public ?string $f_surcharge_ach = null;

    /**
     * The locale ID of the business.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\LocaleSid
     */
    public ?int $id_locale = null;

    /**
     * `true` if clients can choose whether their banking and credit card information is saved at checkout,
     * `false` if this information is always saved.
     *
     * @var bool|null
     */
    public ?bool $is_save_optional = null;

    /**
     * Determines whether newly added payment sources should be saved. This will be `true` if payment sources
     * should be saved,
     * `false` if otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_save_source = null;

    /**
     * Whether tips are accepted.
     *
     * @var bool|null
     */
    public ?bool $is_tip = null;

    /**
     * Surcharge amount for payment with card represented as a fixed amount.
     *
     * This will be `null` if the fixed surcharge amount shouldn't be withdrawn.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * Surcharge amount for payment with ACH represented as a fixed amount.
     *
     * This will be `null` if the fixed surcharge amount shouldn't be withdrawn.
     *
     * @var string|null
     */
    public ?string $m_surcharge_ach = null;

    public function __construct(array $data)
    {
        $this->a_card_system = isset($data['a_card_system']) ? (array)$data['a_card_system'] : null;
        $this->a_method_staff = isset($data['a_method_staff']) ? (array)$data['a_method_staff'] : null;
        $this->a_method_support = isset($data['a_method_support']) ? array_map(static fn ($item) => new EnvironmentGetResponseMethodSupport((array)$item), (array)$data['a_method_support']) : null;
        $this->a_mobile_config = $data['a_mobile_config'] ?? null;
        $this->a_pay_processor = isset($data['a_pay_processor']) ? array_map(static fn ($item) => new EnvironmentGetResponsePayProcessor((array)$item), (array)$data['a_pay_processor']) : null;
        $this->dl_now = isset($data['dl_now']) ? (string)$data['dl_now'] : null;
        $this->f_surcharge = isset($data['f_surcharge']) ? (string)$data['f_surcharge'] : null;
        $this->f_surcharge_ach = isset($data['f_surcharge_ach']) ? (string)$data['f_surcharge_ach'] : null;
        $this->id_locale = isset($data['id_locale']) ? (int)$data['id_locale'] : null;
        $this->is_save_optional = isset($data['is_save_optional']) ? (bool)$data['is_save_optional'] : null;
        $this->is_save_source = isset($data['is_save_source']) ? (bool)$data['is_save_source'] : null;
        $this->is_tip = isset($data['is_tip']) ? (bool)$data['is_tip'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
        $this->m_surcharge_ach = isset($data['m_surcharge_ach']) ? (string)$data['m_surcharge_ach'] : null;
    }
}
