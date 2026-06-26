<?php

namespace WlSdk\Wl\Mail\History\Report;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Mail/History/Report/MailReason.json
 */
class MailReason
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Mail/History/Report/MailReason.json.
     *
     * @return MailReasonGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MailReasonGetRequest $request): MailReasonGetResponse
    {
        return new MailReasonGetResponse($this->client->request('/Wl/Mail/History/Report/MailReason.json', $request->params(), 'GET'));
    }
}
