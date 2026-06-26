<?php

namespace WlSdk\Wl\Book;

class BookUserPostRequest
{
    /**
     * List of clients to save.
     * Each value is a primary key in PassportLoginSql table.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
