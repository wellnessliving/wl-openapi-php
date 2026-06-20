<?php

namespace WlSdk;

/**
 * Relation type between two relatives.
 *
 * Last used ID: 16.
 *
 * Values:
 * - 12 (`CARE_PARTICIPANT`): Care participant.
 * - 9 (`CARE_RECEIVER`): Care recipient.
 * - 8 (`CAREGIVER`): Care provider.
 * - 16 (`CASE_LOAD`): Case load.
 * - 15 (`CASE_MANAGER`): Case Manager.
 * - 5 (`CHILD`): Child of the parent.
 * - 10 (`DEPENDENT`): Dependent.
 * - 2 (`FRIEND`): Friend.
 * - 7 (`GUARDIAN`): Guardian.
 * - 6 (`OTHER`): Not specified custom relationship.
 * - 3 (`PARENT`): Parent of the child.
 * - 4 (`SIBLING`): Sibling. A brother or sister.
 * - 1 (`SPOUSE`): Spouse. A husband or wife.
 * - 14 (`STUDENT`): Student.
 * - 13 (`TEACHER`): Teacher.
 * - 11 (`THERAPIST`): Therapist.
 */
class RsFamilyRelationSid
{
    /** Care participant. */
    public const CARE_PARTICIPANT = 12;

    /** Care recipient. */
    public const CARE_RECEIVER = 9;

    /** Care provider. */
    public const CAREGIVER = 8;

    /** Case load. */
    public const CASE_LOAD = 16;

    /** Case Manager. */
    public const CASE_MANAGER = 15;

    /** Child of the parent. */
    public const CHILD = 5;

    /** Dependent. */
    public const DEPENDENT = 10;

    /** Friend. */
    public const FRIEND = 2;

    /** Guardian. */
    public const GUARDIAN = 7;

    /** Not specified custom relationship. */
    public const OTHER = 6;

    /** Parent of the child. */
    public const PARENT = 3;

    /** Sibling. A brother or sister. */
    public const SIBLING = 4;

    /** Spouse. A husband or wife. */
    public const SPOUSE = 1;

    /** Student. */
    public const STUDENT = 14;

    /** Teacher. */
    public const TEACHER = 13;

    /** Therapist. */
    public const THERAPIST = 11;
}
