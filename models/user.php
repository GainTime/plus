<?php
    require_once('../lib/model/base.php');

    class User extends \Model\Base {

        public $fillable = ['name', 'email', 'level'];

        public static function loadAll() {
            $users = self::all('name ASC');

            foreach ($users as $user) {
                echo '
                    <tr>
                        <td>'.$user->name.'</td>
                        <td>'.$user->email.'</td>
                        <td>
                            <a href="edit-user?id='.$user->id.'" class="btn-action edit" title="#">
                                <i class="fa fa-edit fa-lg"></i>
                            </a>

                            <a href="" class="btn-action del" onclick="askDelete(
                                \'o usuário\',
                                \''.$user->name.'\',
                                \'../controllers/user_controller?delete='.$user->id.'\'
                            )">
                                <i class="fa fa-trash-o fa-lg"></i>
                            </a>
                        </td>
                    </tr>
                ';
            }
        }
    }
