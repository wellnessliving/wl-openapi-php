<?php

namespace WlSdk\Wl\Skin\Application\Upgrade;

class ApplicationUpgradePostRequest
{
    /**
     * The type of update to be performed.
     *
     * @var int|null
     * @see \WlSdk\Wl\Skin\Application\Upgrade\AppUpdateTypeEnum
     */
    public ?int $id_version = null;

    /**
     * The business that must be upgraded.
     *
     * @var string|null
     */
    public ?string $s_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_version' => $this->id_version,
            's_business' => $this->s_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
