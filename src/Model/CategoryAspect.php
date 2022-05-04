<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CategoryAspect extends AbstractModel
{
    /**
     * The details that are appropriate or necessary to accurately define the category.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\Category
     */
    public $category = null;

    /**
     * A list of aspect metadata that is used to describe the items in a particular
     * leaf category.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\Aspect[]
     */
    public $aspects = null;
}
