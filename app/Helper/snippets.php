<?php

function addBread($data = [])
{
    $breads[] = [
        "@type" =>  "ListItem",
        "position" =>  1,
        "name" =>  "Homepage",
        "item" =>  url('')
    ];
    if (!empty($data)) {
        $i = 2;
        foreach ($data as $dt) {
            $breads[] = [
                "@type" =>  "ListItem",
                "position" =>  $i,
                "name" =>  $dt['name'],
                "item" =>  $dt['url'] ?? url()->current()
            ];
            $i++;
        }
    }
    return $breads;
}

function singleRichCrumb($post)
{
    return addBread([
        ['name' => $post->type, 'url' => route('post.type', $post->type)],
        ['name' => $post->title, 'url' => route('post.single', [$post->type, $post->slug])]
    ]);
}

function richCrumb($name)
{
    return addBread([
        ['name' => $name, 'url' => url()->current()],
    ]);
}

function drichCrumb($name, $url, $name2)
{
    return addBread([
        ['name' => $name, 'url' => $url],
        ['name' => $name2, 'url' => url()->current()],
    ]);
}
