<?php
namespace WlSdk\Thoth\WlPay\Address;

use WlSdk\WlSdkClient;

/**
 * Returns default payment address data that is retrieved from user profile.
 */
class ProfileGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns default payment address data that is retrieved from user profile.
     *
     * @return ProfileGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProfileGetRequest $request): ProfileGetResponse
    {
        return new ProfileGetResponse($this->client->request('/Thoth/WlPay/Address/Profile.json', $request->params(), 'GET'));
    }
}
