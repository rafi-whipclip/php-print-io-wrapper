<?php
return array(

	/*
    |--------------------------------------------------------------------------
    | Service Name
    |--------------------------------------------------------------------------
    |
    | Name of the API service these description configs are for.
    |
    */

    "name" => "Print.io",

    /*
    |--------------------------------------------------------------------------
    | Service Description
    |--------------------------------------------------------------------------
    |
    | Description of the API service.
    |
    */

    "description" => "A Print.io API Wrapper built using Guzzle",

    /*
    |--------------------------------------------------------------------------
    | Service Configurations
    |--------------------------------------------------------------------------
    |
    | Configuration files of specfic service descriptions to load.
    |
    */

    "services" => array(
        "preconfiguredproducts",
        "products",
    ),

    /*
    |--------------------------------------------------------------------------
    | Default models
    |--------------------------------------------------------------------------
    |
    | Default response models for typical usage of responses
    |
    */

    "models" => array(
        "defaultJsonResponse" => array(
            "type" => "object",
            "additionalProperties" => array(
                "location" => "json",
            )
        )
    )
);
