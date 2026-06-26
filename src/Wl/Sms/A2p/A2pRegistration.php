<?php

namespace WlSdk\Wl\Sms\A2p;

use WlSdk\WlSdkClient;

/**
 * Creates and submits A2P10DLC registration for a business.
 */
class A2pRegistration
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates and submits A2P10DLC registration for a business.
     *
     * @return A2pRegistrationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(A2pRegistrationPostRequest $request): A2pRegistrationPostResponse
    {
        return new A2pRegistrationPostResponse($this->client->request('/Wl/Sms/A2p/A2pRegistration.json', $request->params(), 'POST'));
    }

    /**
     * Updates an A2P10DLC registration for a business.
     *
     * @return A2pRegistrationPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(A2pRegistrationPutRequest $request): A2pRegistrationPutResponse
    {
        return new A2pRegistrationPutResponse($this->client->request('/Wl/Sms/A2p/A2pRegistration.json', $request->params(), 'PUT'));
    }
}
