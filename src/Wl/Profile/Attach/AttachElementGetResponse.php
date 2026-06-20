<?php

namespace WlSdk\Wl\Profile\Attach;

/**
 * Response from GET
 */
class AttachElementGetResponse
{
    /**
     * Date and time of the creation.
     *
     * @var string|null
     */
    public ?string $dtu_create = null;

    /**
     * Date and time of the last edit.
     *
     * @var string|null
     */
    public ?string $dtu_edit = null;

    /**
     * Flag for showing a delete button.
     *
     * @var string|null
     */
    public ?string $s_show_delete = null;

    /**
     * Attachment description.
     *
     * `null` for not update description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Attachment file name.
     *
     * `null` for not update file name.
     *
     * @var string|null
     */
    public ?string $text_filename = null;

    /**
     * Attachment file size.
     *
     * @var string|null
     */
    public ?string $text_filesize = null;

    /**
     * Attachment file type.
     *
     * @var string|null
     */
    public ?string $text_filetype = null;

    /**
     * URL to get attachment file.
     *
     * @var string|null
     */
    public ?string $url_file = null;

    /**
     * URL to get preview attachment data.
     *
     * `null` in case when preview not available.
     *
     * @var string|null
     */
    public ?string $url_preview = null;

    public function __construct(array $data)
    {
        $this->dtu_create = isset($data['dtu_create']) ? (string)$data['dtu_create'] : null;
        $this->dtu_edit = isset($data['dtu_edit']) ? (string)$data['dtu_edit'] : null;
        $this->s_show_delete = isset($data['s_show_delete']) ? (string)$data['s_show_delete'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_filename = isset($data['text_filename']) ? (string)$data['text_filename'] : null;
        $this->text_filesize = isset($data['text_filesize']) ? (string)$data['text_filesize'] : null;
        $this->text_filetype = isset($data['text_filetype']) ? (string)$data['text_filetype'] : null;
        $this->url_file = isset($data['url_file']) ? (string)$data['url_file'] : null;
        $this->url_preview = isset($data['url_preview']) ? (string)$data['url_preview'] : null;
    }
}
