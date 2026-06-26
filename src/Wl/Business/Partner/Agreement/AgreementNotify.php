<?php

namespace WlSdk\Wl\Business\Partner\Agreement;

use WlSdk\WlSdkClient;

/**
 * Sets that a staff got acquainted with changes in partner program agreement.
 */
class AgreementNotify
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sets that a staff got acquainted with changes in partner program agreement.
     *
     * @return AgreementNotifyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AgreementNotifyPostRequest $request): AgreementNotifyPostResponse
    {
        return new AgreementNotifyPostResponse($this->client->request('/Wl/Business/Partner/Agreement/AgreementNotify.json', $request->params(), 'POST'));
    }
}
