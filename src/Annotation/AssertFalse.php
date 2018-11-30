<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * The annotated element must be false.
 *
 * @Annotation
 * @Target({ METHOD, FIELD, ANNOTATION_TYPE , PARAMETER})
 * @Constraint(validatedBy = {})
 */
interface AssertFalse
{
    /*

    public $message = "must be false.";
    public $groups = array();
    public $payload = array();

    */
}
