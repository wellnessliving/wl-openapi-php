<?php
namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Returns phone number(in locale format) of the business, if phone number does not exist returns empty line.
 */
class Phone
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns phone number(in locale format) of the business, if phone number does not exist returns empty line.
     *
     * Used in the SMS settings UI to display the currently registered business phone number and its input
     * mask. The locale is derived from the business's office country so the number is formatted correctly
     * for that region.
     *
     * @return PhoneGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PhoneGetRequest $request): PhoneGetResponse
    {
        return new PhoneGetResponse($this->client->request('/Wl/Business/Phone/Phone.json', $request->params(), 'GET'));
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

    /**
     * Deletes business phone number from the system.
     *
     * Used by WellnessLiving admins to decommission a business's SMS messaging service. After deletion,
     * the business can no longer receive inbound SMS notifications. Admin privileges are required.
     *
     * @return PhoneDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(PhoneDeleteRequest $request): PhoneDeleteResponse
    {
        return new PhoneDeleteResponse($this->client->request('/Wl/Business/Phone/Phone.json', $request->params(), 'DELETE'));
    }
}
