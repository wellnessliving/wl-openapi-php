<?php
namespace WlSdk\Wl\Skin\Widget;

use WlSdk\WlSdkClient;

/**
 * Returns widget skins grouped by widget type for the given business.
 */
class SkinWidgetList
{
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
     * @return SkinWidgetListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SkinWidgetListGetRequest $request): SkinWidgetListGetResponse
    {
        return new SkinWidgetListGetResponse($this->client->request('/Wl/Skin/Widget/SkinWidgetList.json', $request->params(), 'GET'));
    }
}
