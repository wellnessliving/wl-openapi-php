<?php

namespace WlSdk\Wl\Appointment\Repeat;

use WlSdk\WlSdkClient;

/**
 * Change recurring appointment booking settings.
 */
class Repeat
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Change recurring appointment booking settings.
     *
     * Loads the repeat configuration attached to the appointment behind the given visit, updates
     *  its `is_repeat_unpaid` flag, and saves the configuration back. Requires the current user to
     *  either own the visit or have permission to schedule future appointments for the business.
     *
     * @return RepeatPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RepeatPostRequest $request): RepeatPostResponse
    {
        return new RepeatPostResponse($this->client->request('/Wl/Appointment/Repeat/Repeat.json', $request->params(), 'POST'));
    }
}
