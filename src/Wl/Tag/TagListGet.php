<?php
namespace WlSdk\Wl\Tag;

use WlSdk\WlSdkClient;

/**
 * Returns tags of the specified business.
 */
class TagListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns tags of the specified business.
     *
     * Returns all client tags configured for the business in display order, along with flags
     * indicating whether the business has configured a penalty fee for failed automatic payments
     * and whether surcharges are enabled. Used to populate tag pickers and client profile forms.
     *
     * @return TagListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TagListGetRequest $request): TagListGetResponse
    {
        return new TagListGetResponse($this->client->request('/Wl/Tag/TagList.json', $request->params(), 'GET'));
    }
}
