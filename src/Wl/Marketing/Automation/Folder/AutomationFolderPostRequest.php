<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

class AutomationFolderPostRequest
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
     * Title of the folder.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_folder' => $this->k_folder,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
