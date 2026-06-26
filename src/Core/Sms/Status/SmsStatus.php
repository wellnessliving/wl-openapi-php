<?php

namespace WlSdk\Core\Sms\Status;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Sms/Status/SmsStatus.json
 */
class SmsStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Sms/Status/SmsStatus.json.
     *
     * @return SmsStatusPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsStatusPostRequest $request): SmsStatusPostResponse
    {
        return new SmsStatusPostResponse($this->client->request('/Core/Sms/Status/SmsStatus.json', $request->params(), 'POST'));
    }
}
