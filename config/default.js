module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: 'manovotny/wp-post-type-util',
            description: 'A lovely collection of post type utilities for WordPress.',
            git: 'git://github.com/manovotny/wp-post-type-util.git',
            name: 'WP Post Type Util',
            slug: 'wp-post-type-util',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-post-type-util',
            version: '1.0.0'
        }
    };

}());
