<?php
namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * Gets the data for the attachment editing form.
 */
class AttachElementGet
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
}
