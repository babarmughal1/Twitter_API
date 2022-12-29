<?php
// Fetching Tweets in JSON Format

$url = 'https://api.twitter.com/1.1/search/tweets.json?q=twitter';

$headers = array( 
    "Authorization: Bearer AAAAAAAAAAAAAAAAAAAAANRILgAAAAAAnNwIzUejRCOuH5E6I8xnZz4puTs%3D1Zv7ttfk8LF81IUq16cHjhLTvJu4FA33AGWWjCpTnA",
    "Content-Type: application/json",
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

$tweets = json_decode($response, true);

echo json_encode($tweets, JSON_PRETTY_PRINT);
