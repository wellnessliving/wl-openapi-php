<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

class AutomationFolderDeleteRequest
{
    /**
     * Business key where the folder is managed.
     * `null` to use the system business of the current user.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Folder key.
     *
     * @var string|null
     */
    public ?string $k_folder = null;

    /**
     * Key of the folder where to move automations after deleting the current folder.
     * If not passed, automations are moved to the default folder.
     *
     * @var string|null
     */
    public ?string $k_folder_move = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_folder' => $this->k_folder,
            'k_folder_move' => $this->k_folder_move,
            ],
            static fn ($v) => $v !== null
        );
    }
}
