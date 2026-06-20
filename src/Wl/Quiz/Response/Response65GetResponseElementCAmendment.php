<?php
namespace WlSdk\Wl\Quiz\Response;

class Response65GetResponseElementCAmendment
{
    /**
     * Information about amend.
     *
     * @var Response65GetResponseElementCAmendmentChange|null
     */
    public ?Response65GetResponseElementCAmendmentChange $a_change = null;

    /**
     * Date/time when amend made.
     *
     * @var string|null
     */
    public ?string $dtu_action = null;

    /**
     * Name of the amend actor.
     *
     * @var string|null
     */
    public ?string $text_actor = null;

    /**
     * Date/time when amend made in textual view.
     *
     * @var string|null
     */
    public ?string $text_datetime = null;

    /**
     * UID of the amend actor.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    public function __construct(array $data)
    {
        $this->a_change = isset($data['a_change']) ? new Response65GetResponseElementCAmendmentChange((array)$data['a_change']) : null;
        $this->dtu_action = isset($data['dtu_action']) ? (string)$data['dtu_action'] : null;
        $this->text_actor = isset($data['text_actor']) ? (string)$data['text_actor'] : null;
        $this->text_datetime = isset($data['text_datetime']) ? (string)$data['text_datetime'] : null;
        $this->uid_actor = isset($data['uid_actor']) ? (string)$data['uid_actor'] : null;
    }
}
