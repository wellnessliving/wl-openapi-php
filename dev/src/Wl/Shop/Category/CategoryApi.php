<?php
namespace WlSdk\Wl\Shop\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the list of shop categories available for the given business.
 */
class CategoryApi
{
    /**
     * The key of the business to get shop categories for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Title of new category.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of shop categories available for the given business.
     *
     * Returns all store categories that the current user is allowed to access, including their
     * titles, descriptions, and display order. Guest and client users see only public categories;
     * staff and admin users may see additional categories based on their access level.
     *
     * @return CategoryApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CategoryApiGetResponse
    {
        return new CategoryApiGetResponse($this->client->request('/Wl/Shop/Category/Category.json', $this->params(), 'GET'));
    }

    /**
     * Creates new shop category.
     *
     * Creates a new product category in the business store with the given title. Requires
     * backend access with the appropriate store management privilege.
     *
     * @return CategoryApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): CategoryApiPostResponse
    {
        return new CategoryApiPostResponse($this->client->request('/Wl/Shop/Category/Category.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_title' => $this->text_title,
            ],
            static fn($v) => $v !== null
        );
    }
}
