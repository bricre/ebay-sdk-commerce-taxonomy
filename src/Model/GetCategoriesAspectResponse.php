<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel;

class GetCategoriesAspectResponse extends AbstractModel
{
    /**
     * The unique identifier of the eBay category tree being requested.
     *
     * @var string
     */
    public $categoryTreeId = null;

    /**
     * The version of the category tree that is returned in the <b>categoryTreeId</b>
     * field.
     *
     * @var string
     */
    public $categoryTreeVersion = null;

    /**
     * An array of aspects that are appropriate or necessary for accurately describing
     * items in a particular leaf category.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\CategoryAspect[]
     */
    public $categoryAspects = null;
}
