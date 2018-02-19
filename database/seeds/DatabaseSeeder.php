<?php

use Illuminate\Database\Seeder;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Turma;
use App\Models\Area;
use App\Models\Disciplina;

class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('AlunoTableSeeder');
        $this->call('ProfessorTableSeeder');
        $this->call('AreaTableSeeder');
        $this->call('DisciplinaTableSeeder');
        $this->call('TurmaTableSeeder');
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
        Professor::create([
            'CodProf'=> '2',
            'NomeProf' => 'jose',
        ]);
    }
}


class AreaTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('area')->delete();
        Area::create([
            'CodArea' => '1',
            'Nome' => 'Arquitetura de Computadores ',
        ]);
        Area::create([
            'CodArea' => '2',
            'Nome' => 'Banco de Dados',
        ]);

        Area::create([
            'CodArea' => '3',
            'Nome' => ' Computação e Sociedade ',
        ]);

    }
}

class DisciplinaTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('disciplina')->delete();
        Disciplina::create([
            'CodDisc'=> 'MATA38',
            'CodArea' => '1',
            'NomeDisc'=> 'Projeto de Circuitos Lógicos',
        ]);
        Disciplina::create([
            'CodDisc'=> 'MATA60',
            'CodArea' => '2',
            'NomeDisc'=>'Banco de Dados',
        ]);

    }
}

class TurmaTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('turma')->delete();
            Turma::create([
                'CodDisc' =>    'MATA38',
                'CodTurma' => '010100',
                'Semestre' => '20172',
                'CodProf' =>'1',
                'Horario' => '18:30/22:10',
                'TravaAlocacao' => '1',
                'TurmaAtiva' => '1',
        ]);

        Turma::create([
            'CodDisc'=>    'MATA60',
            'CodTurma' => '010200',
            'Semestre' => '20172',
            'CodProf'=> '2',
            'Horario'=> '18:30/20:10',
            'TravaAlocacao'=>'1',
            'TurmaAtiva'=>'1',
        ]);

    }
}


