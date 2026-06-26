<?php

namespace WlSdk\Wl\Mail\Pattern\Edit;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Mail/Pattern/Edit/MailPatternState.json
 */
class MailPatternState
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Mail/Pattern/Edit/MailPatternState.json.
     *
     * @return MailPatternStatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MailPatternStatePostRequest $request): MailPatternStatePostResponse
    {
        return new MailPatternStatePostResponse($this->client->request('/Wl/Mail/Pattern/Edit/MailPatternState.json', $request->params(), 'POST'));
    }
}
