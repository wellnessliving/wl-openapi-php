<?php

namespace WlSdk\Wl\Classes\Editor;

/**
 * Response from GET
 */
class ClassEditorGetResponse
{
    /**
     * Settings of the class the form edits.
     *
     * Filled for a saved class, and with the values a new class starts with while a new class is created. The same
     * settings are accepted back to save the class.
     *
     * @var ClassEditorGetResponseClass|null
     */
    public ?ClassEditorGetResponseClass $a_class = null;

    /**
     * Book Now Tabs the class may be shown in. Every element is an array:
     *
     * @var ClassEditorGetResponseClassTabList[]|null
     */
    public ?array $a_class_tab_list = null;

    /**
     * Send rules of the client reminder. Keys are:
     *
     * @var ClassEditorGetResponseReminderInfo|null
     */
    public ?ClassEditorGetResponseReminderInfo $a_reminder_info = null;

    /**
     * Quick search tags of the category of the business. Every element is an array:
     *
     * @var ClassEditorGetResponseSearchTagList[]|null
     */
    public ?array $a_search_tag_list = null;

    /**
     * Store categories of the business. Every element is an array:
     *
     * @var ClassEditorGetResponseShopCategoryList[]|null
     */
    public ?array $a_shop_category_list = null;

    /**
     * Addresses of the pages the form links to:
     *
     * @var ClassEditorGetResponseUrl[]|null
     */
    public ?array $a_url = null;

    /**
     * Markup of the Business policies block of the form.
     *
     * The block is the form of the policy rules of the business. There is no template of this form on the client,
     * so
     * the block is rendered here and the client only moves the markup into the section it belongs to.
     *
     * @var string|null
     */
    public ?string $html_policy = null;

    /**
     * Markup of the Prerequisites block of the form.
     *
     * The block is a picker of the services of the business. There is no template of this picker on the client, so
     * the block is rendered here and the client only moves the markup into the section it belongs to.
     *
     * @var string|null
     */
    public ?string $html_prerequisite = null;

    /**
     * Markup of the Purchase Options block of the form.
     *
     * The block is a picker of the Purchase Options of the business, followed by the list of the picked ones.
     * There
     * is no template of either of them on the client, so the block is rendered here and the client only moves the
     * markup into the section it belongs to.
     *
     * @var string|null
     */
    public ?string $html_promotion = null;

    /**
     * Markup of the Quick Buy block of the form.
     *
     * The block is a picker of the products of the business. There is no template of this picker on the client, so
     * the block is rendered here and the client only moves the markup into the section it belongs to.
     *
     * @var string|null
     */
    public ?string $html_quick_buy = null;

    /**
     * Markup of the Taxes block of the form.
     *
     * The block is a selector of the taxes of the business. There is no template of this select on the client, so
     * the
     * block is rendered here and the client only moves the markup into the section it belongs to.
     *
     * @var string|null
     */
    public ?string $html_tax = null;

    /**
     * Maximum length of description.
     *
     * @var int|null
     */
    public ?int $i_description_limit = null;

    /**
     * `true` if the Administration section may be shown, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_admin = null;

    /**
     * `true` if the birthdate is a required field of the client profile of the business, `false` otherwise.
     *
     * An age restriction can only be kept to when the birthdate is known, so the form asks staff to make the field
     * required while the restriction is switched on for a business that does not require it yet.
     *
     * @var bool|null
     */
    public ?bool $is_birthday_require = null;

    /**
     * `true` if the sign of the currency of the business is written before the amount, `false` if it is written
     * after
     * it.
     *
     * A setting of the currency, not of the business: the dollar sign leads the amount, while the Swedish krona
     * follows it. Every money field of the form puts the sign on this side.
     *
     * @var bool|null
     */
    public ?bool $is_currency_before = null;

    /**
     * `true` if the event may no longer be turned into a ticketed one, or back from it, `false` otherwise.
     *
     * A client who booked or bought locks the move to and from a ticketed event. The lock stays once a purchase
     * has
     * been made, even after it is refunded or voided, so the flag reports whether the event ever had an enrollment
     * rather than whether it has one now. Block and non-block stay interchangeable either way.
     *
     * @var bool|null
     */
    public ?bool $is_event_type_lock = null;

