<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Account;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/StripeCom/Account/CreateLoginLink.json
 */
class CreateLoginLink
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/StripeCom/Account/CreateLoginLink.json.
     *
     * @return CreateLoginLinkPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CreateLoginLinkPostRequest $request): CreateLoginLinkPostResponse
    {
        return new CreateLoginLinkPostResponse($this->client->request('/Thoth/PayProcessor/StripeCom/Account/CreateLoginLink.json', $request->params(), 'POST'));
    }
}
