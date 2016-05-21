<?php
    require_once('../lib/model/base.php');

    class Partner extends \Model\Base {

        public $fillable = ['name', 'description', 'image'];

        public static function loadAll() {
            $partners = self::all('name ASC');

            foreach ($partners as $partner) {
                echo '
                    <tr>
                        <td>'.$partner->name.'</td>
                        <td>'.$partner->description.'</td>
                        <td>
                            <a href="edit-partner?id='.$partner->id.'" class="btn-action edit" title="#">
                                <i class="fa fa-edit fa-lg"></i>
                            </a>
                            <a href="" class="btn-action del" onclick="askDelete(
                                \'o parceiro\',
                                \''.$partner->name.'\',
                                \'../controllers/partner_controller?delete='.$partner->id.'\'
                            )">
                                <i class="fa fa-trash-o fa-lg"></i>
                            </a>
                        </td>
                    </tr>
                ';
            }
        }

    }
