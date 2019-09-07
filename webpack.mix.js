/*
 * Copyright (c) 2019 Matthew Poulter. All rights reserved.
 */

let mix = require('laravel-mix');

mix.setPublicPath('dist')
    .js('resources/js/field.js', 'js')
    .sass('resources/sass/field.scss', 'css');
