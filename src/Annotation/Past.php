<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * The annotated element must be a date in the past.
 *
 * @Annotation
 * @Target({ METHOD, FIELD, ANNOTATION_TYPE, PARAMETER })
 * @Constraint(validatedBy = {})
 */
interface Past
{
    /*

    public $message = "must be in the past.";
    public $groups = array();
    public $payload = array();

    */
}
