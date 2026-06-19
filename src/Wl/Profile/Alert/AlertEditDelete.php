<?php
namespace WlSdk\Wl\Profile\Alert;

use WlSdk\WlSdkClient;

/**
 * Deletes existing note.
 */
class AlertEditDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes existing note.
     *
     * Permanently removes the login note specified by `k_login_note` from the business, requiring
     *  backend access for the current user.
     *
     * @return AlertEditDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AlertEditDeleteRequest $request): AlertEditDeleteResponse
    {
        return new AlertEditDeleteResponse($this->client->request('/Wl/Profile/Alert/AlertEdit.json', $request->params(), 'DELETE'));
    }
}
