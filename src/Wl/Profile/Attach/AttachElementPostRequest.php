<?php

namespace WlSdk\Wl\Profile\Attach;

class AttachElementPostRequest
{
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
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Uploaded file.
     *
     * @var string|null
     */
    public ?string $a_file = null;

    /**
     * `true` if the attachment is private; `false` otherwise.
     * `null` until initialized.
     *
     * @var bool|null
     */
    public ?bool $is_private = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'k_attach' => $this->k_attach,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_file' => $this->a_file,
            'is_private' => $this->is_private,
            'text_description' => $this->text_description,
            'text_filename' => $this->text_filename,
            ],
            static fn ($v) => $v !== null
        );
    }
}
