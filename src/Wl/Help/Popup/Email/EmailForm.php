<?php

namespace WlSdk\Wl\Help\Popup\Email;

use WlSdk\WlSdkClient;

/**
 * Sends an email for the help popup.
 */
class EmailForm
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends an email for the help popup.
     *
     * @return EmailFormPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EmailFormPostRequest $request): EmailFormPostResponse
    {
        return new EmailFormPostResponse($this->client->request('/Wl/Help/Popup/Email/EmailForm.json', $request->params(), 'POST'));
    }
}
