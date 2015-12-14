<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getProducts() method
         *
         *    reference: https://www.makeable.com/api-docs/curl/#products-get-products
         */
        "getProducts" => array(
            "httpMethod" => "GET",
            "uri" => "products",
            "summary" => "Retrieve a list of all products that are currently set to active in your admin store settings",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "source" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Description of the source platform",
                    "default" => "api"
                ),
                "countryCode" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The Ship To Country. Must be a 2 letter country short-name code (ISO 3166)",
                    "default" => "FR",
                    "required" => true,
                ),
                "languageCode" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The Two Character language code",
                    "default" => "en",
                ),
                "currencyCode" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Three character currency code",
                    "default" => "EUR",
                ),
                "all" => array(
                    "type" => "boolean",
                    "location" => "query",
                    "description" => "Set this to TRUE if you want to receive all Products that we have made public",
                    "default" => false,
                ),
            )
        ),


        /**
         *    getProductVariants() method
         *
         *    reference: https://www.makeable.com/api-docs/curl/#products-product-variants
         */
        "getProductVariants" => array(
            "httpMethod" => "GET",
            "uri" => "ProductVariants",
            "summary" => "Get a list of all available product variations (SKUs), or if one passes in a specific product type id (productId), gets a list of available variations of a specific product",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "source" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Description of the source platform",
                    "default" => "api"
                ),
                "productID" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The ID of the Product you are interested in",
                    "required" => true,
                ),
                "countryCode" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The Ship To Country. Must be a 2 letter country short-name code (ISO 3166)",
                    "default" => "FR",
                    "required" => true,
                ),
                "languageCode" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The Two Character language code",
                    "default" => "en",
                ),
                "currencyCode" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Three character currency code",
                    "default" => "EUR",
                ),
                "all" => array(
                    "type" => "boolean",
                    "location" => "query",
                    "description" => "Set this to TRUE if you want to receive all Products that we have made public",
                    "default" => false,
                ),
            )
        ),

        /**
         *    getProductTemplates() method
         *
         *    reference: https://www.makeable.com/api-docs/curl/#products-product-templates
         */
        "getProductTemplates" => array(
            "httpMethod" => "GET",
            "uri" => "ProductVariants",
            "summary" => "Get a list of product templates for a specific product variant (product SKU)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "sku" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The Makeable SKU of the Product Variant that you would like to retrieve templates for",
                    "required" => true,
                ),
                "countryCode" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The Ship To Country. Must be a 2 letter country short-name code (ISO 3166)",
                    "default" => "FR",
                    "required" => true,
                ),
                "languageCode" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The Two Character language code",
                    "default" => "en",
                ),
            )
        ),

    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(

    ),
);
