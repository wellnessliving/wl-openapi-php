<?php
namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Deletes business phone number from the system.
 */
class PhoneDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
