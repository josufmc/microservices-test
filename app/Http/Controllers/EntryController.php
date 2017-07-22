<?php

namespace App\Http\Controllers;

class EntryController extends Controller
{
    private $entries;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->entries = array(
            ['id' => 1, 'title' => 'Title 1', 'content' => ' Lyft bitters succulents sartorial kinfolk gentrify.'],
            ['id' => 2, 'title' => 'Title 2', 'content' => ' Lyft bitters succulents sartorial kinfolk gentrify.'],
            ['id' => 3, 'title' => 'Title 3', 'content' => ' Lyft bitters succulents sartorial kinfolk gentrify.'],
            ['id' => 4, 'title' => 'Title 4', 'content' => ' Lyft bitters succulents sartorial kinfolk gentrify.'],
            ['id' => 5, 'title' => 'Title 5', 'content' => ' Lyft bitters succulents sartorial kinfolk gentrify.']
        );
    }

    /**
     * Returns list of entries
     * @return array
     */
    public function list(){
        return response()->json($this->entries);
    }
}
