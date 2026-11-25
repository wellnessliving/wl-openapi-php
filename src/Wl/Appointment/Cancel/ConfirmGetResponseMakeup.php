<?php

namespace WlSdk\Wl\Appointment\Cancel;

class ConfirmGetResponseMakeup
{
    /**
     * `true` if the current user may choose whether to issue the pass: the user has the privilege "Override
     * make-up
     * passes" or is an administrator. `false` if `is_makeup_issue` accepts only the default of the policy: to
     * issue
     * the pass for an early cancel when `is_limit` and `is_maximum` are `false`, not to issue it otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_override = null;

    /**
     * The number of the active make-up passes that the policy issued to the client.
     *
     * @var int|null
     */
    public ?int $i_active = null;

    /**
     * `true` if the client has reached the purchase limit of the pass: no pass can be issued.
     *
     * @var bool|null
     */
    public ?bool $is_limit = null;

    /**
     * `true` if the client already holds the maximum number of active make-up passes of the policy: by default no
     * pass is issued then.
     *
     * @var bool|null
     */
    public ?bool $is_maximum = null;

    /**
     * The sentence of the expiry of the pass, for example "It expires on Nov 5, 2026.". An empty string if the end
     * is not known before the pass is issued.
     *
     * @var string|null
     */
    public ?string $text_expire = null;

    /**
     * The sentence of the client at the maximum, for example "Jane already has 2 active make-up passes, which is
     * the maximum.". An empty string if the client is not at the maximum.
     *
     * @var string|null
     */
    public ?string $text_maximum = null;

    /**
     * The first name of the client who receives the pass.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * The title of the Purchase Option that is issued as the pass.
     *
     * @var string|null
     */
    public ?string $text_promotion = null;

    public function __construct(array $data)
    {
        $this->can_override = isset($data['can_override']) ? (bool)$data['can_override'] : null;
        $this->i_active = isset($data['i_active']) ? (int)$data['i_active'] : null;
        $this->is_limit = isset($data['is_limit']) ? (bool)$data['is_limit'] : null;
        $this->is_maximum = isset($data['is_maximum']) ? (bool)$data['is_maximum'] : null;
        $this->text_expire = isset($data['text_expire']) ? (string)$data['text_expire'] : null;
        $this->text_maximum = isset($data['text_maximum']) ? (string)$data['text_maximum'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_promotion = isset($data['text_promotion']) ? (string)$data['text_promotion'] : null;
    }
}
