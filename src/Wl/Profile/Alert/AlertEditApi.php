<?php
namespace WlSdk\Wl\Profile\Alert;

use WlSdk\WlSdkClient;

/**
 * Retrieves login note data.
 */
class AlertEditApi
{
    /**
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login note key to edit or get info for.
     * Empty if new entry is being added.
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
     * @return AlertEditApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AlertEditApiGetResponse
    {
        return new AlertEditApiGetResponse($this->client->request('/Wl/Profile/Alert/AlertEdit.json', $this->params(), 'GET'));
    }

    /**
     * Creates new text note or updates the existing one.
     *
     * Creates or updates a login note on the client's profile, setting its text, access
     *  restrictions, booking and purchase flags, and the locations where the note applies. Used by
     *  staff to attach internal notes or warnings that appear on check-in and booking flows.
     *
     * @return AlertEditApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): AlertEditApiPostResponse
    {
        return new AlertEditApiPostResponse($this->client->request('/Wl/Profile/Alert/AlertEdit.json', $this->params(), 'POST'));
    }

    /**
     * Deletes existing note.
     *
     * Permanently removes the login note specified by `k_login_note` from the business, requiring
     *  backend access for the current user.
     *
     * @return AlertEditApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): AlertEditApiDeleteResponse
    {
        return new AlertEditApiDeleteResponse($this->client->request('/Wl/Profile/Alert/AlertEdit.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
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
