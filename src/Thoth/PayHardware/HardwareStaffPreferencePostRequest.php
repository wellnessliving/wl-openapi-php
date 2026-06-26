<?php

namespace WlSdk\Thoth\PayHardware;

class HardwareStaffPreferencePostRequest
{
    /**
     * Terminal type. One of {@link \WlSdk\Thoth\PayProcessor\Terminal\TerminalTypeSid} constants.
     * `null` in case when not initialized yet or when `k_terminal` is set.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\Terminal\TerminalTypeSid
     */
    public ?int $id_type = null;

    /**
     * Key of business to save preferred terminal.
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location to save preferred terminal.
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Terminal key.
     * `null` in case when not initialized yet or when `id_type` is set.
     *
     * @var string|null
     */
    public ?string $k_terminal = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_type' => $this->id_type,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_terminal' => $this->k_terminal,
            ],
            static fn ($v) => $v !== null
        );
    }
}
