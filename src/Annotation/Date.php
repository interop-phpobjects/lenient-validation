<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * @Annotation
 * @Target({ METHOD, FIELD, ANNOTATION_TYPE ,PARAMETER})
 * @Constraint(validatedBy = {})
 */
interface Date
{
    /*

    public $message = "must be a valid date.";
    public $groups = array();
    public $payload = array();

    **
     * value the element must be lower or equal to
     *
    public $format;

    */
}

