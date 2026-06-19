<?php
namespace WlSdk\Wl\Profile\Alert;

use WlSdk\WlSdkClient;

/**
 * Creates new text note or updates the existing one.
 */
class AlertEditPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates new text note or updates the existing one.
     *
     * Creates or updates a login note on the client's profile, setting its text, access
     *  restrictions, booking and purchase flags, and the locations where the note applies. Used by
     *  staff to attach internal notes or warnings that appear on check-in and booking flows.
     *
     * @return AlertEditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AlertEditPostRequest $request): AlertEditPostResponse
    {
        return new AlertEditPostResponse($this->client->request('/Wl/Profile/Alert/AlertEdit.json', $request->params(), 'POST'));
    }
}
