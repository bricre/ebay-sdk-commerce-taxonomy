<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains information about a particular subtree of a specified eBay
 * category tree. A category subtree consists of a non-root node of the category
 * tree, and all of its descendants down to the leaf nodes.
 */
class CategorySubtree extends AbstractModel
{
    /**
     * Contains details of all nodes of the category subtree hierarchy below a
     * specified node. This is a recursive structure.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\CategoryTreeNode
     */
    public $categorySubtreeNode = null;

    /**
     * The unique identifier of the eBay category tree to which this subtree belongs.
     *
     * @var string
     */
    public $categoryTreeId = null;

    /**
     * The version of the category tree identified by <b>categoryTreeId</b>. It's a
     * good idea to cache this value for comparison so you can determine if this
     * category tree has been modified in subsequent calls.
     *
     * @var string
     */
    public $categoryTreeVersion = null;
}
