<?php

namespace WlSdk\Wl\Staff\Load;

use WlSdk\WlSdkClient;

/**
 * Checks if staff member is clocked in.
 */
class Load
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if staff member is clocked in.
     *
     * Resolves the staff identifier, checks access, and returns the current open clock-in record
     *  for the staff member, if any, together with its resolved location and localized start time
     *  and start message. Also returns the hourly pay rates available to the staff member.
     *
     * @deprecated Use {@link \Wl\Staff\Load\Load74Api} instead. This class will be removed in future versions.
     *
     * @return LoadGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoadGetRequest $request): LoadGetResponse
    {
        return new LoadGetResponse($this->client->request('/Wl/Staff/Load/Load.json', $request->params(), 'GET'));
    }

    /**
     * Clocks staff member in (if he is clocked out) or out (if he is clocked in).
     *
     * When clocking out, closes the open work session, computes the pay rate to apply, records
     *  the completed period in the staff load history and logs the change. When clocking in,
     *  opens a new work session at the given location with the selected pay rate. Sets `is_start`
     *  to reflect whether the staff member is now clocked in or out.
     *
     * @deprecated Use {@link \Wl\Staff\Load\Load74Api} instead. This class will be removed in future versions.
     *
     * @return LoadPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(LoadPutRequest $request): LoadPutResponse
    {
        return new LoadPutResponse($this->client->request('/Wl/Staff/Load/Load.json', $request->params(), 'PUT'));
    }
}
