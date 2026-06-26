<?php

namespace WlSdk\Core\Prg\Branch;

class BranchSwitchPostRequest
{
    /**
     * List directories for switch. One element contains:
     *
     * @var array[]|null
     */
    public ?array $a_switch = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_switch' => $this->a_switch,
            ],
            static fn ($v) => $v !== null
        );
    }
}
