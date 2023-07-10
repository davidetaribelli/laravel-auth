<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $projects = config("store");

        foreach ($projects as $project) { 
            $newProject = new Project();
            $newProject->title = $project["title"];
            $newProject->description = $project["description"];
            $newProject->thumb = $project["thumb"];
            $newProject->link = $project["link"];
            $newProject->save();   
        }
    }
}
