<?php

namespace WlSdk\Wl\Visit\Note\Edit;

use WlSdk\WlSdkClient;

/**
 * Gets notes data.
 */
class Edit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets notes data.
     *
     * Validates the business and visit, accounting for franchise travel mode when the visit
     *  belongs to a different franchisee business, checks that the current staff member has
     *  privilege to view or edit visit notes, and loads the note fields, additional note field,
     *  and general visit information needed to render the edit form.
     *
     * @return EditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditGetRequest $request): EditGetResponse
    {
        return new EditGetResponse($this->client->request('/Wl/Visit/Note/Edit/Edit.json', $request->params(), 'GET'));
    }

    /**
     * Saves notes data.
     *
     * Validates the business, visit, and note type, checks that the current staff member has
     *  privilege to edit visit notes, then creates or updates the compressed note content for the
     *  visit in a transaction.
     *
     * @return EditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditPostRequest $request): EditPostResponse
    {
        return new EditPostResponse($this->client->request('/Wl/Visit/Note/Edit/Edit.json', $request->params(), 'POST'));
    }

    /**
     * Deletes note.
     *
     * Removes the visit note record identified by `k_visit_note` after verifying that the
     *  business is valid, the note exists, and the current staff member has privilege to delete
     *  visit notes.
     *
     * @return EditDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(EditDeleteRequest $request): EditDeleteResponse
    {
        return new EditDeleteResponse($this->client->request('/Wl/Visit/Note/Edit/Edit.json', $request->params(), 'DELETE'));
    }
}
