<?php
namespace WlSdk\Wl\Appointment\Edit;

use WlSdk\WlSdkClient;

/**
 * Replaces the add-ons for the appointment with the provided list, optionally updating the appointment duration.
 */
class AddonUpdatePut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
