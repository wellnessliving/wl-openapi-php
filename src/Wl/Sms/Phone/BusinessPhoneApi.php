<?php
namespace WlSdk\Wl\Sms\Phone;

use WlSdk\WlSdkClient;

/**
 * Gets the phone number associated with a specific business.
 */
class BusinessPhoneApi
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * @return BusinessPhoneApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BusinessPhoneApiGetResponse
    {
        return new BusinessPhoneApiGetResponse($this->client->request('/Wl/Sms/Phone/BusinessPhone.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
