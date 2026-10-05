<?php

namespace WlSdk\Wl\Classes\Editor;

/**
 * Response from GET
 */
class ClassEditorGetResponse
{
    /**
     * Keys of the Book Now Tabs the class is shown in.
     *
     * Every element is a `text_key` of {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$a_class_tab_list}.
     * Empty for a class that is shown
     * in no tab.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * Book Now Tabs the class may be shown in. Every element is an array:
     *
     * @var ClassEditorGetResponseClassTabList[]|null
     */
    public ?array $a_class_tab_list = null;

    /**
     * Keys of the client types that may book the class.
     *
     * Only taken into account while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$id_bookable} is
     * {@link \WlSdk\Wl\Service\BookableSid}. Empty for a class every client type may book.
     *
     * @var string[]|null
     */
    public ?array $a_login_type = null;

    /**
     * Keys of the client types staff may book into the class.
     *
     * Only taken into account while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_bookable_staff} is
     * `false`. Empty for a class staff
     * may book every client type into.
     *
     * @var string[]|null
     */
    public ?array $a_login_type_staff = null;

    /**
     * Keys of the client groups that may book the class.
     *
     * Only taken into account while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$id_bookable} is
     * {@link \WlSdk\Wl\Service\BookableSid}. Empty for a class every client group may book.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * Send rules of the client reminder. Keys are:
     *
     * @var ClassEditorGetResponseReminderInfo|null
     */
    public ?ClassEditorGetResponseReminderInfo $a_reminder_info = null;

    /**
     * Book-a-Spot asset categories the class requires. Every element is an array:
     *
     * @var ClassEditorGetResponseResourceType[]|null
     */
    public ?array $a_resource_type = null;

    /**
     * Keys of the quick search tags of the class.
     *
     * Every element is a `k_search_tag` of {@link
     * \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$a_search_tag_list}. Empty for a class with no
     * tags.
     *
     * @var string[]|null
     */
    public ?array $a_search_tag = null;

    /**
     * Quick search tags of the category of the business. Every element is an array:
     *
     * @var ClassEditorGetResponseSearchTagList[]|null
     */
    public ?array $a_search_tag_list = null;

    /**
     * Keys of the store categories the event is listed under.
     *
     * Every element is a `k_shop_category` of {@link
     * \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$a_shop_category_list}. Empty for an event
     * that is listed under no category.
     *
     * @var string[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * Store categories of the business. Every element is an array:
     *
     * @var ClassEditorGetResponseShopCategoryList[]|null
     */
    public ?array $a_shop_category_list = null;

    /**
     * Keys of the revenue categories the drop-in revenue of the class is tracked under.
     *
     * Empty for a class with no revenue category.
     *
     * @var string[]|null
     */
    public ?array $a_tag = null;

    /**
     * Ticket types of a ticketed event, in the order they are offered. Every element is an array:
     *
     * Empty for an event that is not ticketed, and for a ticketed event that has no types yet. The client offers
     * an
     * empty row in either case.
     *
     * @var ClassEditorGetResponseTicketOption[]|null
     */
    public ?array $a_ticket_option = null;

    /**
     * Addresses of the pages the form links to:
     *
     * @var ClassEditorGetResponseUrl[]|null
     */
    public ?array $a_url = null;

    /**
     * Last day of the early bird discount.
     *
     * Empty string if the event has no early bird discount.
     *
     * @var string|null
     */
    public ?string $dl_early = null;

    /**
     * Deposit a client leaves while booking the event.
     *
     * A percent of the price of the event while {@link
     * \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_deposit_percent} is `true`, an amount of
     * money otherwise. `0.00` unless {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$id_pay_require} is
     * {@link \WlSdk\Wl\Classes\RequirePaySid}. The field keeps the name the legacy form posts, which carries
     * both an amount of money and a percent.
     *
     * @var string|null
     */
    public ?string $f_deposit = null;

    /**
     * Early bird discount of the event.
     *
     * `0.00` if the event has no early bird discount. The field keeps the name the legacy form posts.
     *
     * @var string|null
     */
    public ?string $f_early = null;

    /**
     * Price of one session of the event.
     *
     * Only taken into account while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_buy_single} is
     * `true`. The field keeps the name the
     * legacy form posts.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * Price of the whole event.
     *
     * Only taken into account while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_buy_total} is
     * `true`. The field keeps the name the
     * legacy form posts.
     *
     * @var string|null
     */
    public ?string $f_price_total = null;

