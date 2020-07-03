<?php
include_once('Dancer.php');

$maleQueue = new SplQueue();
$femaleQueue = new SplQueue();

function createDancer()
{
    $listname = ['Cuong', 'Duong', 'Tung', 'Anh', 'Nguyen', 'Manh'];
    $name = $listname[rand(0, count($listname) - 1)];
    $gender = rand(0, 1);
    return new Dancer($name, $gender);
}
function joinClub($maleQueue, $femaleQueue)
{
    for ($i = 0; $i < 10; $i++) {
        $dancer[$i] = createDancer();
        switch ($dancer[$i]->getGender()) {
            case 0:
                $maleQueue->enqueue($dancer[$i]);
                break;
            case 1:
                $femaleQueue->enqueue($dancer[$i]);
                break;
            default;
        }
    }
}

function checkPair($maleQueue, $femaleQueue)
{
    $status = false;
    while (!$status) {
        $status = $maleQueue == NULL || $femaleQueue == NULL;
        if ($status) return false;
        else return true;
    }
}

function makePair($maleQueue, $femaleQueue)
{
    $male = $maleQueue->dequeue();
    $female = $femaleQueue->dequeue();
    if (checkPair($maleQueue, $femaleQueue)){
        // $maleQueue->dequeue();
        // $femaleQueue->dequeue();
        echo '<br/>Next couple is ' . $male->getName() . '--' . $female->getName();
    }
        
    else echo '<br/>Wait a minutes';
}

joinClub($maleQueue, $femaleQueue);

echo 'Male Queue';
echo '<pre>';
print_r($maleQueue);
echo '</pre>';

echo 'Female Queue';
echo '<pre>';
print_r($femaleQueue);
echo '</pre>';

for ($i = 0; $i < 10; $i++) {
    makePair($maleQueue, $femaleQueue);
}