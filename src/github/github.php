<?php


//// Not exactly one-liner but.. ;)
//
//// --------------------
//// require:
////    illuminate/support
////    guzzlehttp/guzzle
//$user = 'symfony';
//
//$stars = collect(json_decode((new Guzzlehttp\Client)->get("https://api.github.com/users/{$user}/repos")->getBody(), true))
//    ->where('fork', false)
//    ->sum('stargazers_count');
//

// --------------------

$curl = curl_init('https://api.github.com/users/symfony/repos');
curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($curl);
$ghData = json_decode(trim($output), true);

foreach ($ghData as $repo) {
//    echo $repo['full_name'] . PHP_EOL;
    if ($repo['full_name'] !== 'symfony/debug-pack' and $repo['full_name'] !== 'symfony/asset') {
        continue;
    }

//    print_r($repo);
    print_r([
        'name' => $repo['full_name'],
        'gwiazdki' => $repo['stargazers_count'],
        'obserwujący' => $repo['watchers'],
        'forki' => $repo['forks']
    ]);
}
