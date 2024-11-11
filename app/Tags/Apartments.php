<?php
namespace App\Tags;
use App\Actions\GetData;
use Statamic\Tags\Tags;

class Apartments extends Tags
{
  public function index()
  {
  }

  public function get()
  {
    // get data from api or storage
    $data = (new GetData)->execute();
    if ($this->params['building'])
    {
      $data = $data->where('building.building_title', $this->params['building'])->sortBy('title')->sortBy('floor_num');
    }
    // reset array keys
    $data = $data->values();
    return $data;
  }
}
