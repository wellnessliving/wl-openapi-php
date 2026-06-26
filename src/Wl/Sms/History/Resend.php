<?php

namespace WlSdk\Wl\Sms\History;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class Resend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process POST query.
     *
     * @return ResendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ResendPostRequest $request): ResendPostResponse
    {
        return new ResendPostResponse($this->client->request('/Wl/Sms/History/Resend.json', $request->params(), 'POST'));
    }
}
