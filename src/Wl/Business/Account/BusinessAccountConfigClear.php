<?php

namespace WlSdk\Wl\Business\Account;

use WlSdk\WlSdkClient;

/**
 * Clears an existing payment and sets the payment to the status of 'Clear Balance'.
 * Clear balance is used when WellnessLiving wants to forgive outstanding payments for a business.
 * 'Clear Balance' is a type of payment method and corresponds to the
 * [RsPayMethodSid::CLEAR_BALANCE](#/components/schemas/RsPayMethodSid) constant.
 */
class BusinessAccountConfigClear
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Clears an existing payment and sets the payment to the status of 'Clear Balance'.
Clear balance is used when WellnessLiving wants to forgive outstanding payments for a business.
'Clear Balance' is a type of payment method and corresponds to the {@link \WlSdk\RsPayMethodSid} constant.
     *
     * @return BusinessAccountConfigClearPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessAccountConfigClearPostRequest $request): BusinessAccountConfigClearPostResponse
    {
        return new BusinessAccountConfigClearPostResponse($this->client->request('/Wl/Business/Account/BusinessAccountConfigClear.json', $request->params(), 'POST'));
    }
}
