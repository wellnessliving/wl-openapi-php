<?php

namespace WlSdk\Wl\Profile\Waiver;

class WaiverGetResponseWaiver
{
    /**
     * Agreement date in business timezone.
     *
     * @var string|null
     */
    public ?string $dt_agree_local = null;

    /**
     * Agreement date in UTC.
     *
     * @var string|null
     */
    public ?string $dt_agree_utc = null;

    /**
     * Contract text.
     *
     * @var string|null
     */
    public ?string $html_contract = null;

    /**
     * IP address from which agreement was done.
     *
     * @var string|null
     */
    public ?string $ip_agree = null;

    /**
     * `true` if the waiver is signed, `false` if the agreement has no date of the signature.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * `true` if this signature no longer counts: the waiver of the business was edited or replaced after it, or a
     * relation of the user was removed while the waiver had been signed by a relative. `false` if the signature
     * is actual.
     *
     * @var bool|null
     */
    public ?bool $is_old = null;

    /**
     * Full name of the user who signed the waiver, as plain text and not escaped. It is the name of the user to
     * get
     * information for, if he signed the waiver himself.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Full name of the user to get information for, as plain text and not escaped, if a relative signed the waiver
     * on his behalf. Empty if the user signed the waiver himself.
     *
     * @var string|null
     */
    public ?string $text_sign_for = null;

    /**
     * Key of the user who signed the waiver for this user, for example the parent of a minor.
     * `null` if no signer is recorded: the user signed the waiver themselves.
     *
     * @var string|null
     */
    public ?string $uid_sign = null;

    /**
     * URL to agreement signature.
     *
     * @var string|null
     */
    public ?string $url_signature = null;

    public function __construct(array $data)
    {
        $this->dt_agree_local = isset($data['dt_agree_local']) ? (string)$data['dt_agree_local'] : null;
        $this->dt_agree_utc = isset($data['dt_agree_utc']) ? (string)$data['dt_agree_utc'] : null;
        $this->html_contract = isset($data['html_contract']) ? (string)$data['html_contract'] : null;
        $this->ip_agree = isset($data['ip_agree']) ? (string)$data['ip_agree'] : null;
        $this->is_agree = isset($data['is_agree']) ? (bool)$data['is_agree'] : null;
        $this->is_old = isset($data['is_old']) ? (bool)$data['is_old'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->text_sign_for = isset($data['text_sign_for']) ? (string)$data['text_sign_for'] : null;
        $this->uid_sign = isset($data['uid_sign']) ? (string)$data['uid_sign'] : null;
        $this->url_signature = isset($data['url_signature']) ? (string)$data['url_signature'] : null;
    }
}
