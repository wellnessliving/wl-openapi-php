<?php

namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Gets similar phone numbers, depended on number, which failed verification.
 */
class PhoneSimilar
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets similar phone numbers, depended on number, which failed verification.
     *
     * @return PhoneSimilarGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PhoneSimilarGetRequest $request): PhoneSimilarGetResponse
    {
        return new PhoneSimilarGetResponse($this->client->request('/Wl/Business/Phone/PhoneSimilar.json', $request->params(), 'GET'));
    }
}
