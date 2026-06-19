<?php
namespace WlSdk\Wl\Video\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the list of video categories for the business.
 */
class CategoryListApi
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * If `true`, groups that are missing videos won't be displayed. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_skip_empty_group = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The filter phrase used to filter categories by name.
     *
     * @var string|null
     */
    public ?string $text_filter = null;

    /**
     * A list of shared video category keys displayed in the order to be saved.
     * 
     * Values can be:
     * * <b>[Deprecated]</b> String keys in old format.
     * * String keys in new format.
     *
     * @var string[]|null
     */
    public ?array $a_order = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of video categories for the business.
     *
     * Returns all video categories for the business with their titles, video counts, and cloud
     * recording assignment. In frontend mode, only categories accessible to the current user are
     * included. Results can be filtered by name and optionally limited to non-empty categories.
     *
     * @return CategoryListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CategoryListApiGetResponse
    {
        return new CategoryListApiGetResponse($this->client->request('/Wl/Video/Category/CategoryList.json', $this->params(), 'GET'));
    }

    /**
     * Updates the order of video categories.
     *
     * Reorders the video library categories for the business according to the provided list.
     * Requires backend access with the video library management privilege.
     *
     * @return CategoryListApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): CategoryListApiPutResponse
    {
        return new CategoryListApiPutResponse($this->client->request('/Wl/Video/Category/CategoryList.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'is_skip_empty_group' => $this->is_skip_empty_group,
            'k_business' => $this->k_business,
            'text_filter' => $this->text_filter,
            'a_order' => $this->a_order,
            ],
            static fn($v) => $v !== null
        );
    }
}
