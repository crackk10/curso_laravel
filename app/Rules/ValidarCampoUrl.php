<?php

namespace App\Rules;

use App\Models\Admin\Menu;
use Illuminate\Contracts\Validation\Rule;

class ValidarCampoUrl implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */


     //$attribute seria el campo(nombre campo) y $value seria el valor de ese campo(lo que se escribio en él)
    public function passes($attribute, $value)
    {
        /* esta regla verificara si el url ha sido guardado como #, de no ser así,
        verificara si la url no ha sido ya creada, si ha sido creada generara el error,
        las url guardadas con # son submenus y por eso todas podran tener el # */
        if($value !='#'){
            //se realiza una consulta y se guarda en la variable $menu
            $menu = Menu::where($attribute, $value)->get();

           /* si la variable(despues de haber sido rellenada por la consulta)
            esta vacia retorna un true, si contiene algo retorna un false */
            return $menu->isEmpty();
        }
        //si la validacion pasa(si no entra al if) genera un true
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    //si la validacion retorno false enviará este mensaje
    public function message()
    {
        return 'Esta URL ya fue asignada';
    }
}
