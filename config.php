<?php
use Illuminate\Support\Str;
return [
    'production' => false,
    'baseUrl' => 'https://cuddly-octo-garbanzo.ddev.site',
    'title' => 'Unleash Mautic Marketing Excellence with Steer Campaign',
    'description' => 'Discover a world of marketing potential with Steer Campaign. Unlock personalized automation and insights to boost your campaign success.',
    'checkoutLinks' => [
        'selfServiceLink' => 'https://buy.stripe.com/test_7sIeWk4q949ZbzqfYZ',
        'standardLink' => 'https://buy.stripe.com/test_cN2dSgaOx8qfeLC003'
    ],
    'collections' => [
        'posts' => [
            'author' => 'Mohammad Abu Musa', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],
// helpers
'getDate' => function ($page) {
    return Datetime::createFromFormat('U', $page->date);
},
'getExcerpt' => function ($page, $length = 255) {
    if ($page->excerpt) {
        return $page->excerpt;
    }

    $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
    $cleaned = trim(
        strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
            '<code>'
        )
    );

    if (count($content) > 1) {
        return $cleaned;
    }

    $truncated = substr($cleaned, 0, $length);

    if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
        $truncated .= '</code>';
    }

    return strlen($cleaned) > $length
        ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
        : $cleaned;
},
'isActive' => function ($page, $path) {
    return Str::endsWith(trimPath($page->getPath()), trimPath($path));
},

];
