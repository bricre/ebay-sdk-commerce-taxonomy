<?php

namespace Ebay\Commerce\Taxonomy\Api;

use Ebay\Commerce\Taxonomy\Model\AspectMetadata as AspectMetadata;
use Ebay\Commerce\Taxonomy\Model\BaseCategoryTree as BaseCategoryTree;
use Ebay\Commerce\Taxonomy\Model\CategorySubtree as CategorySubtree;
use Ebay\Commerce\Taxonomy\Model\CategorySuggestionResponse as CategorySuggestionResponse;
use Ebay\Commerce\Taxonomy\Model\CategoryTree as CategoryTreeModel;
use Ebay\Commerce\Taxonomy\Model\GetCategoriesAspectResponse as GetCategoriesAspectResponse;
use Ebay\Commerce\Taxonomy\Model\GetCompatibilityMetadataResponse as GetCompatibilityMetadataResponse;
use Ebay\Commerce\Taxonomy\Model\GetCompatibilityPropertyValuesResponse as GetCompatibilityPropertyValuesResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class CategoryTree extends AbstractAPI
{
    /**
     * This call returns a complete list of aspects for all of the leaf categories that
     * belong to an eBay marketplace. The eBay marketplace is specified through the
     * <b>category_tree_id</b> URI parameter.<br /><br /><span class="tablenote">
     * <strong>Note:</strong> A successful call returns a payload as a gzipped JSON
     * file sent as a binary file using the content-type:application/octet-stream in
     * the response. This file may be large (over 100 MB, compressed). Extract the JSON
     * file from the compressed file with a utility that handles .gz or .gzip. The open
     * source <a href="https://github.com/eBay/taxonomy-sdk" target="_blank">Taxonomy
     * SDK</a> can be used to compare the aspect metadata that is returned in this
     * response. The <b>Taxonomy SDK</b> uses this method to surface changes (new,
     * modified, and removed entities) between an updated version of a bulk downloaded
     * file relative to a previous version.</span>.
     *
     * @param string $category_tree_id the unique identifier of the eBay category tree
     *                                 being requested
     *
     * @return GetCategoriesAspectResponse
     */
    public function fetchItemAspects(string $category_tree_id): GetCategoriesAspectResponse
    {
        return $this->client->request('fetchItemAspects', 'GET', "category_tree/{$category_tree_id}/fetch_item_aspects",
            [
            ]
        );
    }

    /**
     * A given eBay marketplace might use multiple category trees, but one of those
     * trees is considered to be the default for that marketplace. This call retrieves
     * a reference to the default category tree associated with the specified eBay
     * marketplace ID. The response includes only the tree's unique identifier and
     * version, which you can use to retrieve more details about the tree, its
     * structure, and its individual category nodes.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	The ID of the eBay marketplace for which the category
     *                       tree ID is being requested. For a list of supported marketplace IDs, see <a
     *                       href="/api-docs/commerce/taxonomy/static/supportedmarketplaces.html">Marketplaces
     *                       with Default Category Trees</a>.
     *
     * @return BaseCategoryTree
     */
    public function getDefaultId(array $queries = []): BaseCategoryTree
    {
        return $this->client->request('getDefaultCategoryTreeId', 'GET', 'get_default_category_tree_id',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This call retrieves the complete category tree that is identified by the
     * <b>category_tree_id</b> parameter. The value of <b>category_tree_id</b> was
     * returned by the <b>getDefaultCategoryTreeId</b> call in the
     * <b>categoryTreeId</b> field. The response contains details of all nodes of the
     * specified eBay category tree, as well as the eBay marketplaces that use this
     * category tree.      <br /><br />            <span class="tablenote">
     * <strong>Note:</strong> This call can return a very large payload, so you are
     * strongly advised to submit the request with the following HTTP header:       <br
     * /><br />     <code>&nbsp;&nbsp;Accept-Encoding: application/gzip</code>
     * <br /><br />             With this header (in addition to the required headers
     * described under <a
     * href="/api-docs/static/rest-request-components.html#HTTP">HTTP Request
     * Headers</a>), the call returns the response with <b>gzip</b> compression.</span>.
     *
     * @param string $category_tree_id the unique identifier of the eBay category tree
     *                                 being requested
     *
     * @return CategoryTreeModel
     */
    public function get(string $category_tree_id): CategoryTreeModel
    {
        return $this->client->request('getCategoryTree', 'GET', "category_tree/{$category_tree_id}",
            [
            ]
        );
    }

    /**
     * This call retrieves the details of all nodes of the category tree hierarchy (the
     * subtree) below a specified category of a category tree. You identify the tree
     * using the <b>category_tree_id</b> parameter, which was returned by the
     * <b>getDefaultCategoryTreeId</b> call in the <b>categoryTreeId</b> field.<br
     * /><br /><span class="tablenote"> <strong>Note:</strong> This call can return a
     * very large payload, so you are strongly advised to submit the request with the
     * following HTTP header:       <br /><br /><code>&nbsp;&nbsp;Accept-Encoding:
     * application/gzip</code>       <br /><br />With this header (in addition to the
     * required headers described under <a
     * href="/api-docs/static/rest-request-components.html#HTTP">HTTP Request
     * Headers</a>), the call returns the response with <b>gzip</b> compression.
     * </span>.
     *
     * @param string $category_tree_id the unique identifier of the eBay category tree
     *                                 from which a category subtree is being requested
     * @param array  $queries          options:
     *                                 'category_id'	string	The unique identifier of the category at the top of the
     *                                 subtree being requested. <br /><br />    <span class="tablenote">
     *                                 <strong>Note:</strong> If the <b>category_id</b> submitted identifies the root
     *                                 node of the tree, this call returns an error. To retrieve the complete tree, use
     *                                 this value with the <b>getCategoryTree</b> call.                   <br /><br />
     *                                 If the <b>category_id</b> submitted identifies a leaf node of the tree, the
     *                                 call response will contain information about only that leaf node, which is a
     *                                 valid subtree.   <!-- <br /><br /> This call also returns an error if
     *                                 <b>category_id</b> identifies a deprecated category. This can occur if you
     *                                 routinely cache your category trees. Use the <b>Get Deprecated Categories and
     *                                 Mapping</b> call to determine which current category should be used in place of
     *                                 the deprecated category, and use the <b>getCategoryTree</b> call to update your
     *                                 cached copy of the tree. --> </span>
     *
     * @return CategorySubtree
     */
    public function getCategorySubtree(string $category_tree_id, array $queries = []): CategorySubtree
    {
        return $this->client->request('getCategorySubtree', 'GET', "category_tree/{$category_tree_id}/get_category_subtree",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This call returns an array of category tree leaf nodes in the specified category
     * tree that are considered by eBay to most closely correspond to the query string
     * <b>q</b>. Returned with each suggested node is a localized name for that
     * category (based on the <b>Accept-Language</b> header specified for the call),
     * and details about each of the category's ancestor nodes, extending from its
     * immediate parent up to the root of the category tree.<br /><br /><span
     * class="tablenote"> <strong>Note:</strong> This call can return a large payload,
     * so you are advised to submit the request with the following HTTP header:<br
     * /><br /><code>&nbsp;&nbsp;Accept-Encoding: application/gzip</code><br /><br />
     *            With this header (in addition to the required headers described under
     * <a href="/api-docs/static/rest-request-components.html#HTTP">HTTP Request
     * Headers</a>), the call returns the response with <b>gzip</b> compression.
     * </span><br /><br />You identify the tree using the <b>category_tree_id</b>
     * parameter, which was returned by the <b>getDefaultCategoryTreeId</b> call in the
     * <b>categoryTreeId</b> field.<br /><br /><span class="tablenote"> <strong><span
     * style="color:red">Important:</span></strong> This call is not supported in the
     * Sandbox environment. It will return a response payload in which the
     * <b>categoryName</b> fields contain random or boilerplate text regardless of the
     * query submitted. </span>.
     *
     * @param string $category_tree_id the unique identifier of the eBay category tree
     *                                 for which suggested nodes are being requested
     * @param array  $queries          options:
     *                                 'q'	string	A quoted string that describes or characterizes the item being
     *                                 offered for sale. The string format is free form, and can contain any
     *                                 combination of phrases or keywords. eBay will parse the string and return
     *                                 suggested categories for the item.
     *
     * @return CategorySuggestionResponse
     */
    public function getCategorySuggestions(string $category_tree_id, array $queries = []): CategorySuggestionResponse
    {
        return $this->client->request('getCategorySuggestions', 'GET', "category_tree/{$category_tree_id}/get_category_suggestions",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This call returns a list of <i>aspects</i> that are appropriate or necessary for
     * accurately describing items in the specified leaf category. Each aspect
     * identifies an item attribute (for example, color) for which the seller will be
     * required or encouraged to provide a value (or variation values) when offering an
     * item in that category on eBay.<br /><br />For each aspect,
     * <b>getItemAspectsForCategory</b> provides complete metadata, including: <ul>
     * <li>The aspect's data type, format, and entry mode</li> <li>Whether the aspect
     * is required in listings</li> <li>Whether the aspect can be used for item
     * variations</li> <li>Whether the aspect accepts multiple values for an item</li>
     * <li>Allowed values for the aspect</li> </ul> Use this information to construct
     * an interface through which sellers can enter or select the appropriate values
     * for their items or item variations. Once you collect those values, include them
     * as product aspects when creating inventory items using the Inventory API.
     *
     * @param string $category_tree_id the unique identifier of the eBay category tree
     *                                 from which the specified category's aspects are being requested
     * @param array  $queries          options:
     *                                 'category_id'	string	The unique identifier of the leaf category for which
     *                                 aspects are being requested.          <br /><br />                 <span
     *                                 class="tablenote"> <strong>Note:</strong> If the <b>category_id</b> submitted
     *                                 does not identify a leaf node of the tree, this call returns an error. </span>
     *
     * @return AspectMetadata
     */
    public function getItemAspectsForCategory(string $category_tree_id, array $queries = []): AspectMetadata
    {
        return $this->client->request('getItemAspectsForCategory', 'GET', "category_tree/{$category_tree_id}/get_item_aspects_for_category",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This call retrieves the compatible vehicle aspects that are used to define a
     * motor vehicle that is compatible with a motor vehicle part or accessory. The
     * values that are retrieved here might include motor vehicle aspects such as
     * 'Make', 'Model', 'Year', 'Engine', and 'Trim', and each of these aspects are
     * localized for the eBay marketplace.<br/><br/> The
     * <strong>category_tree_id</strong> value is passed in as a path parameter, and
     * this value identifies the eBay category tree. The <strong>category_id</strong>
     * value is passed in as a query parameter, as this parameter is also required. The
     * specified category must be a category that supports parts
     * compatibility.<br/><br/> At this time, this operation only supports parts and
     * accessories listings for cars, trucks, and motorcycles (not boats,  power
     * sports, or any other vehicle types). Only the following eBay marketplaces
     * support parts compatibility:<ul><li>eBay US (Motors and non-Motors
     * categories)</li><li>eBay Canada (Motors and non-Motors categories)</li><li>eBay
     * UK</li><li>eBay Germany</li><li>eBay Australia</li><li>eBay France</li><li>eBay
     * Italy</li><li>eBay Spain</li></ul>.
     *
     * @param string $category_tree_id This is the unique identifier of category tree.
     *                                 The following is the list of <strong>category_tree_id</strong> values and the
     *                                 eBay marketplaces that they represent. One of these ID values must be passed in
     *                                 as a path parameter, and the <strong>category_id</strong> value, that is passed
     *                                 in as query parameter, must be a valid eBay category on that eBay marketplace
     *                                 that supports parts compatibility for cars, trucks, or
     *                                 motorcyles.<br/><br/><ul><li>eBay US: 0</li><li>eBay Motors US: 100</li><li>eBay
     *                                 Canada: 2</li><li>eBay UK: 3</li><li>eBay Germany: 77</li><li>eBay Australia:
     *                                 15</li><li>eBay France: 71</li><li>eBay Italy: 101</li><li>eBay Spain:
     *                                 186</li></ul>
     * @param array  $queries          options:
     *                                 'category_id'	string	The unique identifier of an eBay category. This eBay
     *                                 category must be a valid eBay category on the specified eBay marketplace, and
     *                                 the category must support parts compatibility for cars, trucks, or motorcyles.
     *                                 The <strong>getAutomotivePartsCompatibilityPolicies</strong> method of the
     *                                 Selling Metadata API can be used to retrieve all eBay categories for an eBay
     *                                 marketplace that supports parts compatibility cars, trucks, or motorcyles. The
     *                                 <strong>getAutomotivePartsCompatibilityPolicies</strong> method can also be used
     *                                 to see if one or more specific eBay categories support parts compatibility.
     *
     * @return GetCompatibilityMetadataResponse
     */
    public function getCompatibilityProperties(string $category_tree_id, array $queries = []): GetCompatibilityMetadataResponse
    {
        return $this->client->request('getCompatibilityProperties', 'GET', "category_tree/{$category_tree_id}/get_compatibility_properties",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This call retrieves applicable compatible vehicle property values based on the
     * specified eBay marketplace, specified eBay category, and filters used in the
     * request. Compatible vehicle properties are returned in the
     * <strong>compatibilityProperties.name</strong> field of a
     * <strong>getCompatibilityProperties</strong> response. <br/><br/> One compatible
     * vehicle property applicable to the specified eBay marketplace and eBay category
     * is specified through the required <strong>compatibility_property</strong>
     * filter. Then, the user has the option of further restricting the compatible
     * vehicle property values that are returned in the response by specifying one or
     * more compatible vehicle property name/value pairs through the
     * <strong>filter</strong> query parameter.<br/><br/> See the documentation in
     * <strong>URI parameters</strong> section for more information on using the
     * <strong>compatibility_property</strong> and <strong>filter</strong> query
     * parameters together to customize the data that is retrieved.
     *
     * @param string $category_tree_id This is the unique identifier of the category
     *                                 tree. The following is the list of <strong>category_tree_id</strong> values and
     *                                 the eBay marketplaces that they represent. One of these ID values must be passed
     *                                 in as a path parameter, and the <strong>category_id</strong> value, that is
     *                                 passed in as query parameter, must be a valid eBay category on that eBay
     *                                 marketplace that supports parts compatibility for cars, trucks, or
     *                                 motorcyles.<br/><br/><ul><li>eBay US: 0</li><li>eBay Motors US: 100</li><li>eBay
     *                                 Canada: 2</li><li>eBay UK: 3</li><li>eBay Germany: 77</li><li>eBay Australia:
     *                                 15</li><li>eBay France: 71</li><li>eBay Italy: 101</li><li>eBay Spain:
     *                                 186</li></ul>
     * @param array  $queries          options:
     *                                 'compatibility_property'	string	One compatible vehicle property applicable to
     *                                 the specified eBay marketplace and eBay category is specified in this required
     *                                 filter. Compatible vehicle properties are returned in the
     *                                 <strong>compatibilityProperties.name</strong> field of a
     *                                 <strong>getCompatibilityProperties</strong> response. <br/><br/> For example, if
     *                                 you wanted to retrieve all vehicle trims for a 2018 Toyota Camry, you would set
     *                                 this filter as follows: <code>compatibility_property=Trim</code>; and then
     *                                 include the following three name/value filters through one
     *                                 <strong>filter</strong> parameter:
     *                                 <code>filter=Year:2018,Make:Toyota,Model:Camry</code>. So, putting this all
     *                                 together, your URI would look something like this:<br/><br/><pre><code>GET
     *                                 https://api.ebay.com/commerce/<br/>taxonomy/v1/category_tree/100/<br/>get_compatibility_property_values?<br/><strong>category_id</strong>=6016&<strong>compatibility_property</strong>=Trim<br/>&<strong>filter</strong>=filter=Year:2018,Make:Toyota,Model:Camry</code></pre>
     *                                 'category_id'	string	The unique identifier of an eBay category. This eBay
     *                                 category must be a valid eBay category on the specified eBay marketplace, and
     *                                 the category must support parts compatibility for cars, trucks, or motorcyles.
     *                                 The <strong>getAutomotivePartsCompatibilityPolicies</strong> method of the
     *                                 Selling Metadata API can be used to retrieve all eBay categories for an eBay
     *                                 marketplace that supports parts compatibility cars, trucks, or motorcyles. The
     *                                 <strong>getAutomotivePartsCompatibilityPolicies</strong> method can also be used
     *                                 to see if one or more specific eBay categories support parts compatibility.
     *                                 'filter'	string	One or more compatible vehicle property name/value pairs are
     *                                 passed in through this query parameter. The compatible vehicle property name and
     *                                 corresponding value are delimited with a colon (:), such as
     *                                 <code>filter=Year:2018</code>, and multiple compatible vehicle property
     *                                 name/value pairs are delimited with a comma (,). <br/><br/> For example, if you
     *                                 wanted to retrieve all vehicle trims for a 2018 Toyota Camry, you would set the
     *                                 <strong>compatibility_property</strong> filter as follows:
     *                                 <code>compatibility_property=Trim</code>; and then include the following three
     *                                 name/value filters through one <strong>filter</strong> parameter:
     *                                 <code>filter=Year:2018,Make:Toyota,Model:Camry</code>. So, putting this all
     *                                 together, your URI would look something like this:<br/><br/><pre><code>GET
     *                                 https://api.ebay.com/commerce/<br/>taxonomy/v1/category_tree/100/<br/>get_compatibility_property_values?<br/><strong>category_id</strong>=6016&<strong>compatibility_property</strong>=Trim<br/>&<strong>filter</strong>=filter=Year:2018,Make:Toyota,Model:Camry</code></pre>
     *                                 For implementation help, refer to eBay API documentation at
     *                                 https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ConstraintFilter
     *
     * @return GetCompatibilityPropertyValuesResponse
     */
    public function getCompatibilityPropertyValues(string $category_tree_id, array $queries = []): GetCompatibilityPropertyValuesResponse
    {
        return $this->client->request('getCompatibilityPropertyValues', 'GET', "category_tree/{$category_tree_id}/get_compatibility_property_values",
            [
                'query' => $queries,
            ]
        );
    }
}
