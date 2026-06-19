<?php
namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Registers business phone number in system.
 */
class PhonePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Registers business phone number in system.
     *
     * Used when a business enables SMS messaging for the first time or replaces an existing number.
     * Provisions a messaging service with the SMS provider so the business can receive inbound client
     * messages. If the same number is already registered for this business, the call is a no-op.
     *
     * @return PhonePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PhonePostRequest $request): PhonePostResponse
    {
        return new PhonePostResponse($this->client->request('/Wl/Business/Phone/Phone.json', $request->params(), 'POST'));
    }
}
