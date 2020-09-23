<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Chamado;

class ChamadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chamado = [
            'atribuido_para' =>  5385361,
            'complexidade'   => 'alta',
            'user_id'        =>  1,
            'categoria_id'   =>  1,
            'predio'         => 'Administração',
            'sala'           => 'Sala 02',
            'patrimonio'     => '008.047977',
            'chamado'        => 'Computador não liga',
          
        ];

        Chamado::create($chamado);
        Chamado::factory(10)->create();
     
    }
}
