<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 20/05/19
 * Time: 15:40
 */

namespace Modules\Webservice\Http\Controllers\Upload;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;

class TicketsController extends Controller {

    public function index(){
        return [ 'adsda' => 'adadad' ];
    }

    public function getTicket(\Request $request){
        $aaa = [
                'adsda' => 'adadad'
               ];
        $input = Input::all();
        return (array)$input;
    }
}