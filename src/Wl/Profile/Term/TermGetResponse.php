<?php
namespace WlSdk\Wl\Profile\Term;

/**
 * Response from GET
 */
class TermGetResponse
{
    /**
     * The date/time of the waiver confirmation.
     * `null` if waiver is not confirmed.
     *
     * @var string|null
     */
    public ?string $dt_agree = null;

    /**
     * The text of the online waiver.
     *
     * @var string|null
     */
    public ?string $html_contract = null;

    /**
     * Age of minor which documents can be signed by parent or legal guardian.
     *
     * @var int|null
     */
    public ?int $i_minor_age = null;

    /**
     * The IP address from which the confirmation was carried out.
     * `null` if waiver is not confirmed.
     *
     * @var string|null
     */
    public ?string $ip_agree = null;

    /**
     * Flag of successful saving agreement.
     * `true` if agreement was sign up successful `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * The user's name.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * The URL to the image with the client's signature.
     * `false` if waiver is not confirmed.
     *
     * @var string|bool|null
     */
    public $url_signature = null;

    public function __construct(array $data)
    {
        $this->dt_agree = isset($data['dt_agree']) ? (string)$data['dt_agree'] : null;
        $this->html_contract = isset($data['html_contract']) ? (string)$data['html_contract'] : null;
        $this->i_minor_age = isset($data['i_minor_age']) ? (int)$data['i_minor_age'] : null;
        $this->ip_agree = isset($data['ip_agree']) ? (string)$data['ip_agree'] : null;
        $this->is_agree = isset($data['is_agree']) ? (bool)$data['is_agree'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->url_signature = $data['url_signature'] ?? null;
    }
}
