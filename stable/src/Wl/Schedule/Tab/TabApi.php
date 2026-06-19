<?php
namespace WlSdk\Wl\Schedule\Tab;

use WlSdk\WlSdkClient;

/**
 * Gets information about tabs for page "Book now".
 */
class TabApi
{
    /**
     * Whether we are inside the widget or not.
     *
     * @var bool|null
     */
    public ?bool $is_widget = null;

    /**
     * The key of the current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the current location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the current user.
     * This isn't used on the back end as the back end uses the current user to build a list of tabs.
     * Therefore, the model must depend on the current user ID.
     * If changed to a relative (the current user is changed, but the application isn't restarted),
     * information about the booking tabs for this user's relative will be requested.
     * 
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about tabs for page "Book now".
     *
     * Returns the set of service booking tabs configured by the business, filtered for the
     * specified location and user. Used to populate the tab strip on the "Book Now" page or
     * embedded widget. Tabs may represent classes, appointments, events, or other bookable services.
     *
     * @return TabApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): TabApiGetResponse
    {
        return new TabApiGetResponse($this->client->request('/Wl/Schedule/Tab/Tab.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_widget' => $this->is_widget,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
