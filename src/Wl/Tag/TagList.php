<?php
namespace WlSdk\Wl\Tag;

use WlSdk\WlSdkClient;

/**
 * Returns tags of the specified business.
 */
class TagList
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

    /**
     * Saves the list of tags.
Can be used to create new tags or update existing ones.
     *
     * Persists the given set of client tags for the business. Tags without a key are created;
     * tags with an existing key are updated with the new title. Requires backend access.
     *
     * @return TagListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TagListPostRequest $request): TagListPostResponse
    {
        return new TagListPostResponse($this->client->request('/Wl/Tag/TagList.json', $request->params(), 'POST'));
    }
}
