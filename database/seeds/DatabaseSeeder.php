<?php

use Illuminate\Database\Seeder;

use App\Models\Aluno;
use App\Models\Professor;
Use App\Models\CadastroEstagio;

class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('AlunoTableSeeder');
        $this->call('ProfessorTableSeeder');
        $this->call('Cadastro_EstagioTableSeeder');
    }
}
class AlunoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('aluno')->delete();

        Aluno::create([
            'Matricula'=>'123456789',
            'Nome'=>'anairis',
            'Nivel'=>'1',
        ]);
    }
}
class ProfessorTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('professor')->delete();
        Professor::create([
            'CodProf'=> '1',
            'NomeProf' => 'maria',
        ]);
    }
}

class Cadastro_EstagioTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('cadastroestagio')->delete();
        CadastroEstagio::create([
            'Matricula' => '123456789',
            'Semestre' => '20122',
            'Email' => 'anairiscsantos@gmail.com',
            'ProfOrient' => '1',
            'ProfCoOrientador' =>'1',
            'DataHora'=>'2018-02-03 16:08:16',
            'matriculaAtiva'=> '1',
        ]);

    }
}


