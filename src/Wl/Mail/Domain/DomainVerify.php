<?php

namespace WlSdk\Wl\Mail\Domain;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Mail/Domain/DomainVerify.json
 */
class DomainVerify
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Mail/Domain/DomainVerify.json.
     *
     * @return DomainVerifyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DomainVerifyPostRequest $request): DomainVerifyPostResponse
    {
        return new DomainVerifyPostResponse($this->client->request('/Wl/Mail/Domain/DomainVerify.json', $request->params(), 'POST'));
    }
}
