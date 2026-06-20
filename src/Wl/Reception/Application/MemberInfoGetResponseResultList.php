<?php
namespace WlSdk\Wl\Reception\Application;

class MemberInfoGetResponseResultList
{
    /**
     * Additional user's information.
     *
     * @var MemberInfoGetResponseResultListInfo|null
     */
    public ?MemberInfoGetResponseResultListInfo $a_info = null;

    /**
     * `true` - user is traveller; `false` - not traveller.
     *
     * @var bool|null
     */
    public ?bool $is_traveller = null;

    /**
     * User's member number.
     *
     * @var string|null
     */
    public ?string $s_member = null;

    /**
     * User's first name.
     *
     * @var string|null
     */
    public ?string $text_first_name = null;

    /**
     * User's name.
     *
     * @var string|null
     */
    public ?string $text_fullname = null;

    /**
     * Link to barcode image to scan member number.
     *
     * @var string|null
     */
    public ?string $url_barcode = null;

    public function __construct(array $data)
    {
        $this->a_info = isset($data['a_info']) ? new MemberInfoGetResponseResultListInfo((array)$data['a_info']) : null;
        $this->is_traveller = isset($data['is_traveller']) ? (bool)$data['is_traveller'] : null;
        $this->s_member = isset($data['s_member']) ? (string)$data['s_member'] : null;
        $this->text_first_name = isset($data['text_first_name']) ? (string)$data['text_first_name'] : null;
        $this->text_fullname = isset($data['text_fullname']) ? (string)$data['text_fullname'] : null;
        $this->url_barcode = isset($data['url_barcode']) ? (string)$data['url_barcode'] : null;
    }
}
