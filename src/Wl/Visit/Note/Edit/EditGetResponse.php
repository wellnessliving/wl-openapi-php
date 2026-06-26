<?php

namespace WlSdk\Wl\Visit\Note\Edit;

/**
 * Response from GET
 */
class EditGetResponse
{
    /**
     * Content additional field of visit note. Format is same as `a_visit_note` field.
     *
     * @var array|null
     */
    public ?array $a_data_note_additional = null;

    /**
     * Contains general information.
     *
     * @var array|null
     */
    public ?array $a_info = null;

    /**
     * List of notes:
     *
     * @var EditGetResponseVisitNote[]|null
     */
    public ?array $a_visit_note = null;

    /**
     * Can the current user edit the note.
     *
     * @var bool|null
     */
    public ?bool $can_edit = null;

    /**
     * Note type, one of {@link \WlSdk\Wl\Visit\Note\Sid\NoteSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\Note\Sid\NoteSid
     */
    public ?int $id_note = null;

    /**
     * `true` - if visit notes are new, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_new = null;

    public function __construct(array $data)
    {
        $this->a_data_note_additional = isset($data['a_data_note_additional']) ? (array)$data['a_data_note_additional'] : null;
        $this->a_info = isset($data['a_info']) ? (array)$data['a_info'] : null;
        $this->a_visit_note = isset($data['a_visit_note']) ? array_map(static fn ($item) => new EditGetResponseVisitNote((array)$item), (array)$data['a_visit_note']) : null;
        $this->can_edit = isset($data['can_edit']) ? (bool)$data['can_edit'] : null;
        $this->id_note = isset($data['id_note']) ? (int)$data['id_note'] : null;
        $this->is_new = isset($data['is_new']) ? (bool)$data['is_new'] : null;
    }
}
