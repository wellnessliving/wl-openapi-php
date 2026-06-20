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
 * 
 *   Use entity interface LoginSearchEntityInterface to extend search criteria
 * [SearchCriteriaAbstract](#/components/schemas/Wl.Search.Criteria.SearchCriteriaAbstract).
 * - 169 (`Wl\Search\SearchTestEntityNoInterface`): Search entity for testing without interface class.
 */
enum SearchEntityAbstract: int
{
    case Wl\Search\SearchTestEntity = 21;
    case Wl\Login\Search\LoginSearchEntity = 66;
    case Wl\Search\SearchTestEntityNoInterface = 169;
}
