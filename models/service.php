<?php
    require_once('../lib/model/base.php');

    class Service extends \Model\Base {

        public $fillable = ['id', 'title', 'description', 'image'];

        public static function loadAll() {
            $services = self::all();

            foreach ($services as $service) {
                echo '
                    <tr>
                        <td>'.$service->title.'</td>
                        <td>'.$service->description.'</td>
                        <td>
                            <a href="edit-service?id='.$service->id.'" class="btn-action edit" title="#">
                                <i class="fa fa-edit fa-lg"></i>
                            </a>

                            <a href="" class="btn-action del" onclick="askDelete(
                                \'o serviço\',
                                \''.$service->title.'\',
                                \'../controllers/service_controller?delete='.$service->id.'\'
                            )">
                                <i class="fa fa-trash-o fa-lg"></i>
                            </a>
                        </td>
                    </tr>
                ';
            }
        }

    }
