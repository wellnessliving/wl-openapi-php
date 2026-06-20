<?php

namespace WlSdk\Core\Passport\Login;

use WlSdk\WlSdkClient;

/**
 * Returns information about user that is currently signed in.
 */
class Info
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about user that is currently signed in.
     *
     * Used to bootstrap the login widget: determines whether a session is active and provides the URLs needed
     * to redirect an unauthenticated visitor to the password reset or registration flows without hard-coding
     * those URLs on the frontend.
     *
     * @return InfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InfoGetRequest $request): InfoGetResponse
    {
        return new InfoGetResponse($this->client->request('/Core/Passport/Login/Info.json', $request->params(), 'GET'));
    }
}
