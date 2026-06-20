<?php

namespace WlSdk\Wl\Appointment\Edit;

use WlSdk\WlSdkClient;

/**
 * Return data about appointment's add-ons.
 */
class AddonUpdate
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

    /**
     * Replaces the add-ons for the appointment with the provided list, optionally updating the appointment duration.
     *
     * Removes all existing add-ons from the appointment and attaches the provided set in their place.
     *  When add-ons with a duration are included, the appointment end time is recalculated accordingly.
     *  The operation runs inside a database transaction to ensure consistency.
     *
     * @return AddonUpdatePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AddonUpdatePutRequest $request): AddonUpdatePutResponse
    {
        return new AddonUpdatePutResponse($this->client->request('/Wl/Appointment/Edit/AddonUpdate.json', $request->params(), 'PUT'));
    }
}
