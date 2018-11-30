<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * @Annotation
 * @Target({ METHOD, FIELD, ANNOTATION_TYPE, PARAMETER })
 * @Constraint(validatedBy = {})
 */
interface Digits
{
    /*

    public $message = "numeric value out of bounds (<{integer} digits>.<{fraction} digits> expected)";
    public $groups  = array();
    public $payload = array();

    **
    * maximum number of integral digits accepted for this number.
    *
    public $integer;

    **
    * maximum number of fractional digits accepted for this number.
    *
    public $fraction;

    */
}