    /**
     * `true` if the business may use the FitLIVE virtual provider, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_fitlive = null;

    /**
     * `true` if the business may offer the class on Wellhub, `false` otherwise.
     *
     * The Wellhub block of the Online visibility section is only shown while this is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_gym_pass_support = null;

    /**
     * `true` if a new client of the business must add a card at sign-up, `false` otherwise.
     *
     * One of the sign-up rules the form lists for a buyer of a ticket who has no account yet. A setting of the
     * business, not of the class.
     *
     * @var bool|null
     */
    public ?bool $is_ticket_card_require = null;

    /**
     * `true` if a new client of the business must sign a waiver, `false` otherwise.
     *
     * One of the sign-up rules the form lists for a buyer of a ticket who has no account yet. A setting of the
     * business, not of the class.
     *
     * @var bool|null
     */
    public ?bool $is_ticket_waiver_require = null;

    /**
     * Currency sign of the business.
     *
     * @var string|null
     */
    public ?string $text_currency = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? new ClassEditorGetResponseClass((array)$data['a_class']) : null;
        $this->a_class_tab_list = isset($data['a_class_tab_list']) ? array_map(static fn ($item) => new ClassEditorGetResponseClassTabList((array)$item), (array)$data['a_class_tab_list']) : null;
        $this->a_reminder_info = isset($data['a_reminder_info']) ? new ClassEditorGetResponseReminderInfo((array)$data['a_reminder_info']) : null;
        $this->a_search_tag_list = isset($data['a_search_tag_list']) ? array_map(static fn ($item) => new ClassEditorGetResponseSearchTagList((array)$item), (array)$data['a_search_tag_list']) : null;
        $this->a_shop_category_list = isset($data['a_shop_category_list']) ? array_map(static fn ($item) => new ClassEditorGetResponseShopCategoryList((array)$item), (array)$data['a_shop_category_list']) : null;
        $this->a_url = isset($data['a_url']) ? array_map(static fn ($item) => new ClassEditorGetResponseUrl((array)$item), (array)$data['a_url']) : null;
        $this->html_policy = isset($data['html_policy']) ? (string)$data['html_policy'] : null;
        $this->html_prerequisite = isset($data['html_prerequisite']) ? (string)$data['html_prerequisite'] : null;
        $this->html_promotion = isset($data['html_promotion']) ? (string)$data['html_promotion'] : null;
        $this->html_quick_buy = isset($data['html_quick_buy']) ? (string)$data['html_quick_buy'] : null;
        $this->html_tax = isset($data['html_tax']) ? (string)$data['html_tax'] : null;
        $this->i_description_limit = isset($data['i_description_limit']) ? (int)$data['i_description_limit'] : null;
        $this->is_admin = isset($data['is_admin']) ? (bool)$data['is_admin'] : null;
        $this->is_birthday_require = isset($data['is_birthday_require']) ? (bool)$data['is_birthday_require'] : null;
        $this->is_currency_before = isset($data['is_currency_before']) ? (bool)$data['is_currency_before'] : null;
        $this->is_event_type_lock = isset($data['is_event_type_lock']) ? (bool)$data['is_event_type_lock'] : null;
        $this->is_fitlive = isset($data['is_fitlive']) ? (bool)$data['is_fitlive'] : null;
        $this->is_gym_pass_support = isset($data['is_gym_pass_support']) ? (bool)$data['is_gym_pass_support'] : null;
        $this->is_ticket_card_require = isset($data['is_ticket_card_require']) ? (bool)$data['is_ticket_card_require'] : null;
        $this->is_ticket_waiver_require = isset($data['is_ticket_waiver_require']) ? (bool)$data['is_ticket_waiver_require'] : null;
        $this->text_currency = isset($data['text_currency']) ? (string)$data['text_currency'] : null;
    }
}