    /**
     * `true` if the event is hidden in the White Label Achieve Client App, `false` if it is shown there.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * `true` if the price of a single session is hidden from a client who has an applicable Purchase Option,
     * `false` if it is shown to them.
     *
     * @var bool|null
     */
    public ?bool $hide_price = null;

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
     * Months above the whole years of the minimum age of a client of the class.
     *
     * `null` if the class has no minimum age.
     *
     * @var int|null
     */
    public ?int $i_age_from_month = null;

    /**
     * Whole years of the minimum age of a client of the class.
     *
     * `null` if the class has no minimum age.
     *
     * @var int|null
     */
    public ?int $i_age_from_year = null;

    /**
     * Months above the whole years of the maximum age of a client of the class.
     *
     * `null` if the class has no maximum age.
     *
     * @var int|null
     */
    public ?int $i_age_to_month = null;

    /**
     * Whole years of the maximum age of a client of the class.
     *
     * `null` if the class has no maximum age.
     *
     * @var int|null
     */
    public ?int $i_age_to_year = null;

    /**
     * Number of clients that may enroll into each instance of the event.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Number of tickets that may be sold for each instance of a ticketed event.
     *
     * The same number as {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$i_capacity}, in a field of its
     * own because a ticketed event asks
     * for it in a field the legacy form posts under this name.
     *
     * @var int|null
     */
    public ?int $i_capacity_ticket = null;

    /**
     * Maximum length of description.
     *
     * @var int|null
     */
    public ?int $i_description_limit = null;

    /**
     * Maximum number of make-up sessions a client may take.
     *
     * `0` stands for as many as the number of the sessions the client missed.
     *
     * @var int|null
     */
    public ?int $i_makeup_cap = null;

    /**
     * Number of tickets that may be bought in one order of a ticketed event.
     *
     * @var int|null
     */
    public ?int $i_order_limit = null;

    /**
     * Kind of the age restriction of the class.
     *
     * Only taken into account while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_age_restrict} is
     * `true`.
     *
     * @var int|null
     * @see \WlSdk\Wl\Service\AgeRestrictionStatusSid
     */
    public ?int $id_age_restrict = null;

    /**
     * Who may book the class online.
     *
     * The class keeps the client types and the groups whether online booking is open or not, so the form works
     * this
     * out from them: a class that is closed to everyone is only told apart from a restricted one by them being
     * empty.
     *
     * @var int|null
     * @see \WlSdk\Wl\Service\BookableSid
     */
    public ?int $id_bookable = null;

    /**
     * Type of the event.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\Edit\EventTypeEnum
     */
    public ?int $id_event_type = null;

    /**
     * Kind of note staff may take for a client visit.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\Note\Sid\NoteSid
     */
    public ?int $id_note = null;

    /**
     * Way a client pays for the event.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\RequirePaySid
     */
    public ?int $id_pay_require = null;

    /**
     * Virtual meeting provider of the event. `null` for an in-person event.
     *
     * @var int|null
     * @see \WlSdk\Wl\Virtual\VirtualProviderSid
     */
    public ?int $id_virtual_provider = null;

    /**
     * `true` if a buyer of a ticket must have an account, `false` if a name and an email address are enough.
     *
     * Ignored for an event that is not ticketed.
     *
     * @var bool|null
     */
    public ?bool $is_account_require = null;

    /**
     * `true` if the Administration section may be shown, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_admin = null;

    /**
     * `true` if the class is shown to a client who does not meet its age requirement, `false` if it is hidden from
     * them.
     *
     * @var bool|null
     */
    public ?bool $is_age_public = null;

    /**
     * `true` if the class has an age restriction, `false` otherwise.
     *
     * The legacy form keeps no flag of its own for this switch, so it is worked out from the age bounds, the same
     * as in the legacy form.
     *
     * @var bool|null
     */
    public ?bool $is_age_restrict = null;

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
     * `true` if staff may book any client type into the class, `false` if only the client types of
     * {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$a_login_type_staff}.
     *
     * @var bool|null
     */
    public ?bool $is_bookable_staff = null;

