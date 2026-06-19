<?php
namespace WlSdk\Wl\Profile\Alert;

use WlSdk\WlSdkClient;

/**
 * Retrieves login note data.
 */
class AlertEditApi
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
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login note key to edit or get info for.
Empty if new entry is being added.
     *
     * @var string|null
     */
    public ?string $k_login_note = null;

    /**
     * Key of a user to show information or post a note for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The list of location keys to flag client in.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Login note access type ID.
     *
     * @var int|null
     */
    public ?int $id_login_note_access = null;

    /**
     * Whether flagged user can book. Does not matter if `is_flag` is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * Whether to flag the user.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    /**
     * Whether flagged user can make purchases. Does not matter if `is_flag` is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_purchase = null;

    /**
     * Note text.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves login note data.
     *
     * Loads a single login note for editing, including its text, access type, flag settings,
     *  booking and purchase restrictions, and location flags. Used to populate the edit form before
     *  saving changes.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_login_note_data: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Profile/Alert/AlertEdit.json', $this->params(), 'GET');
    }

    /**
     * Creates new text note or updates the existing one.
     *
     * Creates or updates a login note on the client's profile, setting its text, access
     *  restrictions, booking and purchase flags, and the locations where the note applies. Used by
     *  staff to attach internal notes or warnings that appear on check-in and booking flows.
     *
     * @return array Parsed JSON response data.
     *   - string k_login_note: Login note key to edit or get info for.
Empty if new entry is being added.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Profile/Alert/AlertEdit.json', $this->params(), 'POST');
    }

    /**
     * Deletes existing note.
     *
     * Permanently removes the login note specified by `k_login_note` from the business, requiring
     *  backend access for the current user.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Profile/Alert/AlertEdit.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_login_note' => $this->k_login_note,
            'uid' => $this->uid,
            'a_location' => $this->a_location,
            'id_login_note_access' => $this->id_login_note_access,
            'is_book' => $this->is_book,
            'is_flag' => $this->is_flag,
            'is_purchase' => $this->is_purchase,
            'text_note' => $this->text_note,
            ],
            static fn($v) => $v !== null
        );
    }
}
