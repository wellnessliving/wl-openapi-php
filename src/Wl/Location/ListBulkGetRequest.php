<?php
namespace WlSdk\Wl\Location;

class ListBulkGetRequest
{
    /**
     * The ID of the directory if locations should be filtered by enabling directory integration.
     * 
     * `0` if a directory filter isn't required.
     *
     * @var int|null
     */
    public ?int $id_directory = null;

    /**
     * A list of businesses. Business primary keys are serialized with JSON.
     * 
     * Empty string if you need all locations in the system.
     *
     * @var string|null
     */
    public ?string $s_business = null;

    /**
     * A list of locations. Location primary keys are serialized with JSON.
     *
     * @var string|null
     */
    public ?string $s_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_directory' => $this->id_directory,
            's_business' => $this->s_business,
            's_location' => $this->s_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
