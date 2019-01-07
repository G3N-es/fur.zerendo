/*
 |  fur.zerendo - A small configurable blogger template.
 |  @file       ./js/zerendo.js
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    1.0.0
 |
 |  @website    https://github.com/pytesNET/fur.zerendo
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
;(function(factory){
    document.addEventListener("DOMContentLoaded", function(){
        factory(window);
    });
}(function(root){
    "use strict";
    var w = root, d = root.document;

    /*
     |  HELPER :: EACH
     |  @since  1.0.0
     */
    var each = function(elements, callback){
        if(elements instanceof HTMLElement){
            callback.call(elements, elements);
        } else if(elements.length && elements.length > 0){
            for(var l = elements.length, i = 0; i < l; i++){
                callback.call(elements[i], elements[i], i);
            }
        }
    };

    /*
     |  HELPER :: HAS CLASS
     |  @since  1.0.0
     */
    function cHAS(e, name){
        return (new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)")).test((e.className || ""));
    }

    /*
     |  HELPER :: ADD CLASS
     |  @since  1.0.0
     */
    function cADD(e, name){
        if(!(new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)")).test(e.className || name)){
            e.className += " " + name;
        }
        return e;
    }

    /*
     |  HELPER :: REMOVE CLASS
     |  @since  1.0.0
     */
    function cREM(e, name, regex){
        if((regex = new RegExp("(?:^|\\s+)(" + name + ")(?:\\s+|$)")) && regex.test(e.className || "")){
            e.className = e.className.replace(regex, "");
        }
        return e;
    }

    /*
     |  API :: TOGGLE
     |  @since  1.0.0
     */
    each(d.querySelectorAll("[data-toggle]"), function(){
        this.addEventListener("click", function(){
            var target = this;
            if(this.hasAttribute("data-target")){
                target = d.querySelectorAll(this.getAttribute("data-target"));
            }

            var className = this.getAttribute("data-toggle");
            each(target, function(){
                if(!cHAS(this, className)){
                    cADD(this, className);
                } else {
                    cREM(this, className);
                }
            });
        });
    });
}));
