<?php

class baseDatos
{
     public function conection()
     {
         
        $conection = mysqli_connect(
            'localhost',
            'root',
            'cv23952018',
            'sanagustin'
        );

        return $conection;
     }
}
