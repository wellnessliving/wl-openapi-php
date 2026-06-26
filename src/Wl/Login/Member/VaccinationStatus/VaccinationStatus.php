<?php

namespace WlSdk\Wl\Login\Member\VaccinationStatus;

use WlSdk\WlSdkClient;

/**
 * Sets the vaccination status for a user.
 */
class VaccinationStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sets the vaccination status for a user.
     *
     * @return VaccinationStatusPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(VaccinationStatusPostRequest $request): VaccinationStatusPostResponse
    {
        return new VaccinationStatusPostResponse($this->client->request('/Wl/Login/Member/VaccinationStatus/VaccinationStatus.json', $request->params(), 'POST'));
    }
}
