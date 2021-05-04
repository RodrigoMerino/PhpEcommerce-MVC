<?php


    /** 
     * @comment: toma el string y lo convierte al patrón que designamos
     * @Date: 2021-04-16 16:50:16 
     * @param: $value 
     * @return:string  
     */
     function formattedString(String $value)
    {
        // remover todo lo que no sea : guion bajo,letras,numeros, espacios
        $value =  preg_replace('![^' . preg_quote('_') . '\pL\pN\s]+!u', '', mb_strtolower($value));

        // reeemplazar guion bajo con -

        $value =  preg_replace('![' . preg_quote('_') . '\s]+!u', '-', mb_strtolower($value));

        //reemplazar espacios con
        return trim($value, '-');
    }

