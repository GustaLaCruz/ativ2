<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Estoque extends Seeder
{
    public function run()
    {
    $name = ['DF-1','DF-2','DF-3','DF-4','DF-5','DF-41'];
    $aut = ['CHINA','CHINA', 'CHINA', 'CHINA', 'CHINA', 'CHINA'];
    $edit = ['SS-2','CSS-1','CSS-2','CSS-3','CSS-5','CSS-X-10'];
    $valor = [2000000000,275000000,327000000,346000000,921000000,];
        for($x = 0; $x < 6; $x++){
        $data = [
            'Nome' => $name[$x],
            'Autor'    => $aut[$x],
            'Edit'    => $edit[$x],
            'valor' => $valor[$x],
        ];

        // Using Query Builder
        $this->db->table('estoque')->insert($data);
         }
    }
}