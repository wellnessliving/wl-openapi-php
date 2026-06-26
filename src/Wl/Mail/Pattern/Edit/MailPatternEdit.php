<?php

namespace WlSdk\Wl\Mail\Pattern\Edit;

use WlSdk\WlSdkClient;

/**
 * Checks if some clients can be affected after the change of mail pattern.
 */
class MailPatternEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if some clients can be affected after the change of mail pattern.
     *
     * @return MailPatternEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MailPatternEditGetRequest $request): MailPatternEditGetResponse
    {
        return new MailPatternEditGetResponse($this->client->request('/Wl/Mail/Pattern/Edit/MailPatternEdit.json', $request->params(), 'GET'));
    }
}
