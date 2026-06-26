<?php

namespace WlSdk\Wl\Business\Account\Subscription\Sms;

/**
 * Response from POST
 */
class SmsSubscriptionPostResponse
{
    /**
     * Locale of the business.
     * One of {@link \WlSdk\Core\Locale\LocaleSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\LocaleSid
     */
    public ?int $id_locale = null;

    /**
     * Type of the upgrade. One of {@link \WlSdk\Wl\Business\Account\Subscription\Upgrade\UpgradeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Account\Subscription\Upgrade\UpgradeSid
     */
    public ?int $id_upgrade = null;

    /**
     * URL to the page with phone setup instructions.
     *
     * @var string|null
     */
    public ?string $url_setup_phone = null;

    public function __construct(array $data)
    {
        $this->id_locale = isset($data['id_locale']) ? (int)$data['id_locale'] : null;
        $this->id_upgrade = isset($data['id_upgrade']) ? (int)$data['id_upgrade'] : null;
        $this->url_setup_phone = isset($data['url_setup_phone']) ? (string)$data['url_setup_phone'] : null;
    }
}
