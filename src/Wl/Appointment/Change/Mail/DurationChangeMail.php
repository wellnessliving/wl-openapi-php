<?php

namespace WlSdk\Wl\Appointment\Change\Mail;

use WlSdk\WlSdkClient;

/**
 * Gets mail pattern.
 */
class DurationChangeMail
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets mail pattern.
     *
     * @return DurationChangeMailGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DurationChangeMailGetRequest $request): DurationChangeMailGetResponse
    {
        return new DurationChangeMailGetResponse($this->client->request('/Wl/Appointment/Change/Mail/DurationChangeMail.json', $request->params(), 'GET'));
    }
}
