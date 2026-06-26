<?php

namespace WlSdk\Wl\Login\Mail\Secondary;

use WlSdk\WlSdkClient;

/**
 * Removes a secondary notification recipient from the secondary notification list.
 */
class MailSecondary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Removes a secondary notification recipient from the secondary notification list.
     *
     * @return MailSecondaryDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(MailSecondaryDeleteRequest $request): MailSecondaryDeleteResponse
    {
        return new MailSecondaryDeleteResponse($this->client->request('/Wl/Login/Mail/Secondary/MailSecondary.json', $request->params(), 'DELETE'));
    }
}
