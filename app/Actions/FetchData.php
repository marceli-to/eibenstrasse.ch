<?php
namespace App\Actions;
use Illuminate\Support\Facades\Storage;

class FetchData
{
  public function execute(): string
  {
    $api_uri = env('MELON_API_URI');
    return Storage::disk('public')->put('apartements.json', collect(json_decode($this->get($api_uri), true)));;
  }

  protected function get($uri): string
  {
    return file_get_contents($uri);
  }
}