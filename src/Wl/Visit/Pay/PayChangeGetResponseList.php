<?php

namespace WlSdk\Wl\Visit\Pay;

class PayChangeGetResponseList
{
    /**
     * Promotion logo. Empty array for not paid option.
     *
     * @var PayChangeGetResponseListLogo|null
     */
    public ?PayChangeGetResponseListLogo $a_logo = null;

    /**
     * Whether current element selected in the list.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * `0` means 'Single buy', `-1` means 'Not paid'. Otherwise key with next structure:
     * `k_login_promotion:[k_login_promotion]` or `k_session_pass:[k_session_pass]`.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * Title of select option.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new PayChangeGetResponseListLogo((array)$data['a_logo']) : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
