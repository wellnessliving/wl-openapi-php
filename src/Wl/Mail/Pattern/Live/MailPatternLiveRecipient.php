<?php

namespace WlSdk\Wl\Mail\Pattern\Live;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Mail/Pattern/Live/MailPatternLiveRecipient.json
 */
class MailPatternLiveRecipient
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls DELETE /Wl/Mail/Pattern/Live/MailPatternLiveRecipient.json.
     *
     * @return MailPatternLiveRecipientDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(MailPatternLiveRecipientDeleteRequest $request): MailPatternLiveRecipientDeleteResponse
    {
        return new MailPatternLiveRecipientDeleteResponse($this->client->request('/Wl/Mail/Pattern/Live/MailPatternLiveRecipient.json', $request->params(), 'DELETE'));
    }
}
