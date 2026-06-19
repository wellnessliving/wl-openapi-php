<?php
namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * Gets the data for the attachment editing form.
 */
class AttachElementApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the data for the attachment editing form.
     *
     * Returns attachment metadata including filename, description, filesize, file type, creation
     *  and edit timestamps, download URL, preview URL, and a flag indicating whether the current
     *  user has permission to delete the attachment.
     *
     * @return AttachElementApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AttachElementApiGetResponse
    {
        return new AttachElementApiGetResponse($this->client->request('/Wl/Profile/Attach/AttachElement.json', $this->params(), 'GET'));
    }

    /**
     * In case the attachment key is not specified, it adds a new attachment.
In case the attachment key is specified, edits the attachment.
     *
     * When `k_attach` is empty, uploads a new file to the client profile; when set, updates the
     *  attachment metadata, file content, or visibility flag depending on the provided fields.
     *
     * @return AttachElementApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): AttachElementApiPostResponse
    {
        return new AttachElementApiPostResponse($this->client->request('/Wl/Profile/Attach/AttachElement.json', $this->params(), 'POST'));
    }

    /**
     * Deletes the attachment.
     *
     * Permanently removes the specified attachment from the client profile and logs the deletion
     *  action in the business audit trail.
     *
     * @return AttachElementApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): AttachElementApiDeleteResponse
    {
        return new AttachElementApiDeleteResponse($this->client->request('/Wl/Profile/Attach/AttachElement.json', $this->params(), 'DELETE'));
    }

    private function params(): array
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
            static fn($v) => $v !== null
        );
    }
}
