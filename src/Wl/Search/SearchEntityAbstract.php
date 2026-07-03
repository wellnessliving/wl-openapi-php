<?php

namespace WlSdk\Wl\Search;

/**
 * Base class for search entity.
 *
 * Values:
 * - 21 (`Wl\Search\SearchTestEntity`): Search entity for an example and testing.
 *
 *   `#[\AllowDynamicProperties]` This class can be stored in the database as a serialized object and contain fields
 * that
 *    are no longer present in the current implementation.
 * - 66 (`Wl\Login\Search\LoginSearchEntity`): Client search entity.
 * - 169 (`Wl\Search\SearchTestEntityNoInterface`): Search entity for testing without interface class.
 */
class SearchEntityAbstract
{
    /** Search entity for an example and testing. */
    public const SearchTestEntity = 21;

    /** Client search entity. */
    public const LoginSearchEntity = 66;

    /** Search entity for testing without interface class. */
    public const SearchTestEntityNoInterface = 169;
}
