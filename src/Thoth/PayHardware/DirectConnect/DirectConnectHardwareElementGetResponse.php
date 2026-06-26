<?php

namespace WlSdk\Thoth\PayHardware\DirectConnect;

/**
 * Response from GET
 */
class DirectConnectHardwareElementGetResponse
{
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
     * IP address of terminal.
     *
     * Maybe an empty string as it is not set for all terminals.
     *
     * @var string|null
     */
    public ?string $ip_terminal = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Terminal id which is added in the paragon.
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

    /**
     * Location name.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    public function __construct(array $data)
    {
        $this->id_model = isset($data['id_model']) ? (int)$data['id_model'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->ip_terminal = isset($data['ip_terminal']) ? (string)$data['ip_terminal'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->s_terminal_id = isset($data['s_terminal_id']) ? (string)$data['s_terminal_id'] : null;
        $this->text_label = isset($data['text_label']) ? (string)$data['text_label'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
    }
}
