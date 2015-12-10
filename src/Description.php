<?php namespace PrintIo;

use GuzzleHttp\Command\Guzzle\Description as GuzzleDescription;

class Description extends GuzzleDescription
{
     /**
     *
     * @param  string  $url
     * @return void
     */
     public function setBaseUrl($url)
     {
          $this->baseUrl = $url;
     }
}