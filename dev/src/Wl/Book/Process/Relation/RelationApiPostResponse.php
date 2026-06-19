<?php
namespace WlSdk\Wl\Book\Process\Relation;

/**
 * Response from POST
 */
class RelationApiPostResponse
{
    /**
     * The newly added relative.
     *
     * @var string|null
     */
    public ?string $uid_create = null;

    public function __construct(array $data)
    {
        $this->uid_create = isset($data['uid_create']) ? (string)$data['uid_create'] : null;
    }
}
