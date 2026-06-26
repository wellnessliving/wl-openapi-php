<?php

namespace WlSdk\Wl\Notification\Banner;

class BannerListPutRequest
{
    /**
     * The key of the business where the list of available banners will be loaded.
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User for which available banners will be loaded.
     * Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Key of the banner to be closed.
     * Primary key in the BannerSql table.
     *
     * @var string|null
     */
    public ?string $k_notification_banner = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'k_notification_banner' => $this->k_notification_banner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
