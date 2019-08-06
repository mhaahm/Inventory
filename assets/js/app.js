/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/login.scss');
require('../css/app.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
const $ = require('jquery');
require("bootstrap/dist/js/bootstrap");
const  login = require("./login");
const  home = require("./home");
$(document).ready(function () {

    login.setAutofocus();
    home.setFamilyClickAction();
});


