<?php
namespace WlSdk\Wl\Reception\Application;

/**
 * Response from GET
 */
class MemberInfoGetResponse
{
    /**
     * Additional member data or `null` if any data can be shown.
     * Will be filled if [InfoApi](/Wl/Member/Info/Info.json) flag is set.
     *
     * @var MemberInfoGetResponseInfo|null
     */
    public ?MemberInfoGetResponseInfo $a_info = null;

    /**
     * The options presented in the web app.
     * 
     * The items are generated this way due to JavaScript limitations around translated messages.
     *
     * @var MemberInfoGetResponseItems[]|null
     */
    public ?array $a_items = null;

    /**
     * List of users data.
     * Keys - users primary keys. Values - users data `_get()` for details.
     * Keys refer to clients' primary keys, and values refer to clients' data.
     * If `null`, data for a single client is being requested.
     *
     * @var MemberInfoGetResponseResultList|null
     */
    public ?MemberInfoGetResponseResultList $a_result_list = null;

    /**
     * Information about last visit of the user.
     *
     * @var MemberInfoGetResponseVisitLast|null
     */
    public ?MemberInfoGetResponseVisitLast $a_visit_last = null;

    /**
     * Information about next visit of the user.
     *
     * @var MemberInfoGetResponseVisitNext|null
     */
    public ?MemberInfoGetResponseVisitNext $a_visit_next = null;

    /**
     * Count attend visits for one client.
     *
     * @var int|null
     */
    public ?int $i_lifetime_visit = null;

    /**
     * If `true`, the client is a traveler. Otherwise, this will be `false`.
     * This will be `null` in cases when the client is a walk-in. Or when `is_full` is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_traveller = null;

    /**
     * The member's lifetime value.
     *
     * @var string|null
     */
    public ?string $m_lifetime_value = null;

    /**
     * The member ID.
     * 
     * If `null`, the specified client isn't a member of the specified business.
     *
     * @var string|null
     */
    public ?string $s_member = null;

    /**
     * First user's name.
     *
     * @var string|null
     */
    public ?string $text_first_name = null;

    /**
     * Full user's name.
     *
     * @var string|null
     */
    public ?string $text_fullname = null;

    /**
     * URL to barcode image.
     *
     * @var string|null
     */
    public ?string $url_barcode = null;

    /**
     * URL to email.
     *
     * @var string|null
     */
    public ?string $url_email = null;

    public function __construct(array $data)
    {
        $this->a_info = isset($data['a_info']) ? new MemberInfoGetResponseInfo((array)$data['a_info']) : null;
        $this->a_items = isset($data['a_items']) ? array_map(static fn($item) => new MemberInfoGetResponseItems((array)$item), (array)$data['a_items']) : null;
        $this->a_result_list = isset($data['a_result_list']) ? new MemberInfoGetResponseResultList((array)$data['a_result_list']) : null;
        $this->a_visit_last = isset($data['a_visit_last']) ? new MemberInfoGetResponseVisitLast((array)$data['a_visit_last']) : null;
        $this->a_visit_next = isset($data['a_visit_next']) ? new MemberInfoGetResponseVisitNext((array)$data['a_visit_next']) : null;
        $this->i_lifetime_visit = isset($data['i_lifetime_visit']) ? (int)$data['i_lifetime_visit'] : null;
        $this->is_traveller = isset($data['is_traveller']) ? (bool)$data['is_traveller'] : null;
        $this->m_lifetime_value = isset($data['m_lifetime_value']) ? (string)$data['m_lifetime_value'] : null;
        $this->s_member = isset($data['s_member']) ? (string)$data['s_member'] : null;
        $this->text_first_name = isset($data['text_first_name']) ? (string)$data['text_first_name'] : null;
        $this->text_fullname = isset($data['text_fullname']) ? (string)$data['text_fullname'] : null;
        $this->url_barcode = isset($data['url_barcode']) ? (string)$data['url_barcode'] : null;
        $this->url_email = isset($data['url_email']) ? (string)$data['url_email'] : null;
    }
}
