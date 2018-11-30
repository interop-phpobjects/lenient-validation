<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * @Annotation
 * @Target({ METHOD, FIELD, ANNOTATION_TYPE , PARAMETER})
 * @Constraint(validatedBy = {})
 */
interface Email
{
    /*

    public $message = "not a well-formed email address.";
    public $groups  = array();
    public $payload = array();

    **
     * value the element must be email address format
     *
    public $value;

    */
}
