<?php

namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Gets similar phone numbers, depended on number, which failed verification.
 */
class PhoneGenerateByMask
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
     * @return PhoneGenerateByMaskGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PhoneGenerateByMaskGetRequest $request): PhoneGenerateByMaskGetResponse
    {
        return new PhoneGenerateByMaskGetResponse($this->client->request('/Wl/Business/Phone/PhoneGenerateByMask.json', $request->params(), 'GET'));
    }
}
