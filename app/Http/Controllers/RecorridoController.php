<?php
/** 
 * @file
 * --------------------------------------------------------------------------
 * |Controlador del recorrido
 * --------------------------------------------------------------------------
 * |Description: Devuelve los metodos que nesecita la vista recorrido 
 * |
 * |
 * |
 * |
 *
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * @class
 * --------------------------------------------------------------------------
 * Description:Clase recorrido virtual
 * 
 * 
 * 
 */
class RecorridoController extends Controller
{
    /** 
     * @function
     * ----------------------------------------------------------------------
     * Description: Devuelve a la vista recorrido virtual en views 
     * 
    */
    public function index()
    {
        return view('recorridoVirtual');
    }
}
