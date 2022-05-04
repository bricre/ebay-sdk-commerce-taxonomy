<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains an array of suggested category tree nodes that are considered
 * by eBay to most closely correspond to the keywords provided in a query string,
 * from a specified category tree.
 */
class CategorySuggestionResponse extends AbstractModel
{
    /**
     * Contains details about one or more suggested categories that correspond to the
     * provided keywords. The array of suggested categories is sorted in order of
     * eBay's confidence of the relevance of each category (the first category is the
     * most relevant).<br /><br /><span class="tablenote"> <strong><span
     * style="color:red">Important:</span></strong> This call is not supported in the
     * Sandbox environment. It will return a response payload in which the
     * <b>categoryName</b> fields contain random or boilerplate text regardless of the
     * query submitted. </span>.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\CategorySuggestion[]
     */
    public $categorySuggestions = null;

    /**
     * The unique identifier of the eBay category tree from which suggestions are
     * returned.
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
