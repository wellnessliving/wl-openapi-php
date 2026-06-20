<?php
namespace WlSdk\Wl\Integration\Autymate;

use WlSdk\WlSdkClient;

/**
 * Returns or changes the Autymate enrollment status for the specified business.
 * Autymate specifically requested this method be a get.
 */
class AutymateActivate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns or changes the Autymate enrollment status for the specified business.
Autymate specifically requested this method be a get.
     *
     * Authenticates the request using the business GUID, then either reads or updates the enrollment status
     * depending on the mode and the supplied `id_status` value. When activating enrollment, also provisions a
     * Professional subscription for the business if one is not already active.
     *
     * @return AutymateActivateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutymateActivateGetRequest $request): AutymateActivateGetResponse
    {
        return new AutymateActivateGetResponse($this->client->request('/Wl/Integration/Autymate/AutymateActivate.json', $request->params(), 'GET'));
    }
}
