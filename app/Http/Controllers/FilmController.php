<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index() {
        return response()->json(['ok' => true, 'data' => \App\Film::all()], 200);
    }

    public function store(Request $request) {
        $items =  json_decode($request->data);
        $flag = false;
        foreach($items as $item) {
            $film = new \App\Film([
                'title' => $item->title,
                'episode_id' => $item->episode_id,
                'opening_crawl' => $item->opening_crawl,
                'director' => $item->director, 
                'producer' => $item->producer, 
                'release_date' => $item->release_date, 
                'species' => json_encode($item->species),
                'starships' => json_encode($item->starships),
                'vehicles' => json_encode($item->vehicles), 
                'characters' => json_encode($item->characters), 
                'planets' => json_encode($item->planets), 
                'url' => $item->url,
                'created' => $item->created,
                'edited' => $item->edited
            ]);
            
            if ($film->save()) {
                $flag = true;
            }
        }

        return response()->json(['ok' => $flag]);
    }

    public function show(Request $request, $id) {
        $film = \App\Film::find($id);
        return response()->json(['ok' => true, 'film' => $film]);
    }
}
