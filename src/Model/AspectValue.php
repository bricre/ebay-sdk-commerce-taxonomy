<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains a valid value for an aspect, along with any constraints on
 * the occurrence of that value.
 */
class AspectValue extends AbstractModel
{
    /**
     * The localized value of this aspect.<br /><br />          <span
     * class="tablenote"> <strong>Note:</strong> This value is always localized for the
     * specified marketplace. </span>.
     *
     * @var string
     */
    public $localizedValue = null;

    /**
     * <i>Not returned if</i> the value of the <b>localizedValue</b> field can always
     * be selected for this aspect of the specified category.<br /><br />Contains a
     * list of the dependencies that identify when the value of the
     * <b>localizedValue</b> field is available for the current aspect. Each dependency
     * specifies the values of another aspect of the same category (a <i>control</i>
     * aspect), for which the current value of the current aspect can also be selected
     * by the seller. <br /><br />          <b>Example:</b> A shirt is available in
     * three sizes and three colors, but only the Small and Medium sizes come in Green.
     * Thus for the Color aspect, the value Green is constrained by its dependency on
     * Size (the control aspect). Only when the Size aspect value is Small or Medium,
     * can the Color aspect value of Green be selected by the seller.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\ValueConstraint[]
     */
    public $valueConstraints = null;
}
