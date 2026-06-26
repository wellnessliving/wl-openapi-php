<?php

namespace WlSdk\Core\Sms\Response;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Sms/Response/ResponseTwilio.json
 */
class ResponseTwilio
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Sms/Response/ResponseTwilio.json.
     *
     * @return ResponseTwilioPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ResponseTwilioPostRequest $request): ResponseTwilioPostResponse
    {
        return new ResponseTwilioPostResponse($this->client->request('/Core/Sms/Response/ResponseTwilio.json', $request->params(), 'POST'));
    }
}
