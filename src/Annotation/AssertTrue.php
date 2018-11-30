<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * The annotated element must be true.
 *
 * @Annotation
 * @Target({ METHOD, FIELD, ANNOTATION_TYPE , PARAMETER})
 * @Constraint(validatedBy = {})
 */
interface AssertTrue
{
    /*

    public $message = "must be true.";
    public $groups = array();
    public $payload = array();

    */
}
