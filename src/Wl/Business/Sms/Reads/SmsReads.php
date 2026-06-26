<?php

namespace WlSdk\Wl\Business\Sms\Reads;

use WlSdk\WlSdkClient;

/**
 * Adds SMS reads for individual reads.
 */
class SmsReads
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds SMS reads for individual reads.
     *
     * @return SmsReadsPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsReadsPostRequest $request): SmsReadsPostResponse
    {
        return new SmsReadsPostResponse($this->client->request('/Wl/Business/Sms/Reads/SmsReads.json', $request->params(), 'POST'));
    }
}
