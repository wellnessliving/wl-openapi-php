<?php
namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * Deletes the attachment.
 */
class AttachElementDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
