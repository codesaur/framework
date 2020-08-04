<?php namespace codesaur\RBAC;

use codesaur\DataObject\CDO;
use codesaur\DataObject\Column;
use codesaur\DataObject\Describe;
use codesaur\MultiModel\InitableModel;

class Permissions extends InitableModel
{
    function __construct(CDO $conn)
    {
        parent::__construct($conn);
        
        $this->structure((new Describe())->create(
                array(
                   (new Column('id', 'bigint', 20))->auto()->primary()->unique()->notNull(),
                   (new Column('name', 'varchar', 128))->notNull(),
                    new Column('module', 'varchar', 64, 'general'),
                    new Column('description', 'varchar', 255),
                   (new Column('alias', 'varchar', 16))->notNull(),
                    new Column('is_active', 'tinyint', 1, 1),
                    new Column('created_at', 'datetime'),
                   (new Column('created_by', 'bigint', 20))->foreignKey('accounts(id)'),
                    new Column('updated_at', 'datetime'),
                   (new Column('updated_by', 'bigint', 20))->foreignKey('accounts(id)')
                )
        ));
        
        $this->setTable('rbac_permissions');
    }
    
    public function initial() : bool
    {
        $table = $this->getTable();
        if ( ! parent::initial() &&
                $table == 'rbac_permissions') {
            // 
        }
        
        return true;
    }
}
