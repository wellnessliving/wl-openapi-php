<?php
namespace WlSdk\Wl\Member\Info;

/**
 * Response from GET
 */
class InfoGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_info = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_result_list = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_visit_last = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_visit_next = null;

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
        $this->a_info = isset($data['a_info']) ? (array)$data['a_info'] : null;
        $this->a_result_list = isset($data['a_result_list']) ? (array)$data['a_result_list'] : null;
        $this->a_visit_last = isset($data['a_visit_last']) ? (array)$data['a_visit_last'] : null;
        $this->a_visit_next = isset($data['a_visit_next']) ? (array)$data['a_visit_next'] : null;
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
