<?php

namespace WlSdk\Core\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Loads information about profile fields.
 */
class RegisterField
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Loads information about profile fields.
     *
     * @return RegisterFieldGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RegisterFieldGetRequest $request): RegisterFieldGetResponse
    {
        return new RegisterFieldGetResponse($this->client->request('/Core/Passport/Login/Register/RegisterField.json', $request->params(), 'GET'));
    }
}
