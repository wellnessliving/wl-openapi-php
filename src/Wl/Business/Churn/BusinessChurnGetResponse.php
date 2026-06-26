<?php

namespace WlSdk\Wl\Business\Churn;

/**
 * Response from GET
 */
class BusinessChurnGetResponse
{
    /**
     * `true` if business is a lost customer, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_churn = null;

    /**
     * Business name
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    public function __construct(array $data)
    {
        $this->is_churn = isset($data['is_churn']) ? (bool)$data['is_churn'] : null;
        $this->text_business_name = isset($data['text_business_name']) ? (string)$data['text_business_name'] : null;
    }
}
