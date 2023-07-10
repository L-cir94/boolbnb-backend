<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        
        $data = $request->all();

        //valida richiesta
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'surname' => 'nullable',
            'message' => 'nullable',
            'apartment_id' => 'nullable'        ]);
        // controlla che la validazione vada a buon fine
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }
        //salva i dati nel db
        $newMessage = new Message();
        $newMessage->fill($data);
        $newMessage->save();

        //return success response
        return response()->json([
            'success' => true
        ]);
    }
}
