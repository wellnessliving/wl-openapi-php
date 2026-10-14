<?php

namespace WlSdk\Wl\Catalog\Terms;

use WlSdk\WlSdkClient;

/**
 * Performs {@link \WlSdk\Wl\Catalog\Terms\Terms} for every item of {@link \WlSdk\Wl\Catalog\Terms\Terms}.
 */
class Terms
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs {@link \WlSdk\Wl\Catalog\Terms\Terms} for every item of {@link \WlSdk\Wl\Catalog\Terms\Terms}.
     *
     * @return TermsPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TermsPostRequest $request): TermsPostResponse
    {
        return new TermsPostResponse($this->client->request('/Wl/Catalog/Terms/Terms.json', $request->params(), 'POST'));
    }
}
