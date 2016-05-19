<?php
    require_once('../lib/model/base.php');

    class Company extends \Model\Base {
        protected $fillable = ['id', 'company', 'description', 'address', 'city', 'map', 'room', 'phone', 'email', 'facebook', 'instagram', 'linkedin'];
    }
