<?php
namespace App\Actions;
use App\Actions\FetchData;
use Illuminate\Support\Facades\Storage;

class GetData
{
  public function execute(): \Illuminate\Support\Collection
  { 
    // if there is no file or the existing file is older than 60 minutes, fetch new data
    if (!Storage::disk('public')->exists('apartements.json') || Storage::disk('public')->lastModified('apartements.json') < now()->subMinutes(60)->timestamp)
    {
      (new FetchData)->execute();
    }
    $data = Storage::disk('public')->get('apartements.json');
    $data = collect(json_decode($data, true));
    return $data; 
  }
}