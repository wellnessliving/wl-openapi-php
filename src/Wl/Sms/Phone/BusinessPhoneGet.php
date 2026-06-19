<?php
namespace WlSdk\Wl\Sms\Phone;

use WlSdk\WlSdkClient;

/**
 * Gets the phone number associated with a specific business.
 */
class BusinessPhoneGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the phone number associated with a specific business.
     *
     * Returns the dedicated sender phone number configured for the business's 2-Way SMS feature.
     * Requires the `wl.business.phone` API privilege. Returns `null` or an empty value if the
     * business has not configured a 2-Way SMS number.
     *
     * @return BusinessPhoneGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessPhoneGetRequest $request): BusinessPhoneGetResponse
    {
        return new BusinessPhoneGetResponse($this->client->request('/Wl/Sms/Phone/BusinessPhone.json', $request->params(), 'GET'));
    }
}
