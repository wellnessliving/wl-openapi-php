<?php

namespace WlSdk\Wl\Classes\ClassView;

class ElementGetResponseClassList
{
    /**
     * A list of class schedules. Each element has the next structure:
     *
     * @var ElementGetResponseClassListSchedule|null
     */
    public ?ElementGetResponseClassListSchedule $a_schedule = null;

    /**
     * Class-specific business policies overriding the business defaults.
     * Has the same structure as [BusinessConfigApi](/Wl/Business/Config/BusinessConfig.json).
     * `null` when the class uses the default business policy without overrides.
     *
     * @var ElementGetResponseClassListConfig|null
     */
    public ?ElementGetResponseClassListConfig $a_config = null;

    /**
     * Tags for quick search.
     *
     * @var ElementGetResponseClassListSearchTag|null
     */
    public ?ElementGetResponseClassListSearchTag $a_search_tag = null;

    /**
     * Information about visits that should be reviewed prior to visiting this class/event.
     *
     * @var ElementGetResponseClassListVisitsRequired|null
     */
    public ?ElementGetResponseClassListVisitsRequired $a_visits_required = null;

    /**
     * This field will be `true` if the image used for the class is an image uploaded in the class setup.
     * If an image isn't uploaded in the class setup, but there's at least one image in Setup-&gt;Locations image
     * slider,
     * this field will be `false`.
     * This field will be `null` if the class image isn't uploaded, and there are no images in location slider.
     * In such cases, an empty image is used.
     *
     * @var bool|null
     */
    public ?bool $has_own_image = null;

    /**
     * The browser-safe description.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Special instructions safe to be inserted to a browser.
     *
     * @var string|null
     */
    public ?string $html_special_instruction = null;

    /**
     * The minimum age restriction.
     *
     * @var int|null
     */
    public ?int $i_age_from = null;

    /**
     * The maximum age restriction.
     *
     * @var int|null
     */
    public ?int $i_age_to = null;

    /**
     * Determines whether age restriction exist and should be taken into account prior to booking this class/event.
     *
     * @var bool|null
     */
    public ?bool $is_age_public = null;

    /**
     * Determines whether clients can book the class or event online.
     *
     * @var bool|null
     */
    public ?bool $is_bookable = null;

    /**
     * `true` - show classes only for clients who can book online.
     * `false` - show classes for all clients.
     *
     * @var bool|null
     */
    public ?bool $is_online_private = null;

    /**
     * Determines whether clients of the business can see a list of applicable Purchase Options.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_client = null;

    /**
     * Determines whether the item can be booked only using promotions.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_only = null;

    /**
     * Determines whether staff members of the business can see a list of applicable Purchase Options.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_staff = null;

    /**
     * Determines whether the item can be paid with Drop In or not.
     * If it can be paid with Drop In, then `m_price` shows the price for one visit.
     * If this is `0`, it means the class is free.
     *
     * @var bool|null
     */
    public ?bool $is_single_buy = null;

    /**
     * Determines whether the item is virtual.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * Determines whether the item is an event or class instance.
     * If `true`, the item is an event instance.
     * Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * The class key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Promotion key of the default promotion to use when paying for the class.
     * `null` if no promotion is selected.
     *
     * @var string|null
     */
    public ?string $k_promotion_default = null;

    /**
     * Drop In price, if the class allows payment for one visit.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * This will be `true` if special instructions can be public.
     * Otherwise, this will be `false` if they should only be shown to the clients who booked the class.
     *
     * @var bool|null
     */
    public ?bool $show_special_instructions = null;

    /**
     * The item description.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    /**
     * The item's special instructions.
     *
     * @var string|null
     */
    public ?string $xml_special_instruction = null;

    /**
     * The URL link to the item image.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->a_schedule = isset($data['a_schedule']) ? new ElementGetResponseClassListSchedule((array)$data['a_schedule']) : null;
        $this->a_config = isset($data['a_config']) ? new ElementGetResponseClassListConfig((array)$data['a_config']) : null;
        $this->a_search_tag = isset($data['a_search_tag']) ? new ElementGetResponseClassListSearchTag((array)$data['a_search_tag']) : null;
        $this->a_visits_required = isset($data['a_visits_required']) ? new ElementGetResponseClassListVisitsRequired((array)$data['a_visits_required']) : null;
        $this->has_own_image = isset($data['has_own_image']) ? (bool)$data['has_own_image'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_special_instruction = isset($data['html_special_instruction']) ? (string)$data['html_special_instruction'] : null;
        $this->i_age_from = isset($data['i_age_from']) ? (int)$data['i_age_from'] : null;
        $this->i_age_to = isset($data['i_age_to']) ? (int)$data['i_age_to'] : null;
        $this->is_age_public = isset($data['is_age_public']) ? (bool)$data['is_age_public'] : null;
        $this->is_bookable = isset($data['is_bookable']) ? (bool)$data['is_bookable'] : null;
        $this->is_online_private = isset($data['is_online_private']) ? (bool)$data['is_online_private'] : null;
        $this->is_promotion_client = isset($data['is_promotion_client']) ? (bool)$data['is_promotion_client'] : null;
        $this->is_promotion_only = isset($data['is_promotion_only']) ? (bool)$data['is_promotion_only'] : null;
        $this->is_promotion_staff = isset($data['is_promotion_staff']) ? (bool)$data['is_promotion_staff'] : null;
        $this->is_single_buy = isset($data['is_single_buy']) ? (bool)$data['is_single_buy'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_promotion_default = isset($data['k_promotion_default']) ? (string)$data['k_promotion_default'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->show_special_instructions = isset($data['show_special_instructions']) ? (bool)$data['show_special_instructions'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
        $this->xml_special_instruction = isset($data['xml_special_instruction']) ? (string)$data['xml_special_instruction'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
