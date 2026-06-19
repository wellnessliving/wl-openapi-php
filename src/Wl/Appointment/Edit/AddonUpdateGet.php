<?php
namespace WlSdk\Wl\Appointment\Edit;

use WlSdk\WlSdkClient;

/**
 * Return data about appointment's add-ons.
 */
class AddonUpdateGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Return data about appointment's add-ons.
     *
     * Returns the current list of add-ons attached to the specified appointment along with the full
     *  catalog of available add-ons for the service. The caller must have view access to the appointment.
     *
     * @return AddonUpdateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddonUpdateGetRequest $request): AddonUpdateGetResponse
    {
        return new AddonUpdateGetResponse($this->client->request('/Wl/Appointment/Edit/AddonUpdate.json', $request->params(), 'GET'));
    }
}
