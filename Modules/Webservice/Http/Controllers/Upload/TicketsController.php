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

/**
 * @group Tickets
 *
 * Serviços para informações de vendas
 */
class TicketsController extends Controller {

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(){
        return [ 'adsda' => 'adadad' ];
    }

    /**
     * Busca de cupons por loja e data
     *
     * @bodyParam title string required The title of the post
     * @param \Request $request
     * @return array
     * @response {
     *  "id": 4,
     *  "name": "Jessica Jones",
     *  "roles": ["admin"]
     * }
     */
    public function getTicketStoreByDate(\Request $request){
        $aaa = [
                'adsda' => 'adadad'
               ];
        $input = Input::all();
        return (array)$input;
    }
}