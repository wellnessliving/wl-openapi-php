<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Onboarding;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/StripeCom/Onboarding/CreateAccount.json
 */
class CreateAccount
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/StripeCom/Onboarding/CreateAccount.json.
     *
     * @return CreateAccountPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CreateAccountPostRequest $request): CreateAccountPostResponse
    {
        return new CreateAccountPostResponse($this->client->request('/Thoth/PayProcessor/StripeCom/Onboarding/CreateAccount.json', $request->params(), 'POST'));
    }
}
