<?php
    require_once('../lib/model/base.php');

    class Project extends \Model\Base {

        public $fillable = ['title', 'description'];

        public static function loadAll() {
            $projects = self::all();

            foreach ($projects as $project) {
                echo '
                    <tr>
                        <td>'.$project->title.'</td>
                        <td>'.$project->description.'</td>
                        <td>
                            <a href="edit-project?id='.$project->id.'" class="btn-action edit" title="#">
                                <i class="fa fa-edit fa-lg"></i>
                            </a>

                            <a href="" class="btn-action del" onclick="askDelete(
                                \'o projeto\',
                                \''.$project->title.'\',
                                \'../controllers/project_controller?delete='.$project->id.'\'
                            )">
                                <i class="fa fa-trash-o fa-lg"></i>
                            </a>
                        </td>
                    </tr>
                ';
            }
        }

    }
