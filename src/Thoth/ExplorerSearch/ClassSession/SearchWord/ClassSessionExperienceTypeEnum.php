<?php
namespace WlSdk\Thoth\ExplorerSearch\ClassSession\SearchWord;

/**
 * Experience types for class sessions to differentiate virtual and in-person sessions.
 * 
 * Last ID: 2
 * 
 * Values:
 * - 1 (`IN_PERSON`): In-person session at a physical location.
 * - 2 (`VIRTUAL`): Virtual session conducted through a virtual provider.
 */
class ClassSessionExperienceTypeEnum
{
    /** In-person session at a physical location. */
    const IN_PERSON = 1;
    /** Virtual session conducted through a virtual provider. */
    const VIRTUAL = 2;
}
