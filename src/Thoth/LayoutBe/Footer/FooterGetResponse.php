<?php

namespace WlSdk\Thoth\LayoutBe\Footer;

/**
 * Response from GET
 */
class FooterGetResponse
{
    /**
     * Whether the "Powered by WellnessLiving" branding and Terms & Conditions links are shown in the footer.
     *
     * `true` to show them; `false` for white-label businesses, which must not display WellnessLiving branding.
     *
     * @var bool|null
     */
    public ?bool $show_term = null;

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
        $this->show_term = isset($data['show_term']) ? (bool)$data['show_term'] : null;
        $this->url_tour = isset($data['url_tour']) ? (string)$data['url_tour'] : null;
    }
}
