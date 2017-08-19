/*
 * Smart Demo Switcher v1.0
 * http://www.smartplugins.info/plugin/javascript/smart-demo-switcher//
 * 
 * Copyright 2008 - 2014 Milan Petrovic (email: milan@gdragon.info)
 *
 * http://www.dev4press.com
 * http://www.millan.rs
 *
 */

var smartDemoSwitcherObj;

;(function ($, window, document, undefined) {
    smartDemoSwitcher.Loader = smartDemoSwitcher.Load.extend({

        display: {

        style: "light",
        location: "left",
        sheetBoxFactor: .5,
        buttonContent: '<i class="fa fa-gear"></i>',
        buttonTop: "130px",
        formTop: "110px",
        formHeaderContent: '',
        formNoticeContent: "Switcher is for demo use only. All skins included with the theme.",
        initOpen: false
            
        },

        stylesheets: {
            main: {
                boxFactor: 1,
                boxShape: "square",
                columns: 2,
                selector: "#main-style",
                default: "demo/css/blue.css",
                title: true,
                titleContent: "<h5>6 Skins</h5>",
                list: [
                    {file: "demo/css/blue.css", name: "Blue", colors: ["#104068"]},
                    {file: "demo/css/red.css", name: "Red", colors: ["#b71b1b"]},
                    {file: "demo/css/green.css", name: "Green", colors: ["#2f863e"]},
                    {file: "demo/css/purple.css", name: "Purple", colors: ["#4f3b75"]},
                    {file: "demo/css/dark.css", name: "Dark", colors: ["#252728"]},
                    {file: "demo/css/light.css", name: "Light", colors: ["#efefef"]}
                ]
            }
        },

    });

    jQuery(document).ready(function() {
        smartDemoSwitcherObj = new smartDemoSwitcher.Core();
    });
})(jQuery, window, document);