    /**
     * `true` if a client pays for the event with a Purchase Option only, `false` otherwise.
     *
     * One of the three ways a client pays for the event, which are mutually exclusive:
     * {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_buy_promotion}, {@link
     * \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_buy_single} and
     * {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_buy_total}.
     * expects.
     *
     * @var bool|null
     */
    public ?bool $is_buy_promotion = null;

    /**
     * `true` if a client buys one session of the event at a time, `false` otherwise.
     *
     * {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$f_price} is the price of a session. See
     * {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_buy_promotion} for the other ways a client pays
     * for the event.
     *
     * @var bool|null
     */
    public ?bool $is_buy_single = null;

    /**
     * `true` if a client buys the whole event at once, `false` otherwise.
     *
     * {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$f_price_total} is the price of the event. Defaults
     * to `true`, the same as the legacy
     * form offers for a new event. See {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_buy_promotion}
     * for the other ways a client pays
     * for the event.
     *
     * @var bool|null
     */
    public ?bool $is_buy_total = null;

    /**
     * `true` if the clients of the class receive the default client notifications, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_client_notification = null;

    /**
     * `true` if the class has policies of its own, `false` if it follows the policies of the business.
     *
     * @var bool|null
     */
    public ?bool $is_config_business = null;

    /**
     * `true` if the clients of the class receive a confirmation notification of its own, `false` if they receive
     * the
     * default one.
     *
     * @var bool|null
     */
    public ?bool $is_custom_confirmation = null;

    /**
     * `true` if the confirmation notification of the class is sent by email, `false` otherwise.
     *
     * Ignored while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_custom_confirmation} is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_confirmation_mail = null;

    /**
     * `true` if the confirmation notification of the class is sent as a push message, `false` otherwise.
     *
     * Ignored while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_custom_confirmation} is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_confirmation_push = null;

    /**
     * `true` if the confirmation notification of the class is sent by SMS, `false` otherwise.
     *
     * Ignored while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_custom_confirmation} is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_confirmation_sms = null;

    /**
     * `true` if the clients of the class receive a reminder notification of its own, `false` if they receive the
     * default one.
     *
     * @var bool|null
     */
    public ?bool $is_custom_reminder = null;

    /**
     * `true` if the reminder notification of the class is sent by email, `false` otherwise.
     *
     * Ignored while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_custom_reminder} is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_reminder_mail = null;

    /**
     * `true` if the reminder notification of the class is sent as a push message, `false` otherwise.
     *
     * Ignored while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_custom_reminder} is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_reminder_push = null;

    /**
     * `true` if the reminder notification of the class is sent by SMS, `false` otherwise.
     *
     * Ignored while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_custom_reminder} is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_reminder_sms = null;

    /**
     * `true` if {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$f_deposit} is a percent of the price of
     * the event, `false` if it is an
     * amount of money.
     *
     * Copy of the `is_deposit_percent` column of the class.
     *
     * @var bool|null
     */
    public ?bool $is_deposit_percent = null;

    /**
     * `true` if a buyer may reserve a ticket and pay for it at the door, `false` if a ticket is paid for at once.
     *
     * Ignored for an event that is not ticketed.
     *
     * @var bool|null
     */
    public ?bool $is_door_pay = null;

    /**
     * `true` if the event has an early bird discount, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_early = null;

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
     * `true` if the event is offered on Wellhub, `false` otherwise.
     *
     * Ignored while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_gym_pass_support} is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_gym_pass = null;

    /**
     * `true` if the business may offer the event on Wellhub, `false` otherwise.
     *
     * The Wellhub block of the Online visibility section is only shown while this is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_gym_pass_support = null;

    /**
     * `true` if the class is hidden from a client who may not book it, `false` if it is shown to them.
     *
     * @var bool|null
     */
    public ?bool $is_online_private = null;

    /**
     * `true` if a client must attend other services before booking this one, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_prerequisite = null;

    /**
     * `true` if staff may sell products from the attendance list of the class, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_quick_buy = null;

    /**
     * `true` if the number of the make-up sessions of the event is limited, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_replace = null;

    /**
     * `true` if the class requires Book-a-Spot assets, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_resource_type = null;

    /**
     * `true` if staff receive the default staff notifications of the class, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_staff_notification = null;

    /**
     * `true` if staff may book individual sessions of a block event, `false` otherwise.
     *
     * Ignored for a non-block or a ticketed event.
     *
     * @var bool|null
     */
    public ?bool $is_staff_session = null;

