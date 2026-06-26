<?php

namespace WlSdk\Wl\Integration\Autymate;

use WlSdk\WlSdkClient;

/**
 * Creates an Autymate enrollment for a business.
 * Once an enrollment is created the user can make the initial visit to Autymate to continue the sign up
 * process on Autymate's side.
 */
class AutymateEnroll
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates an Autymate enrollment for a business.
Once an enrollment is created the user can make the initial visit to Autymate to continue the sign up
process on Autymate's side.
     *
     * @return AutymateEnrollGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutymateEnrollGetRequest $request): AutymateEnrollGetResponse
    {
        return new AutymateEnrollGetResponse($this->client->request('/Wl/Integration/Autymate/AutymateEnroll.json', $request->params(), 'GET'));
    }
}
