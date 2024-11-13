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
    if (isset($this->params['number']))
    {
      $data = $data->where('building.house_number', $this->params['number'])->sortBy('title')->sortBy('floor_num');
    }
    else
    {
      $data = $data->sortBy('reference_number');
    }
    // reset array keys
    $data = $data->values();
    return $data;
  }
}
