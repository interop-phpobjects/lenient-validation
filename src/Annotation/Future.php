<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * The annotated element must be a date in the future.
 *
 * @Annotation
 * @Target({ METHOD, FIELD, ANNOTATION_TYPE, CONSTRUCTOR, PARAMETER })
 * @Constraint(validatedBy = {})
 */
interface Future
{
    /*

    public $message = "must be in the future.";
    public $groups = array();
    public $payload = array();

    */
}
