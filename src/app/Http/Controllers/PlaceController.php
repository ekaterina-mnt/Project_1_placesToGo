<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    //Список мест, куда я хочу пойти
    public function want()
    {
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $places = Place::where('user_id', $user_id)
                ->where('type', 'want')
                ->get();

            return view('places.want')->with('places', $places);
        }
        return view('places.want');
    }


    //Список мест, где я уже был(а)
    public function was()
    {
        $user_id = Auth::user()->id;
        $places = Place::where('user_id', $user_id)
            ->where('type', 'was')
            ->get();

        return view('places.was')->with('places', $places)
        
        ;
    }

    //Добавить новое место
    public function add()
    {
        return view('places.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()) {

            $requestData = $request->validate([
                'name' => 'required',
                'price' => '',
                'date' => '',
                'link' => 'required|starts_with:https://, http://',
                'comment' => '',
                'type' => '',
            ]);

            $type = $requestData['type'];
            $requestData['user_id'] = Auth::user()->id;

            // Создание места 
            Place::create($requestData);

            return redirect("/places/$type")->with('success', 'Вы успешно добавили новое место!');
        } else {
            return view('place.want');
        }
    }


    // Переместить в "уже была"
    public function move($id)
    {
        Place::where('id', $id)->update(['type' => 'was']);

        return redirect("/places/want")->with('success', 'Место было успешно перемещено!');
        // return redirect()->action([PlaceController::class, 'was'], ['id' => Auth::user()->id]);
    }


    // Переместить в "мои места(хочу пойти)"
    public function return($id)
    {
        Place::where('id', $id)->update(['type' => 'want']);

        return redirect("/places/was")->with('success', 'Место было успешно перемещено!');
        // return redirect()->action([PlaceController::class, 'want'], ['id' => Auth::user()->id]);
    }

    // Удалить
    public function delete($id)
    {
        $type = Place::where('id', $id)->first()->value('type');
        Place::where('id', $id)->where('type', $type)->delete();
        return redirect("/places/$type")->with('success', 'Место было удалено успешно!');
    }
}
