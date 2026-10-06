<?php

namespace WlSdk\Wl\Login\Permission\Access;

use WlSdk\WlSdkClient;

/**
 * Checks whether the current user is allowed to reserve the specified class, service, or appointment.
 */
class Access
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether the current user is allowed to reserve the specified class, service, or appointment.
     *
     * Validates the schedule, date, and time input, then checks login permission for the requested
     *  reservation at the given date and time using the schedule's location timezone. Also determines
     *  whether the current user is a franchise traveller for the business.
     *
     * @return AccessGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AccessGetRequest $request): AccessGetResponse
    {
        return new AccessGetResponse($this->client->request('/Wl/Login/Permission/Access/Access.json', $request->params(), 'GET'));
    }
}
