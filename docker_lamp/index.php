<?php
echo "Hello from docker container"
$mysqli = new mysqli("db","root","example","actress");
$sql = "INSERT INTO actress (heroine, hero) VALUES('samantha', 'shahrukh')";
$result = $mysql->query($sql);
$sql = "INSERT INTO actress (heroine, hero) VALUES('alia', 'varundawan')";
$result = $mysql->query($sql);
$sql = "INSERT INTO actress (heroine, hero) VALUES('deepika', 'ranveer')";
$result = $mysql->query($sql);

$sql = 'SELECT * FROM actress';
if ($result = $mysql->query($sql)) {
    while ($data = $result->fetch_object()) {
        $actress[] = $data;
    }
}

foreach ($actress as $actor) {
    echo "<br>";
    echo $actor->heroine . ' is ' . $actor->hero ;
    echo "<br>";
}
