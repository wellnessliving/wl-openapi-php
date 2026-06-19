<?php
namespace WlSdk\Wl\Schedule\Tab;

class TabGetRequest
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

    public function params(): array
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
