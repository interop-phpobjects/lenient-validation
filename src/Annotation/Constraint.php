<?php
namespace Interop\Lenient\Validation\Annotation;

/**
 * @Annotation
 * @Target({ ANNOTATION_TYPE })
 */
interface Constraint
{
    /*
     * array of ConstraintValidator classes implementing the constraint
     * public Class<? extends ConstraintValidator<?, ?>>[] validatedBy();
     *
    public $validatedBy;

    */
}
