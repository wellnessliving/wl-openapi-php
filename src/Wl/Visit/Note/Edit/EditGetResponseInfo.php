<?php

namespace WlSdk\Wl\Visit\Note\Edit;

class EditGetResponseInfo
{
    /**
     * Local date and time the note was created. Empty string if the note was never created.
     *
     * @var string|null
     */
    public ?string $dtl_create = null;

    /**
     * Local date and time the note was last edited. Empty string if the note was never edited.
     *
     * @var string|null
     */
    public ?string $dtl_edit = null;

    /**
     * Visit note key, primary key in . `0` if the note does not exist yet.
     *
     * @var string|null
     */
    public ?string $k_visit_note = null;

    /**
     * Key of the visit that has a previous note. `0` if a previous note does not exist.
     *
     * @var string|null
     */
    public ?string $k_visit_previous = null;

    /**
     * Full name of the client the visit belongs to.
     *
     * @var string|null
     */
    public ?string $text_client_name = null;

    /**
     * Name of the staff member who created the note.
     *
     * @var string|null
     */
    public ?string $text_create = null;

    /**
     * Name of the staff member who last edited the note.
     *
     * @var string|null
     */
    public ?string $text_edit = null;

    /**
     * Location title.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Service, class, event, or asset title.
     *
     * @var string|null
     */
    public ?string $text_service = null;

    /**
     * Start date of the visit.
     *
     * @var string|null
     */
    public ?string $text_service_date = null;

    /**
     * Start and end time of the visit.
     *
     * @var string|null
     */
    public ?string $text_service_time = null;

    /**
     * Staff full name.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * URL to print the visit note.
     *
     * @var string|null
     */
    public ?string $url_print = null;

    /**
     * URL to the profile of the user who created the note. Empty string if the note does not exist.
     *
     * @var string|null
     */
    public ?string $url_profile_create = null;

    /**
     * URL to the profile of the user who last edited the note. Empty string if the note was never edited.
     *
     * @var string|null
     */
    public ?string $url_profile_edit = null;

    public function __construct(array $data)
    {
        $this->dtl_create = isset($data['dtl_create']) ? (string)$data['dtl_create'] : null;
        $this->dtl_edit = isset($data['dtl_edit']) ? (string)$data['dtl_edit'] : null;
        $this->k_visit_note = isset($data['k_visit_note']) ? (string)$data['k_visit_note'] : null;
        $this->k_visit_previous = isset($data['k_visit_previous']) ? (string)$data['k_visit_previous'] : null;
        $this->text_client_name = isset($data['text_client_name']) ? (string)$data['text_client_name'] : null;
        $this->text_create = isset($data['text_create']) ? (string)$data['text_create'] : null;
        $this->text_edit = isset($data['text_edit']) ? (string)$data['text_edit'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_service = isset($data['text_service']) ? (string)$data['text_service'] : null;
        $this->text_service_date = isset($data['text_service_date']) ? (string)$data['text_service_date'] : null;
        $this->text_service_time = isset($data['text_service_time']) ? (string)$data['text_service_time'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->url_print = isset($data['url_print']) ? (string)$data['url_print'] : null;
        $this->url_profile_create = isset($data['url_profile_create']) ? (string)$data['url_profile_create'] : null;
        $this->url_profile_edit = isset($data['url_profile_edit']) ? (string)$data['url_profile_edit'] : null;
    }
}
