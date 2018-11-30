<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * The annotated element must be a number whose value must be higher or
 * equal to the specified minimum.
 *
 * @Annotation
 * @Target({ METHOD, FIELD, ANNOTATION_TYPE , PARAMETER})
 * @Constraint(validatedBy = {})
 */
interface Min
{
    /*

    public $message = "must be greater than or equal to {value}.";
    public $groups = array();
    public $payload = array();

    **
    * value the element must be higher or equal to
    *
    public $value;

    */
}
