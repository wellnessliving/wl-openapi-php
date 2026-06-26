<?php

namespace WlSdk\Wl\Marketing\Automation\Prebuilt;

use WlSdk\WlSdkClient;

/**
 * Get the business types connected to the pre-built automation.
 */
class PrebuiltDuplicate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get the business types connected to the pre-built automation.
     *
     * @return PrebuiltDuplicateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PrebuiltDuplicateGetRequest $request): PrebuiltDuplicateGetResponse
    {
        return new PrebuiltDuplicateGetResponse($this->client->request('/Wl/Marketing/Automation/Prebuilt/PrebuiltDuplicate.json', $request->params(), 'GET'));
    }

    /**
     * Duplicate the pre-built automation.
     *
     * @return PrebuiltDuplicatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PrebuiltDuplicatePostRequest $request): PrebuiltDuplicatePostResponse
    {
        return new PrebuiltDuplicatePostResponse($this->client->request('/Wl/Marketing/Automation/Prebuilt/PrebuiltDuplicate.json', $request->params(), 'POST'));
    }
}
