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

    public function __construct(array $data)
    {
        $this->show_term = isset($data['show_term']) ? (bool)$data['show_term'] : null;
    }
}
