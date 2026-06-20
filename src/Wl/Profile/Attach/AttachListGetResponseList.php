<?php
namespace WlSdk\Wl\Profile\Attach;

class AttachListGetResponseList
{
    /**
     * Date and time of creation in UTC MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_create = null;

    /**
     * Date and time of the last edit in UTC MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_edit = null;

    /**
     * Image height in pixels. `null` if not an image or dimensions are unavailable.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Flag indicating whether to show the delete button. `'1'` to show, `'0'` to hide.
     * Only present in backend mode.
     *
     * @var int|null
     */
    public ?int $i_show_delete = null;

    /**
     * Image width in pixels. `null` if not an image or dimensions are unavailable.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Preview type identifier. One of {@link \WlSdk\Wl\Profile\Attach\AttachPreviewSid} constants.
     *
     * @var int|null
     */
    public ?int $id_preview = null;

    /**
     * `true` if the attachment is private (not visible to the client); `false` otherwise.
     * Only present in backend mode.
     *
     * @var bool|null
     */
    public ?bool $is_private = null;

    /**
     * Attachment key.
     *
     * @var string|null
     */
    public ?string $k_attach = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Quiz response key. `null` if the attachment is not from a quiz response.
     * 
     * Only present in backend mode.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    /**
     * Attachment description. `null` if no description. Only present in backend mode.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Attachment file name.
     *
     * @var string|null
     */
    public ?string $text_filename = null;

    /**
     * Human-readable file size (for example, "1.2 MB").
     *
     * @var string|null
     */
    public ?string $text_filesize = null;

    /**
     * File extension in lowercase (for example, "pdf", "jpg").
     *
     * @var string|null
     */
    public ?string $text_filetype = null;

    /**
     * Source description (for example, quiz title or "Uploaded by staff").
     * Only present in backend mode.
     *
     * @var string|null
     */
    public ?string $text_source = null;

    /**
     * Name of the user who uploaded the attachment. Empty string if unknown.
     *
     * @var string|null
     */
    public ?string $text_uploaded_by = null;

    /**
     * Formatted upload date in the business locale.
     *
     * @var string|null
     */
    public ?string $text_uploaded_date = null;

    /**
     * URL to download the attachment file.
     *
     * @var string|null
     */
    public ?string $url_file = null;

    /**
     * URL to a preview image (50x50). `null` if preview is not available for this file type.
     *
     * @var string|null
     */
    public ?string $url_preview = null;

    public function __construct(array $data)
    {
        $this->dtu_create = isset($data['dtu_create']) ? (string)$data['dtu_create'] : null;
        $this->dtu_edit = isset($data['dtu_edit']) ? (string)$data['dtu_edit'] : null;
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_show_delete = isset($data['i_show_delete']) ? (int)$data['i_show_delete'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->id_preview = isset($data['id_preview']) ? (int)$data['id_preview'] : null;
        $this->is_private = isset($data['is_private']) ? (bool)$data['is_private'] : null;
        $this->k_attach = isset($data['k_attach']) ? (string)$data['k_attach'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_quiz_response = isset($data['k_quiz_response']) ? (string)$data['k_quiz_response'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_filename = isset($data['text_filename']) ? (string)$data['text_filename'] : null;
        $this->text_filesize = isset($data['text_filesize']) ? (string)$data['text_filesize'] : null;
        $this->text_filetype = isset($data['text_filetype']) ? (string)$data['text_filetype'] : null;
        $this->text_source = isset($data['text_source']) ? (string)$data['text_source'] : null;
        $this->text_uploaded_by = isset($data['text_uploaded_by']) ? (string)$data['text_uploaded_by'] : null;
        $this->text_uploaded_date = isset($data['text_uploaded_date']) ? (string)$data['text_uploaded_date'] : null;
        $this->url_file = isset($data['url_file']) ? (string)$data['url_file'] : null;
        $this->url_preview = isset($data['url_preview']) ? (string)$data['url_preview'] : null;
    }
}
