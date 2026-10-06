<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about sms chat with give user in the given business.
 */
class Dialog
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about sms chat with give user in the given business.
     *
     * Loads the mute, archive, and pin state of the dialog and determines whether the last
     *  message can be marked read or unread. Read state is only computed for an inbound last
     *  message that was received within the visible days window; if the client has not sent
     *  any message yet, only the default flags are returned.
     *
     * @return DialogGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DialogGetRequest $request): DialogGetResponse
    {
        return new DialogGetResponse($this->client->request('/Wl/Business/Sms/Chat/Dialog/Dialog.json', $request->params(), 'GET'));
    }

    /**
     * Retrieves information about sms chat with give user in the given business.
     *
     * Updates the dialog's archive and mute flags for the client identified by `uid` and
     *  `k_business`, leaving unspecified flags unchanged. An empty chat cannot be archived.
     *  Refreshes the unread SMS counter and, if any flag changed, broadcasts the update to
     *  connected clients in real time.
     *
     * @return DialogPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DialogPostRequest $request): DialogPostResponse
    {
        return new DialogPostResponse($this->client->request('/Wl/Business/Sms/Chat/Dialog/Dialog.json', $request->params(), 'POST'));
    }
}
