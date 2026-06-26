<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

class FolderSortPostRequest
{
    /**
     * Sorted keys of folders.
     *
     * @var string[]|null
     */
    public ?array $a_folder = null;

    /**
     * Business key.
     * `null` to use the system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_folder' => $this->a_folder,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
