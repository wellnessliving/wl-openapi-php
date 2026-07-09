<?php

namespace WlSdk\Wl\Pay\Form;

class EnvironmentGetResponsePayProcessor
{
    /**
     * Public keys configured for this payment processor.
     *
     * `null` if this payment processor does not support public keys.
     *
     * @var array|null
     */
    public ?array $a_public_keys = null;

    /**
     * Public info configured for this payment processor.
     *
     * `null` if this payment processor does not support public info.
     *
     * @var array|null
     */
    public ?array $a_public_info = null;

    /**
     * Whether `save payment method` option should be hidden. `true` if hidden, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_save_source = null;

    /**
     * ID of the payment processor. One of {@link \WlSdk\Thoth\PayProcessor\PayProcessorSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\PayProcessorSid
     */
    public ?int $id_pay_processor = null;

    /**
     * `true` if 3DS should be performed, `false` if 3DS should not be performed. `null` if this is not defined for
     * payment processor.
     * Only for {@link \WlSdk\Thoth\PayProcessor\PayProcessorSid}
     *
     * @var bool|null
     */
    public ?bool $is_enabled_3ds = null;

    /**
     * `true` if the merchant is in a test mode, `false` otherwise.
     * `null` if this is not defined for payment processor.
     *
     * @var bool|null
     */
    public ?bool $is_test = null;

    /**
     * Key of the business merchant.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    public function __construct(array $data)
    {
        $this->a_public_keys = isset($data['a_public_keys']) ? (array)$data['a_public_keys'] : null;
        $this->a_public_info = isset($data['a_public_info']) ? (array)$data['a_public_info'] : null;
        $this->hide_save_source = isset($data['hide_save_source']) ? (bool)$data['hide_save_source'] : null;
        $this->id_pay_processor = isset($data['id_pay_processor']) ? (int)$data['id_pay_processor'] : null;
        $this->is_enabled_3ds = isset($data['is_enabled_3ds']) ? (bool)$data['is_enabled_3ds'] : null;
        $this->is_test = isset($data['is_test']) ? (bool)$data['is_test'] : null;
        $this->k_business_merchant = isset($data['k_business_merchant']) ? (string)$data['k_business_merchant'] : null;
    }
}
