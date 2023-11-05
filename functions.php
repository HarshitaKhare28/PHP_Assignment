<?php
function connectToDb(){
    return $pdo = new PDO(
        'mysql:host=localhost;
        dbname=user_data',
        'root',
        '');
}
function selectAll(PDO $pdo,string $table,string $class){
    $statement= $pdo->prepare('select * from '.$table);
    $statement->execute();
    return $statement->fetchAll(
    PDO::FETCH_CLASS,
    $class);

}

?>