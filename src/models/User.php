<?php

class User extends Model {
    protected static $tableName = 'user';
    protected static $columns = [
        'id',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin'
    ];
}