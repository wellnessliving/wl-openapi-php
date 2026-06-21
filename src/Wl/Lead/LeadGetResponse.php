<?php

namespace WlSdk\Wl\Lead;

/**
 * Response from GET
 */
class LeadGetResponse
{
    /**
     * A list of profile fields in the business. Every element has the following keys:
     *
     * @var LeadGetResponseFieldList[]|null
     */
    public ?array $a_field_list = null;

    /**
     * The skin configuration:
     *
     * @var LeadGetResponseSkin|null
     */
    public ?LeadGetResponseSkin $a_skin = null;

    /**
     * Whether it is possible to give free promotion when adding a user (only if free promotion is configured in
     * the widget).
     * `true` or `null` if it is possible, `false` if not.
     * `null` used for backward compatibility.
     *
     * @var bool|null
     */
    public ?bool $can_use_free_purchase = null;

    /**
     * The URL to load the image with a captcha test.
     * This string is empty if it's not necessary to pass a captcha test.
     *
     * @var string|null
     */
    public ?string $url_captcha = null;

    public function __construct(array $data)
    {
        $this->a_field_list = isset($data['a_field_list']) ? array_map(static fn ($item) => new LeadGetResponseFieldList((array)$item), (array)$data['a_field_list']) : null;
        $this->a_skin = isset($data['a_skin']) ? new LeadGetResponseSkin((array)$data['a_skin']) : null;
        $this->can_use_free_purchase = isset($data['can_use_free_purchase']) ? (bool)$data['can_use_free_purchase'] : null;
        $this->url_captcha = isset($data['url_captcha']) ? (string)$data['url_captcha'] : null;
    }
}
