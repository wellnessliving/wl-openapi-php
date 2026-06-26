<?php

namespace WlSdk\Wl\Notification\Banner;

/**
 * Response from GET
 */
class BannerListGetResponse
{
    /**
     * List of banners.
     *
     * @var array|null
     */
    public ?array $a_banner_list = null;

    public function __construct(array $data)
    {
        $this->a_banner_list = isset($data['a_banner_list']) ? (array)$data['a_banner_list'] : null;
    }
}
