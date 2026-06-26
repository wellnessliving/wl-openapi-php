<?php

namespace WlSdk\Wl\Business\Account\Agreement;

use WlSdk\WlSdkClient;

/**
 * Discards the current agreement, and replaces it with a newly generated one.
 */
class Agreement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Discards the current agreement, and replaces it with a newly generated one.
     *
     * @return AgreementPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AgreementPutRequest $request): AgreementPutResponse
    {
        return new AgreementPutResponse($this->client->request('/Wl/Business/Account/Agreement/Agreement.json', $request->params(), 'PUT'));
    }
}
