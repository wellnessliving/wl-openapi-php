<?php
namespace WlSdk\Wl\Tag;

use WlSdk\WlSdkClient;

/**
 * Returns tags of the specified business.
 */
class TagListApi
{
    /**
     * The business key of the tags.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    /**
     * List of tags in json format.
     * See `a_list` for the structure of each tag.
     * `null` to use `a_list` for getting the tag list.
     *
     * @var string|null
     */
    public ?string $json_list = null;

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
     * @return TagListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): TagListApiGetResponse
    {
        return new TagListApiGetResponse($this->client->request('/Wl/Tag/TagList.json', $this->params(), 'GET'));
    }

    /**
     * Saves the list of tags.
Can be used to create new tags or update existing ones.
     *
     * Persists the given set of client tags for the business. Tags without a key are created;
     * tags with an existing key are updated with the new title. Requires backend access.
     *
     * @return TagListApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): TagListApiPostResponse
    {
        return new TagListApiPostResponse($this->client->request('/Wl/Tag/TagList.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_list' => $this->a_list,
            'json_list' => $this->json_list,
            ],
            static fn($v) => $v !== null
        );
    }
}