    /**
     * `true` if taxes are applied to the sales of the class, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_tax_enable = null;

    /**
     * `true` if a buyer of a ticket must agree to terms and conditions, `false` otherwise.
     *
     * Ignored for an event that is not ticketed.
     *
     * @var bool|null
     */
    public ?bool $is_terms = null;

    /**
     * `true` if a new client of the business must add a card at sign-up, `false` otherwise.
     *
     * One of the sign-up rules the form lists for a buyer of a ticket who has no account yet. A setting of the
     * business, not of the event.
     *
     * @var bool|null
     */
    public ?bool $is_ticket_card_require = null;

    /**
     * `true` if a new client of the business must sign a waiver, `false` otherwise.
     *
     * One of the sign-up rules the form lists for a buyer of a ticket who has no account yet. A setting of the
     * business, not of the event.
     *
     * @var bool|null
     */
    public ?bool $is_ticket_waiver_require = null;

    /**
     * Key of the revenue category the drop-in revenue of the class is tracked under first of all.
     *
     * Empty string for a class with no revenue category. Always one of {@link
     * \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$a_tag}.
     *
     * @var string|null
     */
    public ?string $k_tag_primary = null;

    /**
     * Revenue the business earns per client per session of an event offered on Wellhub.
     *
     * Ignored while {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$is_gym_pass} is `false`.
     *
     * @var string|null
     */
    public ?string $m_revenue_gym_pass = null;

    /**
     * Color of the event on the schedule in hex format.
     *
     * @var string|null
     */
    public ?string $s_color_background = null;

    /**
     * Description of the event.
     *
     * @var string|null
     */
    public ?string $s_description = null;

    /**
     * Special instructions of the event.
     *
     * @var string|null
     */
    public ?string $s_special = null;

    /**
     * Title of the event.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * `true` if the special instructions may be shown publicly, `false` if only to a client who booked the event.
     *
     * @var bool|null
     */
    public ?bool $show_special_instructions = null;

    /**
     * Currency sign of the business.
     *
     * @var string|null
     */
    public ?string $text_currency = null;

    /**
     * Last day of the early bird discount as the calendar of the form shows it.
     *
     * Empty string if the event has no early bird discount. {@link
     * \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$dl_early} carries the same day
     * in the format the form posts.
     *
     * @var string|null
     */
    public ?string $text_early = null;

    /**
     * Terms and conditions a buyer of a ticket must agree to.
     *
     * Empty string for an event that is not ticketed, and for a ticketed event with no terms.
     *
     * @var string|null
     */
    public ?string $xml_terms = null;

