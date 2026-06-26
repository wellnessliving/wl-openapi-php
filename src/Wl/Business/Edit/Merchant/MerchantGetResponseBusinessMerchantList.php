<?php

namespace WlSdk\Wl\Business\Edit\Merchant;

class MerchantGetResponseBusinessMerchantList
{
    /**
     * Additional business merchant settings.
     *
     * @var array|null
     */
    public ?array $a_merchant = null;

    /**
     * List of supported payment methods:
     *
     * @var MerchantGetResponseBusinessMerchantListPayMethod|null
     */
    public ?MerchantGetResponseBusinessMerchantListPayMethod $a_pay_method = null;

    /**
     * ID payment gateway from {@link \WlSdk\Thoth\PayProcessor\PayProcessorSid}.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\PayProcessorSid
     */
    public ?int $id_pay_processor = null;

    /**
     * Key of the business merchant. Primary key from RsBusinessMerchantSql table.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    /**
     * Payment gateway title.
     *
     * @var string|null
     */
    public ?string $text_gateway_title = null;

    /**
     * Merchant ID.
     *
     * @var string|null
     */
    public ?string $text_merchant_id = null;

    /**
     * Payment processor title.
     *
     * @var string|null
     */
    public ?string $text_processor_title = null;

    public function __construct(array $data)
    {
        $this->a_merchant = isset($data['a_merchant']) ? (array)$data['a_merchant'] : null;
        $this->a_pay_method = isset($data['a_pay_method']) ? new MerchantGetResponseBusinessMerchantListPayMethod((array)$data['a_pay_method']) : null;
        $this->id_pay_processor = isset($data['id_pay_processor']) ? (int)$data['id_pay_processor'] : null;
        $this->k_business_merchant = isset($data['k_business_merchant']) ? (string)$data['k_business_merchant'] : null;
        $this->text_gateway_title = isset($data['text_gateway_title']) ? (string)$data['text_gateway_title'] : null;
        $this->text_merchant_id = isset($data['text_merchant_id']) ? (string)$data['text_merchant_id'] : null;
        $this->text_processor_title = isset($data['text_processor_title']) ? (string)$data['text_processor_title'] : null;
    }
}
