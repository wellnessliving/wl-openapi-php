<?php
namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * In case the attachment key is not specified, it adds a new attachment.
 * In case the attachment key is specified, edits the attachment.
 */
class AttachElementPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * In case the attachment key is not specified, it adds a new attachment.
In case the attachment key is specified, edits the attachment.
     *
     * When `k_attach` is empty, uploads a new file to the client profile; when set, updates the
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
}
