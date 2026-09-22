<?php

namespace WlSdk\Wl\Business\Custom\Terms;

use WlSdk\WlSdkClient;

/**
 * Saves {@link \WlSdk\Wl\Business\Custom\Terms\CustomTerms} as the custom terms of {@link
 * \WlSdk\Wl\Business\Custom\Terms\CustomTerms}.
 */
class CustomTerms
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves {@link \WlSdk\Wl\Business\Custom\Terms\CustomTerms} as the custom terms of {@link \WlSdk\Wl\Business\Custom\Terms\CustomTerms}.
     *
     * @return CustomTermsPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CustomTermsPostRequest $request): CustomTermsPostResponse
    {
        return new CustomTermsPostResponse($this->client->request('/Wl/Business/Custom/Terms/CustomTerms.json', $request->params(), 'POST'));
    }
}
