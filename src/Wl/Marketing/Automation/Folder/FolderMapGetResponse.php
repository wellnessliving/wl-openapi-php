<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

/**
 * Response from GET
 */
class FolderMapGetResponse
{
    /**
     * List of folders where automation can be moved.
     * Each element has the following structure:
     *
     * @var FolderMapGetResponseFolder[]|null
     */
    public ?array $a_folder = null;

    /**
     * Folder key where the automation is currently located.
     * `null` if the automation is in the default folder.
     *
     * @var string|null
     */
    public ?string $k_folder_origin = null;

    /**
     * Title of the automation.
     *
     * @var string|null
     */
    public ?string $text_automation = null;

    /**
     * Title of the folder in which the automation is located.
     *
     * @var string|null
     */
    public ?string $text_folder_origin = null;

    public function __construct(array $data)
    {
        $this->a_folder = isset($data['a_folder']) ? array_map(static fn ($item) => new FolderMapGetResponseFolder((array)$item), (array)$data['a_folder']) : null;
        $this->k_folder_origin = isset($data['k_folder_origin']) ? (string)$data['k_folder_origin'] : null;
        $this->text_automation = isset($data['text_automation']) ? (string)$data['text_automation'] : null;
        $this->text_folder_origin = isset($data['text_folder_origin']) ? (string)$data['text_folder_origin'] : null;
    }
}
