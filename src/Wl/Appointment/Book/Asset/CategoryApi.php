<?php
namespace WlSdk\Wl\Appointment\Book\Asset;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about asset categories for the appointment booking page.
 */
class CategoryApi
{
    /**
     * If `true`, asset categories are loaded for backend mode. Otherwise, this will be `false` if asset categories
     * are loaded for frontend mode.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` - search in all tabs.
     * `false` - search only for the selected book tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * The class tab key to use for filtering services.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The key of the location to show information for.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of information about asset categories for the appointment booking page.
     *
     * Returns all asset categories available at the given location, optionally filtered by book now tab.
     *  Each category includes its title and a flag indicating whether all its assets are hidden in
     *  the White Label mobile application. Supports both frontend and backend modes.
     *
     * @return CategoryApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CategoryApiGetResponse
    {
        return new CategoryApiGetResponse($this->client->request('/Wl/Appointment/Book/Asset/Category.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'is_tab_all' => $this->is_tab_all,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
