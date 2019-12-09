<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function showGreetings(Request $request)
    {
        // retrieve the language from the GET parameter or default to English
        $language = $request->get('language', 'english');

        $greetings = $this->greetings($language);
        $data = ['greetings' => $greetings];

        // return the view template at `resources/views/welcome.blade.php` with the $greetings array.
        return view('welcome', $data);
    }
    private function greetings($language)
    {
        switch ($language) {
            case "english":
            default:
                return [
                    "Hello", "Good Morning", "Good Afternoon", "Good Evening", "Thank you"
                ];
            case "german":
                return ["Hallo", "Guten Morgen", "Guten Nachmittag", "Guten Abend", "Danke"];
            case "idoma":
                return ["Abole", "Uma ònnê", "Uma òchi", "Uma enò", "Ainya",];
            case "yoruba":
                return ["E Pẹlẹ", "E kaaro", "E Kaasan", "E Kaale", "O ṣeun"];
            case "french":
                return [
                    "Bonjour", "Bonjour", "Bonne après-midi",
                    "Bonsoir",
                    "Merci"];
        }
    }
}
