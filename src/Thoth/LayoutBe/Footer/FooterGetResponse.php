<?php

namespace WlSdk\Thoth\LayoutBe\Footer;

/**
 * Response from GET
 */
class FooterGetResponse
{
    /**
     * Whether the business has a white-label plan of the Achieve client app.
     *
     * `true` if it has: the footer shows the links to the app in the stores, {@link
     * \WlSdk\Thoth\LayoutBe\Footer\FooterGetResponse::$url_apple_store} and
     * {@link \WlSdk\Thoth\LayoutBe\Footer\FooterGetResponse::$url_google_play}; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_white_label_achieve = null;

    /**
     * Whether the "Powered by WellnessLiving" branding and Terms & Conditions links are shown in the footer.
     *
     * `true` to show them; `false` for white-label businesses, which must not display WellnessLiving branding.
     *
     * @var bool|null
     */
    public ?bool $show_term = null;

    /**
     * URL of the Achieve client app of the business in the Apple App Store, for example
     * `https://apps.apple.com/app/id1234567890`.
     *
     * An empty string if the business has no white-label plan of the Achieve client app
     * ({@link \WlSdk\Thoth\LayoutBe\Footer\FooterGetResponse::$is_white_label_achieve}), or the URL is not set.
     *
     * @var string|null
     */
    public ?string $url_apple_store = null;

    /**
     * URL of the Achieve client app of the business in Google Play, for example
     * `https://play.google.com/store/apps/details?id=com.example.app`.
     *
     * An empty string if the business has no white-label plan of the Achieve client app
     * ({@link \WlSdk\Thoth\LayoutBe\Footer\FooterGetResponse::$is_white_label_achieve}), or the URL is not set.
     *
     * @var string|null
     */
    public ?string $url_google_play = null;

    /**
     * URL of the tour page of the business type on the site of `WellnessLiving`.
     *
     * The "Powered by" badge of the footer links to this page, for example
     * `https://example.com/crossfit/software/`.
     * A business whose type has no tour page of its own gets the URL of the default tour page.
     *
     * @var string|null
     */
    public ?string $url_tour = null;

    public function __construct(array $data)
    {
        $this->is_white_label_achieve = isset($data['is_white_label_achieve']) ? (bool)$data['is_white_label_achieve'] : null;
        $this->show_term = isset($data['show_term']) ? (bool)$data['show_term'] : null;
        $this->url_apple_store = isset($data['url_apple_store']) ? (string)$data['url_apple_store'] : null;
        $this->url_google_play = isset($data['url_google_play']) ? (string)$data['url_google_play'] : null;
        $this->url_tour = isset($data['url_tour']) ? (string)$data['url_tour'] : null;
    }
}
