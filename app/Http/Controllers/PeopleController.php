<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function index() {
        return response()->json(['ok' => true, 'data' => \App\People::all()], 200);
    }
    public function store(Request $request) {
        $items =  json_decode($request->data);
        $flag = false;
        foreach($items as $item) {
            $people = new \App\People([
                'name' => $item->name,
                'birth_year' => $item->birth_year,
                'eye_color' => $item->eye_color,
                'gender' => $item->gender,
                'mass' => $item->mass,
                'hair_color' => $item->hair_color,
                'height' => $item->height,
                'skin_color' => $item->skin_color,
                'homeworld' => $item->homeworld,
                'films' => json_encode($item->films),
                'species' => json_encode($item->species),
                'starships' => json_encode($item->starships),
                'vehicles' => json_encode($item->vehicles),
                'url' => $item->url,
                'created' => $item->created,
                'edited' => $item->edited,
            ]);
            
            if ($people->save()) {
                $flag = true;
            }
        }

        return response()->json(['ok' => $flag]);
    }

    public function show(Request $request, $id) {
        $people = \App\People::find($id);
        return response()->json(['ok' => true, 'people' => $people]);
    }
}
