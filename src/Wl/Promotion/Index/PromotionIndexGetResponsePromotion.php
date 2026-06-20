<?php
namespace WlSdk\Wl\Promotion\Index;

class PromotionIndexGetResponsePromotion
{
    /**
     * Information about services that can be attended with this pass or membership.
     *
     * @var PromotionIndexGetResponsePromotionAccess|null
     */
    public ?PromotionIndexGetResponsePromotionAccess $a_access = null;

    /**
     * A list of components included in the Purchase Option if this Purchase Option is a package.
     * If it's not a package, the list will be always empty.
     * If it's a package, the list can still be empty if all its components were deactivated.
     * This means that this array can't be used to determine whether this is a package or not (check `id_program`
     * or `id_program_type`
     * value instead).
     * There can be three types of components: events, Purchase Options, and products.
     * Some fields can be different depending on type of the component, but each element of the array includes:
     *
     * @var PromotionIndexGetResponsePromotionComponent|null
     */
    public ?PromotionIndexGetResponsePromotionComponent $a_component = null;

    /**
     * This will be an empty array if the Purchase Option doesn't have image.
     * Otherwise, this will display the following information about the Purchase Option image:
     *
     * @var PromotionIndexGetResponsePromotionImage|null
     */
    public ?PromotionIndexGetResponsePromotionImage $a_image = null;

    /**
     * Attendance restrictions, if available. If unavailable, this will be an empty array. Every element has a key,
     * which is a type of
     * the time period [ADurationSid::DAY](#/components/schemas/ADurationSid),
     * [ADurationSid::WEEK](#/components/schemas/ADurationSid),
     * [ADurationSid::MONTH](#/components/schemas/ADurationSid),
     * [ADurationSid::YEAR](#/components/schemas/ADurationSid).
     * The values are:
     *
     * @var PromotionIndexGetResponsePromotionVisitLimit|null
     */
    public ?PromotionIndexGetResponsePromotionVisitLimit $a_visit_limit = null;

    /**
     * The local expiration date. This is the last day of the Purchase Option's active status.
     * This is used only for the 'Expires on a certain date' duration type. Otherwise, this should be ignored.
     *
     * @var string|null
     */
    public ?string $dl_expire = null;

    /**
     * The number of periods for the "Period" duration type.
     * For example, if the duration of the Purchase Option is 12 months, this field will be 12.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The number of visits that the owner of the Purchase Option can use.
     * This will be `0` if the Purchase Option has unlimited visits.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The maximum number of minutes or hours depending on `id_limit_duration` that the current promotion can be
     * used in.
     *
     * @var int|null
     */
    public ?int $i_limit_duration = null;

    /**
     * The type of `i_limit_duration`.
     * One of [ADurationSid](#/components/schemas/ADurationSid) contantant.
     * This can only be: <ul>
     *     <li>[ADurationSid::MINUTE](#/components/schemas/ADurationSid)</li>
     *     <li>[ADurationSid::HOUR](#/components/schemas/ADurationSid)</li>
     *     <li>[ADurationSid::MONTH](#/components/schemas/ADurationSid)</li>
     *     <li>[ADurationSid::YEAR](#/components/schemas/ADurationSid)</li>
     * </ul>
     *
     * @var int|null
     */
    public ?int $id_limit_duration = null;

    /**
     * The type of periods for the duration type "Period".
     * For example, if the duration of the Purchase Option is 12 months, this field will be the ID of the month.
     * See all the possible options here: [ADurationSid](#/components/schemas/ADurationSid).
     *
     * @var int|null
     */
    public ?int $id_duration = null;

    /**
     * The type of the duration. This can be "Without End", "Expires on a certain date", "Period".
     * See more information here: [RsDurationTypeSid](#/components/schemas/RsDurationTypeSid).
     *
     * @var int|null
     */
    public ?int $id_duration_type = null;

    /**
     * The type of the Purchase Option. The `id_program` relates to only one `id_program_type` and one
     * `id_program_category`.
     * See more information here: [RsProgramSid](#/components/schemas/RsProgramSid).
     *
     * @var int|null
     */
    public ?int $id_program = null;

    /**
     * The category of the program for promotions. The `id_program_category` relates to more than one
     * `id_program`.
     * See more information here: [RsProgramCategorySid](#/components/schemas/RsProgramCategorySid).
     *
     * @var int|null
     */
    public ?int $id_program_category = null;

    /**
     * The ID of the promotion program type. The `id_program_type` relates to more than one `id_program`.
     * See more information here: [RsProgramTypeSid](#/components/schemas/RsProgramTypeSid).
     *
     * @var int|null
     */
    public ?int $id_program_type = null;

    /**
     * If `true`, the pricing option can be sold only by direct link. This means it shouldn't be shown in the store
     * or
     * explorer. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_direct_buy_only = null;

    /**
     * If `true`, this promotion is for introductory clients. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_introductory = null;

    /**
     * If `true` this promotion is available for online purchase. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_online = null;

    /**
     * The promotion key.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * The price.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * The localized promotion program name corresponding to the value of `id_program`.
     *
     * @var int|null
     */
    public ?int $text_program = null;

    /**
     * The title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The direct URL to the promotion purchase page.
     *
     * @var string|null
     */
    public ?string $url_buy = null;

    public function __construct(array $data)
    {
        $this->a_access = isset($data['a_access']) ? new PromotionIndexGetResponsePromotionAccess((array)$data['a_access']) : null;
        $this->a_component = isset($data['a_component']) ? new PromotionIndexGetResponsePromotionComponent((array)$data['a_component']) : null;
        $this->a_image = isset($data['a_image']) ? new PromotionIndexGetResponsePromotionImage((array)$data['a_image']) : null;
        $this->a_visit_limit = isset($data['a_visit_limit']) ? new PromotionIndexGetResponsePromotionVisitLimit((array)$data['a_visit_limit']) : null;
        $this->dl_expire = isset($data['dl_expire']) ? (string)$data['dl_expire'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_limit_duration = isset($data['i_limit_duration']) ? (int)$data['i_limit_duration'] : null;
        $this->id_limit_duration = isset($data['id_limit_duration']) ? (int)$data['id_limit_duration'] : null;
        $this->id_duration = isset($data['id_duration']) ? (int)$data['id_duration'] : null;
        $this->id_duration_type = isset($data['id_duration_type']) ? (int)$data['id_duration_type'] : null;
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_program_category = isset($data['id_program_category']) ? (int)$data['id_program_category'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->is_direct_buy_only = isset($data['is_direct_buy_only']) ? (bool)$data['is_direct_buy_only'] : null;
        $this->is_introductory = isset($data['is_introductory']) ? (bool)$data['is_introductory'] : null;
        $this->is_online = isset($data['is_online']) ? (bool)$data['is_online'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_program = isset($data['text_program']) ? (int)$data['text_program'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_buy = isset($data['url_buy']) ? (string)$data['url_buy'] : null;
    }
}
