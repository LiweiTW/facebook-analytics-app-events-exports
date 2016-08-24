<?php
namespace App\Services;

use Storage;

class AppBaseService
{
    // public function __construct(
    // ) {
    // }
    CONST BASE_PATH = "tokens/";

    public function addAppToken(string $appToken)
    {
      $appId = explode("|", $appToken)[0];
      Storage::put(self::BASE_PATH . $appId, $appToken);
    }

    public function getAppList()
    {
      $result = [];
      $tokenPaths = Storage::allFiles(self::BASE_PATH);
      foreach ($tokenPaths as $key => $path) {
        $token = Storage::get($path);
        $appId = explode("|", $appToken)[0];
      }
      return $result;
    }

}
