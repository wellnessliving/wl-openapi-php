<?php

namespace WlSdk\Wl\Appointment\Repeat;

use WlSdk\WlSdkClient;

/**
 * Change recurring appointment booking settings.
 */
class Repeat
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Change recurring appointment booking settings.
     *
     * @return RepeatPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RepeatPostRequest $request): RepeatPostResponse
    {
        return new RepeatPostResponse($this->client->request('/Wl/Appointment/Repeat/Repeat.json', $request->params(), 'POST'));
    }
}
