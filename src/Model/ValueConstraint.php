<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains a list of the dependencies that identify when a particular
 * value is available for a given aspect of a given category. Each dependency
 * specifies the values of another aspect of the same category (the <i>control</i>
 * aspect), for which the given value of the given aspect can also be selected by
 * the seller. This container consists of constraint information for the
 * corresponding product aspect value.
 */
class ValueConstraint extends AbstractModel
{
    /**
     * The name of the control aspect on which the current aspect value depends.
     *
     * @var string
     */
    public $applicableForLocalizedAspectName = null;

    /**
     * Contains a list of the values of the control aspect on which this aspect's value
     * depends. When the control aspect has any of the specified values, the current
     * value of the current aspect will also be available.
     *
     * @var string[]
     */
    public $applicableForLocalizedAspectValues = null;
}
