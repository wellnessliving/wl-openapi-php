<?php

namespace WlSdk\Wl\Mail\Pattern\Live;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Mail/Pattern/Live/MailPatternLive.json
 */
class MailPatternLive
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls DELETE /Wl/Mail/Pattern/Live/MailPatternLive.json.
     *
     * @return MailPatternLiveDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(MailPatternLiveDeleteRequest $request): MailPatternLiveDeleteResponse
    {
        return new MailPatternLiveDeleteResponse($this->client->request('/Wl/Mail/Pattern/Live/MailPatternLive.json', $request->params(), 'DELETE'));
    }
}
