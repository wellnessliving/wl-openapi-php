<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Onboarding;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/StripeCom/Onboarding/CreateLink.json
 */
class CreateLink
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/StripeCom/Onboarding/CreateLink.json.
     *
     * @return CreateLinkPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CreateLinkPostRequest $request): CreateLinkPostResponse
    {
        return new CreateLinkPostResponse($this->client->request('/Thoth/PayProcessor/StripeCom/Onboarding/CreateLink.json', $request->params(), 'POST'));
    }
}
