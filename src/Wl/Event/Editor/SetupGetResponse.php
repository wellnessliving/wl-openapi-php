<?php

namespace WlSdk\Wl\Event\Editor;

/**
 * Response from GET
 */
class SetupGetResponse
{
    /**
     * Book Now Tabs the event may be shown in. Every element is an array:
     *
     * @var SetupGetResponseClassTab[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * Business policies the form starts with.
     *
     * Policies of the event for a saved event, policies of the business for a new one, so that the fields of the
     * Business policies section are filled in either case.
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * Send rules of the client reminder.
     *
     * @var array|null
     */
    public ?array $a_reminder_info = null;

    /**
     * Quick search tags of the category of the business. Every element is an array:
     *
     * @var SetupGetResponseSearchTag[]|null
     */
    public ?array $a_search_tag = null;

    /**
     * Store categories of the business. Every element is an array:
     *
     * @var SetupGetResponseShopCategory[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * Addresses of the pages the form links to:
     *
     * @var SetupGetResponseUrl[]|null
     */
    public ?array $a_url = null;

    /**
     * Markup of the Business policies block of the form.
     *
     * The block is a form of the legacy page, which is built by RsBusinessConfigFormView from the policy
     * rules of the business. There is no template of this form on the client, so the block is rendered here and
     * the
     * client only moves the markup into the section it belongs to.
     *
     * @var string|null
     */
    public ?string $html_policy = null;

    /**
     * Markup of the Prerequisites block of the form.
     *
     * The block is a picker of services built by ComponentView from the services of the business. There is no
     * template of this picker on the client, so the block is rendered here and the client only moves the markup
     * into
     * the section it belongs to.
     *
     * @var string|null
     */
    public ?string $html_prerequisite = null;

    /**
     * Markup of the Purchase Options block of the form.
     *
     * The block is a picker of Purchase Options built by ComponentView, followed by the list of the picked
     * ones built by ListView. There is no template of either of them on the client, so the block is rendered
     * here and the client only moves the markup into the section it belongs to.
     *
     * @var string|null
     */
    public ?string $html_promotion = null;

    /**
     * Markup of the Quick Buy block of the form.
     *
     * The block is a picker of products built by ComponentView from the products of the business. There is no
     * template of this picker on the client, so the block is rendered here and the client only moves the markup
     * into
     * the section it belongs to.
     *
     * @var string|null
     */
    public ?string $html_quick_buy = null;

    /**
     * Markup of the Taxes block of the form.
     *
     * The block is a select built by RsTaxSelectView from the taxes of the business. There is no template of
     * this select on the client, so the block is rendered here and the client only moves the markup into the
     * section
     * it belongs to.
     *
     * @var string|null
     */
    public ?string $html_tax = null;

    /**
     * `true` if the Administration section may be shown, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_admin = null;

    /**
     * Currency sign of the business.
     *
     * @var string|null
     */
    public ?string $text_currency = null;

    public function __construct(array $data)
    {
        $this->a_class_tab = isset($data['a_class_tab']) ? array_map(static fn ($item) => new SetupGetResponseClassTab((array)$item), (array)$data['a_class_tab']) : null;
        $this->a_config = isset($data['a_config']) ? (array)$data['a_config'] : null;
        $this->a_reminder_info = isset($data['a_reminder_info']) ? (array)$data['a_reminder_info'] : null;
        $this->a_search_tag = isset($data['a_search_tag']) ? array_map(static fn ($item) => new SetupGetResponseSearchTag((array)$item), (array)$data['a_search_tag']) : null;
        $this->a_shop_category = isset($data['a_shop_category']) ? array_map(static fn ($item) => new SetupGetResponseShopCategory((array)$item), (array)$data['a_shop_category']) : null;
        $this->a_url = isset($data['a_url']) ? array_map(static fn ($item) => new SetupGetResponseUrl((array)$item), (array)$data['a_url']) : null;
        $this->html_policy = isset($data['html_policy']) ? (string)$data['html_policy'] : null;
        $this->html_prerequisite = isset($data['html_prerequisite']) ? (string)$data['html_prerequisite'] : null;
        $this->html_promotion = isset($data['html_promotion']) ? (string)$data['html_promotion'] : null;
        $this->html_quick_buy = isset($data['html_quick_buy']) ? (string)$data['html_quick_buy'] : null;
        $this->html_tax = isset($data['html_tax']) ? (string)$data['html_tax'] : null;
        $this->is_admin = isset($data['is_admin']) ? (bool)$data['is_admin'] : null;
        $this->text_currency = isset($data['text_currency']) ? (string)$data['text_currency'] : null;
    }
}
