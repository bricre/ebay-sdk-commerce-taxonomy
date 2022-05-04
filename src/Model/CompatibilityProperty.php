<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the <strong>compatibilityProperties</strong> array that is
 * returned in the <strong>getCompatibilityProperties</strong> call. The
 * <strong>compatibilityProperties</strong> container consists of an array of all
 * compatible vehicle properties applicable to the specified eBay marketplace and
 * eBay category ID.
 */
class CompatibilityProperty extends AbstractModel
{
    /**
     * This is the actual name of the compatible vehicle property as it is known on the
     * specified eBay marketplace and in the eBay category. This is the string value
     * that should be used in the <strong>compatibility_property</strong> and
     * <strong>filter</strong> query parameters of a
     * <strong>getCompatibilityPropertyValues</strong> request URI. <br/><br/> Typical
     * vehicle properties are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will
     * vary based on the eBay marketplace and the eBay category.
     *
     * @var string
     */
    public $name = null;

    /**
     * This is the localized name of the compatible vehicle property. The language that
     * is used will depend on the user making the call, or based on the language
     * specified if the <strong>Content-Language</strong> HTTP header is
     * used.<br/><br/>In some instances, the string value in this field may be the same
     * as the string in the corresponding <strong>name</strong> field.
     *
     * @var string
     */
    public $localizedName = null;
}
