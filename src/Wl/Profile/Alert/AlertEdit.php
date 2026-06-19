<?php
namespace WlSdk\Wl\Profile\Alert;

use WlSdk\WlSdkClient;

/**
 * Retrieves login note data.
 */
class AlertEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves login note data.
     *
     * Loads a single login note for editing, including its text, access type, flag settings,
     *  booking and purchase restrictions, and location flags. Used to populate the edit form before
     *  saving changes.
     *
     * @return AlertEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AlertEditGetRequest $request): AlertEditGetResponse
    {
        return new AlertEditGetResponse($this->client->request('/Wl/Profile/Alert/AlertEdit.json', $request->params(), 'GET'));
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
