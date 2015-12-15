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
         *    getPrintReadyProducts() method
         *
         *    reference: https://www.makeable.com/api-docs/curl/#print-ready-products
         */
        "getPrintReadyProducts" => array(
            "httpMethod" => "GET",
            "uri" => "preconfiguredproducts",
            "summary" => "Retrieve a list of Print Ready Products",
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
                    "default" => "FR"
                ),
            )
        ),

        /**
         *    createPrintReadyProduct() method
         *
         *    reference: https://www.makeable.com/api-docs/curl/#print-ready-products
         */

        "createPrintReadyProduct" => array(
            "httpMethod" => "POST",
            "uri" => "preconfiguredproducts",
            "summary" => "Insert a print ready (pre-configured) product into your recipe",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "SKU" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Set a SKU that uniquely identifies the Print Ready product. This must be unique for each Print Ready Product",
                    "required" => true,
                ),
                "Name" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Set the name of the Print Ready Product",
                    "required" => true,
                ),
                "Description" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Set the description for the Print Ready Product",
                    "required" => true,
                ),
                "Items" => array(
                    "location" => "json",
                    "parameters" => array(
                        "ProductId" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The ID of the product this item is a variant of",
                            "required" => true,
                        ),
                        "ProductVariantSKU" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The SKU of the product this item is a Print Ready version of",
                            "required" => true,
                        ),
                        "Preconfigurations" => array(
                            "location" => "json",
                            "parameters" => array(
                                "Url" => array(
                                    "type" => "string",
                                    "location" => "json",
                                    "description" => "The url of the image in the referenced space/layer. This image should be formatted to the correct Print Ready Image size",
                                    "required" => true,
                                ),
                            ),
                            "required" => true,
                        ),
                    ),
                    "required" => true,
                )
            ),
        ),

        /**
         *    updatePrintReadyProduct() method
         *
         *    reference: https://www.makeable.com/api-docs/curl/#print-ready-products
         */

        "updatePrintReadyProduct" => array(
            "httpMethod" => "PUT",
            "uri" => "preconfiguredproducts",
            "summary" => "Update a print ready (pre-configured) product in your recipe",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "SKU" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Set a SKU that uniquely identifies the Print Ready product. This must be unique for each Print Ready Product",
                    "required" => true,
                ),
                "Name" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Set the name of the Print Ready Product",
                    "required" => true,
                ),
                "Description" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Set the description for the Print Ready Product",
                    "required" => true,
                ),
                "Items" => array(
                    "location" => "json",
                    "parameters" => array(
                        "ProductId" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The ID of the product this item is a variant of",
                            "required" => true,
                        ),
                        "ProductVariantSKU" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The SKU of the product this item is a Print Ready version of",
                            "required" => true,
                        ),
                        "Preconfigurations" => array(
                            "location" => "json",
                            "parameters" => array(
                                "Url" => array(
                                    "type" => "string",
                                    "location" => "json",
                                    "description" => "The url of the image in the referenced space/layer. This image should be formatted to the correct Print Ready Image size",
                                    "required" => true,
                                ),
                            ),
                            "required" => true,
                        ),
                    ),
                    "required" => true,
                )
            ),
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
