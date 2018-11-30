<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * The annotated element must be false.
 * Supported types are <code>boolean</code> and <code>Boolean</code>
 *
 * @Annotation
 * @Target({ METHOD, FIELD, ANNOTATION_TYPE , PARAMETER})
 * @Constraint(validatedBy = {})
 */
interface NotBlank
{
    /*

    public $message = "may not be blank.";
    public $groups = array();
    public $payload = array();

    */
}

