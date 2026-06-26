<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

class FolderMapPostRequest
{
    /**
     * Automation key.
     *
     * @var string|null
     */
    public ?string $k_automation = null;

    /**
     * Business key.
     * `null` to use the system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Folder key where the automation should be moved.
     * If `null`, the automation will be moved to the default folder.
     *
     * @var string|null
     */
    public ?string $k_folder_move = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_automation' => $this->k_automation,
            'k_business' => $this->k_business,
            'k_folder_move' => $this->k_folder_move,
            ],
            static fn ($v) => $v !== null
        );
    }
}
