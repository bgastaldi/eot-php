<?php

namespace EOT;

use EOT\Db\Adapter;
use EOT\Helpers\Util;

require '../vendor/autoload.php';
$config = require_once(__DIR__ . '/db/config.php');

/*
$dir = 'sqlite:db/mydb.sqlite3';
$dbh  = new \PDO($dir) or die("cannot open the database");
$query =  'CREATE TABLE "contatos" (
  "id"    INTEGER NOT NULL,
  "nome"  TEXT NOT NULL,
  "telefone"  TEXT NOT NULL,
  PRIMARY KEY("id" AUTOINCREMENT)
);';
$dbh->query($query);
/*foreach  as $row) {
    echo $row[0];
}
die;*/


//$adapter = new Adapter($config, 'sqlite');
$adapter = new Adapter($config, 'postgres');
//$adapter = new Adapter($config);
$util = new Util() ;


$adapter->connect();

//$util->debug($adapter->createDatabase('mydb2.sqlite3'));
//$util->debug($adapter->dropDatabase('mydb2.sqlite3'));
//$util->debug($adapter->connectAndCreateDatabase($config, 'eot'));
//$util->debug($adapter->disconnect());

/*
$util->debug($adapter->createTable('contatos', [
  'id' => 'serial PRIMARY KEY', // use INTEGER instead of SERIAL on sqlite to get auto ids
  'nome' => 'varchar(255)',
  'telefone' => 'varchar(255)'
]));
*/

//$util->debug($adapter->insert('contatos', ['nome' => 'Zé', 'telefone' => '12344']));
//$util->debug($adapter->update('contatos', ['nome' => 'Zé1'], ['id' => 1]));
//$util->debug($adapter->delete('contatos', ['id' => 2]));


//$util->debug($adapter->truncateTable('contatos'));
//$util->debug($adapter->dropTable('sessao'));

//$util->debug($adapter->getAllTables());


//$util->debug($adapter->fetchAll('contatos', ['id', 'nome'], ['id' => 1], [], [], ['id'], 'ASC', 3));
//$util->debug($adapter->fetchAll('contatos'));

//$util->debug($adapter->fetchRow('contatos', [], [], [], [], ['id'], 'ASC'));

//$util->debug($adapter->exec('SELECT * FROM contatos WHERE id = 1'));
//$util->debug($adapter->query('SELECT * FROM contatos WHERE id = ?', 1));

//$util->debug($adapter->count('contatos'));
//$util->debug($adapter->getColumns('contatos'));
//$util->debug($adapter->hasTable('contatos'));
//$util->debug($adapter->hasColumn('contatos', 'id'));
//$util->debug($adapter->getColumnDatatype('contatos', 'id'));
//$util->debug($adapter->getPrimaryKey('contatos'));

//$util->debug($adapter->getForeignKeys('sessao'));
//$util->debug($adapter->getForeignTablesOut('sessao'));

//$util->debug($adapter->getForeignTablesIn('contatos'));
//$util->debug($adapter->isForeignKey('sessao', 'id_contato'));

//$util->debug($adapter->debugQuery("SELECT * FROM contatos WHERE id = ? or id = ?", [1, 2]));
