<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('posts')->insert([
            'title' => 'El impacto psicológico del aislamiento',
            'description' => 'La pandemia del COVID-19 provocó que aún más personas requieran de servicios de salud mental, pero el 93% de 130 países redujeron o interrumpieron el acceso a estos servicios. ¿Cómo lograr que la salud mental sea accesible para todos y la inversión sea mayor? ¿Qué innovaciones se pueden impulsar para que la salud mental se consolide como política pública en los países de la región? Es lo que nuestra especialista Rita Sorio aborda en este artículo que despliega estadísticas, análisis y propuestas.',
            'created_at' => '2022-03-01',
            'user_id' => 1,
        ]);

			DB::table('posts')->insert([
            'title' => 'LO QUE DEBES SABER DEL SÍNDROME DE DOWN',
            'description' => 'A propósito del Día Mundial del Síndrome de Down, te contamos qué es este trastorno genético y por qué se conmemora esta fecha.',
            'created_at' => '2022-03-02',
            'user_id' => 1,
        ]);

			DB::table('posts')->insert([
            'title' => '¡ES HORA DE DORMIR! LA IMPORTANCIA DEL BUEN DESCANSO',
            'description' => 'Una adecuada calidad y cantidad de sueño te va a permitir gozar de una buena salud física, emocional y mental. Lo más importante es mantener una correcta higiene de sueño y establecer hábitos o rutinas que favorezcan el buen dormir. Ante la aparición de síntomas de alguna de las alteraciones anteriormente mencionadas, mi llamado es a que visites a tu especialista, quien se encargará hacer el diagnóstico y definir el tratamiento.',
            'created_at' => '2022-01-05',
            'user_id' => 1,
        ]);
    }
}
