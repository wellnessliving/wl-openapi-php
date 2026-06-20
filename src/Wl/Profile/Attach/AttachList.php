<?php
namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * Returns the list of file attachments for the specified client in the given business.
 */
class AttachList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of file attachments for the specified client in the given business.
     *
     * Returns all file attachments uploaded to the client's profile. In backend mode the result
     *  also includes private attachments that are hidden from the client-facing view, with
     *  additional metadata such as source, description, and a delete permission flag.
     *
     * @return AttachListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AttachListGetRequest $request): AttachListGetResponse
    {
        return new AttachListGetResponse($this->client->request('/Wl/Profile/Attach/AttachList.json', $request->params(), 'GET'));
    }
}
