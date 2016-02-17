<?php

namespace TMCms\Modules\Files\Entity;

use TMCms\Orm\EntityRepository;

class FileEntityRepository extends EntityRepository
{
    protected $table_structure = [
        'fields' => [
            'client_id' => [
                'type' => 'index',
            ],
            'file_name' => [
                'type' => 'varchar',
            ],
            'uid' => [
                'type' => 'char',
            ],
        ],
    ];
}