<?php

namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Adds or changes regulatory bundle SID.
 */
class PhoneRegulatoryBundle
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds or changes regulatory bundle SID.
     *
     * @return PhoneRegulatoryBundlePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PhoneRegulatoryBundlePostRequest $request): PhoneRegulatoryBundlePostResponse
    {
        return new PhoneRegulatoryBundlePostResponse($this->client->request('/Wl/Business/Phone/PhoneRegulatoryBundle.json', $request->params(), 'POST'));
    }
}
