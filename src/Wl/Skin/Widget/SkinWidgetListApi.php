<?php
namespace WlSdk\Wl\Skin\Widget;

use WlSdk\WlSdkClient;

/**
 * Returns widget skins grouped by widget type for the given business.
 */
class SkinWidgetListApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns widget skins grouped by widget type for the given business.
     *
     * Returns all configured widget skins for the business, organized by widget type. Used to
     * populate the widget management list so administrators can select and edit existing skins.
     *
     * @return SkinWidgetListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): SkinWidgetListApiGetResponse
    {
        return new SkinWidgetListApiGetResponse($this->client->request('/Wl/Skin/Widget/SkinWidgetList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