    public function __construct(array $data)
    {
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_class_tab_list = isset($data['a_class_tab_list']) ? array_map(static fn ($item) => new ClassEditorGetResponseClassTabList((array)$item), (array)$data['a_class_tab_list']) : null;
        $this->a_login_type = isset($data['a_login_type']) ? (array)$data['a_login_type'] : null;
        $this->a_login_type_staff = isset($data['a_login_type_staff']) ? (array)$data['a_login_type_staff'] : null;
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
        $this->a_reminder_info = isset($data['a_reminder_info']) ? new ClassEditorGetResponseReminderInfo((array)$data['a_reminder_info']) : null;
        $this->a_resource_type = isset($data['a_resource_type']) ? array_map(static fn ($item) => new ClassEditorGetResponseResourceType((array)$item), (array)$data['a_resource_type']) : null;
        $this->a_search_tag = isset($data['a_search_tag']) ? (array)$data['a_search_tag'] : null;
        $this->a_search_tag_list = isset($data['a_search_tag_list']) ? array_map(static fn ($item) => new ClassEditorGetResponseSearchTagList((array)$item), (array)$data['a_search_tag_list']) : null;
        $this->a_shop_category = isset($data['a_shop_category']) ? (array)$data['a_shop_category'] : null;
        $this->a_shop_category_list = isset($data['a_shop_category_list']) ? array_map(static fn ($item) => new ClassEditorGetResponseShopCategoryList((array)$item), (array)$data['a_shop_category_list']) : null;
        $this->a_tag = isset($data['a_tag']) ? (array)$data['a_tag'] : null;
        $this->a_ticket_option = isset($data['a_ticket_option']) ? array_map(static fn ($item) => new ClassEditorGetResponseTicketOption((array)$item), (array)$data['a_ticket_option']) : null;
        $this->a_url = isset($data['a_url']) ? array_map(static fn ($item) => new ClassEditorGetResponseUrl((array)$item), (array)$data['a_url']) : null;
        $this->dl_early = isset($data['dl_early']) ? (string)$data['dl_early'] : null;
        $this->f_deposit = isset($data['f_deposit']) ? (string)$data['f_deposit'] : null;
        $this->f_early = isset($data['f_early']) ? (string)$data['f_early'] : null;
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->f_price_total = isset($data['f_price_total']) ? (string)$data['f_price_total'] : null;
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->hide_price = isset($data['hide_price']) ? (bool)$data['hide_price'] : null;
        $this->html_policy = isset($data['html_policy']) ? (string)$data['html_policy'] : null;
        $this->html_prerequisite = isset($data['html_prerequisite']) ? (string)$data['html_prerequisite'] : null;
        $this->html_promotion = isset($data['html_promotion']) ? (string)$data['html_promotion'] : null;
        $this->html_quick_buy = isset($data['html_quick_buy']) ? (string)$data['html_quick_buy'] : null;
        $this->html_tax = isset($data['html_tax']) ? (string)$data['html_tax'] : null;
        $this->i_age_from_month = isset($data['i_age_from_month']) ? (int)$data['i_age_from_month'] : null;
        $this->i_age_from_year = isset($data['i_age_from_year']) ? (int)$data['i_age_from_year'] : null;
        $this->i_age_to_month = isset($data['i_age_to_month']) ? (int)$data['i_age_to_month'] : null;
        $this->i_age_to_year = isset($data['i_age_to_year']) ? (int)$data['i_age_to_year'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_capacity_ticket = isset($data['i_capacity_ticket']) ? (int)$data['i_capacity_ticket'] : null;
        $this->i_description_limit = isset($data['i_description_limit']) ? (int)$data['i_description_limit'] : null;
        $this->i_makeup_cap = isset($data['i_makeup_cap']) ? (int)$data['i_makeup_cap'] : null;
        $this->i_order_limit = isset($data['i_order_limit']) ? (int)$data['i_order_limit'] : null;
        $this->id_age_restrict = isset($data['id_age_restrict']) ? (int)$data['id_age_restrict'] : null;
        $this->id_bookable = isset($data['id_bookable']) ? (int)$data['id_bookable'] : null;
        $this->id_event_type = isset($data['id_event_type']) ? (int)$data['id_event_type'] : null;
        $this->id_note = isset($data['id_note']) ? (int)$data['id_note'] : null;
        $this->id_pay_require = isset($data['id_pay_require']) ? (int)$data['id_pay_require'] : null;
        $this->id_virtual_provider = isset($data['id_virtual_provider']) ? (int)$data['id_virtual_provider'] : null;
        $this->is_account_require = isset($data['is_account_require']) ? (bool)$data['is_account_require'] : null;
        $this->is_admin = isset($data['is_admin']) ? (bool)$data['is_admin'] : null;
        $this->is_age_public = isset($data['is_age_public']) ? (bool)$data['is_age_public'] : null;
        $this->is_age_restrict = isset($data['is_age_restrict']) ? (bool)$data['is_age_restrict'] : null;
        $this->is_birthday_require = isset($data['is_birthday_require']) ? (bool)$data['is_birthday_require'] : null;
        $this->is_bookable_staff = isset($data['is_bookable_staff']) ? (bool)$data['is_bookable_staff'] : null;
        $this->is_buy_promotion = isset($data['is_buy_promotion']) ? (bool)$data['is_buy_promotion'] : null;
        $this->is_buy_single = isset($data['is_buy_single']) ? (bool)$data['is_buy_single'] : null;
        $this->is_buy_total = isset($data['is_buy_total']) ? (bool)$data['is_buy_total'] : null;
        $this->is_client_notification = isset($data['is_client_notification']) ? (bool)$data['is_client_notification'] : null;
        $this->is_config_business = isset($data['is_config_business']) ? (bool)$data['is_config_business'] : null;
        $this->is_custom_confirmation = isset($data['is_custom_confirmation']) ? (bool)$data['is_custom_confirmation'] : null;
        $this->is_custom_confirmation_mail = isset($data['is_custom_confirmation_mail']) ? (bool)$data['is_custom_confirmation_mail'] : null;
        $this->is_custom_confirmation_push = isset($data['is_custom_confirmation_push']) ? (bool)$data['is_custom_confirmation_push'] : null;
        $this->is_custom_confirmation_sms = isset($data['is_custom_confirmation_sms']) ? (bool)$data['is_custom_confirmation_sms'] : null;
        $this->is_custom_reminder = isset($data['is_custom_reminder']) ? (bool)$data['is_custom_reminder'] : null;
        $this->is_custom_reminder_mail = isset($data['is_custom_reminder_mail']) ? (bool)$data['is_custom_reminder_mail'] : null;
        $this->is_custom_reminder_push = isset($data['is_custom_reminder_push']) ? (bool)$data['is_custom_reminder_push'] : null;
        $this->is_custom_reminder_sms = isset($data['is_custom_reminder_sms']) ? (bool)$data['is_custom_reminder_sms'] : null;
        $this->is_deposit_percent = isset($data['is_deposit_percent']) ? (bool)$data['is_deposit_percent'] : null;
        $this->is_door_pay = isset($data['is_door_pay']) ? (bool)$data['is_door_pay'] : null;
        $this->is_early = isset($data['is_early']) ? (bool)$data['is_early'] : null;
        $this->is_event_type_lock = isset($data['is_event_type_lock']) ? (bool)$data['is_event_type_lock'] : null;
        $this->is_fitlive = isset($data['is_fitlive']) ? (bool)$data['is_fitlive'] : null;
        $this->is_gym_pass = isset($data['is_gym_pass']) ? (bool)$data['is_gym_pass'] : null;
        $this->is_gym_pass_support = isset($data['is_gym_pass_support']) ? (bool)$data['is_gym_pass_support'] : null;
        $this->is_online_private = isset($data['is_online_private']) ? (bool)$data['is_online_private'] : null;
        $this->is_prerequisite = isset($data['is_prerequisite']) ? (bool)$data['is_prerequisite'] : null;
        $this->is_quick_buy = isset($data['is_quick_buy']) ? (bool)$data['is_quick_buy'] : null;
        $this->is_replace = isset($data['is_replace']) ? (bool)$data['is_replace'] : null;
        $this->is_resource_type = isset($data['is_resource_type']) ? (bool)$data['is_resource_type'] : null;
        $this->is_staff_notification = isset($data['is_staff_notification']) ? (bool)$data['is_staff_notification'] : null;
        $this->is_staff_session = isset($data['is_staff_session']) ? (bool)$data['is_staff_session'] : null;
        $this->is_tax_enable = isset($data['is_tax_enable']) ? (bool)$data['is_tax_enable'] : null;
        $this->is_terms = isset($data['is_terms']) ? (bool)$data['is_terms'] : null;
        $this->is_ticket_card_require = isset($data['is_ticket_card_require']) ? (bool)$data['is_ticket_card_require'] : null;
        $this->is_ticket_waiver_require = isset($data['is_ticket_waiver_require']) ? (bool)$data['is_ticket_waiver_require'] : null;
        $this->k_tag_primary = isset($data['k_tag_primary']) ? (string)$data['k_tag_primary'] : null;
        $this->m_revenue_gym_pass = isset($data['m_revenue_gym_pass']) ? (string)$data['m_revenue_gym_pass'] : null;
        $this->s_color_background = isset($data['s_color_background']) ? (string)$data['s_color_background'] : null;
        $this->s_description = isset($data['s_description']) ? (string)$data['s_description'] : null;
        $this->s_special = isset($data['s_special']) ? (string)$data['s_special'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->show_special_instructions = isset($data['show_special_instructions']) ? (bool)$data['show_special_instructions'] : null;
        $this->text_currency = isset($data['text_currency']) ? (string)$data['text_currency'] : null;
        $this->text_early = isset($data['text_early']) ? (string)$data['text_early'] : null;
        $this->xml_terms = isset($data['xml_terms']) ? (string)$data['xml_terms'] : null;
    }
}
