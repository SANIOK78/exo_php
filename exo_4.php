<?php 
function writeSecretSentence(string $animal, string $element): string
{
    return $animal. " s'incline face à ".$element. " \n";
}

echo writeSecretSentence('le chat', 'la terre');
echo writeSecretSentence('le dragon', 'l\'eau');
echo writeSecretSentence('le singe', 'l\'aire');

/*
    le chat s'incline face à la terre
    le dragon s'incline face à l'eau
    le singe s'incline face à l'aire
*/