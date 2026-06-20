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
enum RsFamilyRelationSid: int
{
    case CARE_PARTICIPANT = 12;
    case CARE_RECEIVER = 9;
    case CAREGIVER = 8;
    case CASE_LOAD = 16;
    case CASE_MANAGER = 15;
    case CHILD = 5;
    case DEPENDENT = 10;
    case FRIEND = 2;
    case GUARDIAN = 7;
    case OTHER = 6;
    case PARENT = 3;
    case SIBLING = 4;
    case SPOUSE = 1;
    case STUDENT = 14;
    case TEACHER = 13;
    case THERAPIST = 11;
}
