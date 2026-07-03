<?php

namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * Gets the data for the attachment editing form.
 */
class AttachElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the data for the attachment editing form.
     *
     * Returns attachment metadata including filename, description, filesize, file type, creation
     *  and edit timestamps, download URL, preview URL, and a flag indicating whether the current
     *  user has permission to delete the attachment.
     *
     * @return AttachElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AttachElementGetRequest $request): AttachElementGetResponse
    {
        return new AttachElementGetResponse($this->client->request('/Wl/Profile/Attach/AttachElement.json', $request->params(), 'GET'));
    }

    /**
     * In case the attachment key is not specified, it adds a new attachment.
In case the attachment key is specified, edits the attachment.
     *
     * When {@link \WlSdk\Wl\Profile\Attach\AttachElement} is empty, uploads a new file to the client profile; when
     * set, updates the
     *  attachment metadata, file content, or visibility flag depending on the provided fields.
     *
     * @return AttachElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AttachElementPostRequest $request): AttachElementPostResponse
    {
        return new AttachElementPostResponse($this->client->request('/Wl/Profile/Attach/AttachElement.json', $request->params(), 'POST'));
    }

    /**
     * Deletes the attachment.
     *
     * Permanently removes the specified attachment from the client profile and logs the deletion
     *  action in the business audit trail.
     *
     * @return AttachElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AttachElementDeleteRequest $request): AttachElementDeleteResponse
    {
        return new AttachElementDeleteResponse($this->client->request('/Wl/Profile/Attach/AttachElement.json', $request->params(), 'DELETE'));
    }
}
