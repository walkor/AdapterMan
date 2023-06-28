<?php

it('tests client IP', function () {
    $response = HttpClient()->get('/ip');

    expect($response->getBody()->getContents())
        ->toBe('127.0.0.1');
});


it('tests server IP', function () {
    $response = HttpClient()->get('/server_ip');

    expect($response->getBody()->getContents())
        ->toBe('127.0.0.1');
});
