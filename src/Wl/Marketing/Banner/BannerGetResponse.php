<?php

namespace WlSdk\Wl\Marketing\Banner;

/**
 * Response from GET
 */
class BannerGetResponse
{
    /**
     * List of banner feature pills.
     *
     * Each element:
     *
     * @var BannerGetResponseBannerFeature|null
     */
    public ?BannerGetResponseBannerFeature $a_banner_feature = null;

    /**
     * Whether the promotional banner should be shown.
     *
     * @var bool|null
     */
    public ?bool $show_banner = null;

    /**
     * Banner description line.
     *
     * @var string|null
     */
    public ?string $text_banner_description = null;

    /**
     * Banner title.
     *
     * @var string|null
     */
    public ?string $text_banner_title = null;

    /**
     * Current user key.
     * Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * URL for the "Learn more" help article link in the banner.
     *
     * @var string|null
     */
    public ?string $url_learn_more = null;

    /**
     * URL to the Marketing Suite subscription/upgrade page.
     *
     * @var string|null
     */
    public ?string $url_upgrade = null;

    public function __construct(array $data)
    {
        $this->a_banner_feature = isset($data['a_banner_feature']) ? new BannerGetResponseBannerFeature((array)$data['a_banner_feature']) : null;
        $this->show_banner = isset($data['show_banner']) ? (bool)$data['show_banner'] : null;
        $this->text_banner_description = isset($data['text_banner_description']) ? (string)$data['text_banner_description'] : null;
        $this->text_banner_title = isset($data['text_banner_title']) ? (string)$data['text_banner_title'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_learn_more = isset($data['url_learn_more']) ? (string)$data['url_learn_more'] : null;
        $this->url_upgrade = isset($data['url_upgrade']) ? (string)$data['url_upgrade'] : null;
    }
}
