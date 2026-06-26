<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Onboarding;

/**
 * Response from POST
 */
class CreateAccountPostResponse
{
    /**
     * Key of the created business merchant. Primary key in RsBusinessMerchantSql.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    /**
     * URL to redirect user to Stripe dashboard to upload documents.
     *
     * @var string|null
     */
    public ?string $url_account = null;

    public function __construct(array $data)
    {
        $this->k_business_merchant = isset($data['k_business_merchant']) ? (string)$data['k_business_merchant'] : null;
        $this->url_account = isset($data['url_account']) ? (string)$data['url_account'] : null;
    }
}
