<?php

namespace WlSdk\Thoth\PayHardware\Nuvei;

class NuveiHardwareElementPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Terminal key.
     *
     * `null` in case when create new terminal.
     *
     * @var string|null
     */
    public ?string $k_terminal = null;

    /**
     * Hardware model ID.
     *
     * @var int|null
     */
    public ?int $id_model = null;

    /**
     * Status ID.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\Terminal\TerminalStatusSid
     */
    public ?int $id_status = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Authorization Key.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $s_auth_key = null;

    /**
     * Register id, received from Nuvei on frontend.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $s_register_id = null;

    /**
     * Terminal id, received from Nuvei on frontend.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $s_terminal_id = null;

    /**
     * Label of the terminal.
     *
     * @var string|null
     */
    public ?string $text_label = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_terminal' => $this->k_terminal,
            'id_model' => $this->id_model,
            'id_status' => $this->id_status,
            'k_location' => $this->k_location,
            's_auth_key' => $this->s_auth_key,
            's_register_id' => $this->s_register_id,
            's_terminal_id' => $this->s_terminal_id,
            'text_label' => $this->text_label,
            ],
            static fn ($v) => $v !== null
        );
    }
}
