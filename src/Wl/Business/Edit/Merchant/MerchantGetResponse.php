<?php

namespace WlSdk\Wl\Business\Edit\Merchant;

/**
 * Response from GET
 */
class MerchantGetResponse
{
    /**
     * List of business merchants with detail information. Each element has next structure:
     *
     * @var MerchantGetResponseBusinessMerchantList|null
     */
    public ?MerchantGetResponseBusinessMerchantList $a_business_merchant_list = null;

    /**
     * Whether its admin.
     *
     * @var bool|null
     */
    public ?bool $is_admin = null;

    public function __construct(array $data)
    {
        $this->a_business_merchant_list = isset($data['a_business_merchant_list']) ? new MerchantGetResponseBusinessMerchantList((array)$data['a_business_merchant_list']) : null;
        $this->is_admin = isset($data['is_admin']) ? (bool)$data['is_admin'] : null;
    }
}
