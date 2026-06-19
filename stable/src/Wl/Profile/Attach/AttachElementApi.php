<?php
namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * Gets the data for the attachment editing form.
 */
class AttachElementApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

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
`null` until initialized.
     *
     * @var bool|null
     */
    public ?bool $is_private = null;

    /**
     * Attachment description.

`null` for not update description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Attachment file name.

`null` for not update file name.
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
     * @return array Parsed JSON response data.
     *   - string dtu_create: Date and time of the creation.
     *   - string dtu_edit: Date and time of the last edit.
     *   - string s_show_delete: Flag for showing a delete button.
     *   - string text_description: Attachment description.

`null` for not update description.
     *   - string text_filename: Attachment file name.

`null` for not update file name.
     *   - string text_filesize: Attachment file size.
     *   - string text_filetype: Attachment file type.
     *   - string url_file: URL to get attachment file.
     *   - string url_preview: URL to get preview attachment data.

`null` in case when preview not available.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Profile/Attach/AttachElement.json', $this->params(), 'GET');
    }

    /**
     * In case the attachment key is not specified, it adds a new attachment.
In case the attachment key is specified, edits the attachment.
     *
     * When `k_attach` is empty, uploads a new file to the client profile; when set, updates the
     *  attachment metadata, file content, or visibility flag depending on the provided fields.
     *
     * @return array Parsed JSON response data.
     *   - string k_attach: Attachment key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Profile/Attach/AttachElement.json', $this->params(), 'POST');
    }

    /**
     * Deletes the attachment.
     *
     * Permanently removes the specified attachment from the client profile and logs the deletion
     *  action in the business audit trail.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Profile/Attach/AttachElement.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
