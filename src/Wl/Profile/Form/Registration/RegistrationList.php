<?php

namespace WlSdk\Wl\Profile\Form\Registration;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Profile/Form/Registration/RegistrationList.json
 */
class RegistrationList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Profile/Form/Registration/RegistrationList.json.
     *
     * @return RegistrationListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RegistrationListGetRequest $request): RegistrationListGetResponse
    {
        return new RegistrationListGetResponse($this->client->request('/Wl/Profile/Form/Registration/RegistrationList.json', $request->params(), 'GET'));
    }
}
