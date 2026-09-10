<?php

namespace WlSdk\Wl\Purchase\Item;

class PurchaseItemListGetResponseAdditionalInfo
{
    /**
     * Business address.
     *
     * @var string|null
     */
    public ?string $html_business_address = null;

    /**
     * Business mail.
     *
     * @var string|null
     */
    public ?string $html_business_mail = null;

    /**
     * Business phone.
     *
     * @var string|null
     */
    public ?string $html_business_phone = null;

    /**
     * Business name.
     *
     * @var string|null
     */
    public ?string $html_business_title = null;

    /**
     * Text which will be in footer of receipt check.
     *
     * @var string|null
     */
    public ?string $html_receipt = null;

    /**
     * Customer address.
     *
     * @var string|null
     */
    public ?string $html_user_address = null;

    /**
     * Customer mail.
     *
     * @var string|null
     */
    public ?string $html_user_mail = null;

    /**
     * Customer name.
     *
     * @var string|null
     */
    public ?string $html_user_name = null;

    /**
     * Customer phone.
     *
     * @var string|null
     */
    public ?string $html_user_phone = null;

    public function __construct(array $data)
    {
        $this->html_business_address = isset($data['html_business_address']) ? (string)$data['html_business_address'] : null;
        $this->html_business_mail = isset($data['html_business_mail']) ? (string)$data['html_business_mail'] : null;
        $this->html_business_phone = isset($data['html_business_phone']) ? (string)$data['html_business_phone'] : null;
        $this->html_business_title = isset($data['html_business_title']) ? (string)$data['html_business_title'] : null;
        $this->html_receipt = isset($data['html_receipt']) ? (string)$data['html_receipt'] : null;
        $this->html_user_address = isset($data['html_user_address']) ? (string)$data['html_user_address'] : null;
        $this->html_user_mail = isset($data['html_user_mail']) ? (string)$data['html_user_mail'] : null;
        $this->html_user_name = isset($data['html_user_name']) ? (string)$data['html_user_name'] : null;
        $this->html_user_phone = isset($data['html_user_phone']) ? (string)$data['html_user_phone'] : null;
    }
}
