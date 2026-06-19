<?php
namespace WlSdk\Wl\Schedule\Page;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about one element of schedule.
 */
class PageElementApi
{
    /**
     * Key of the business to which the visit belongs.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about one element of schedule.
     *
     * Returns full details for a single visit, including staff, location, timing, assigned assets,
     * virtual join URL, and class-specific or appointment-specific information. Used to render the
     * visit detail page in the client's schedule view.
     *
     * @return PageElementApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PageElementApiGetResponse
    {
        return new PageElementApiGetResponse($this->client->request('/Wl/Schedule/Page/PageElement.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
