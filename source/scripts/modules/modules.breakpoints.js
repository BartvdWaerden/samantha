/*------------------------------------------------------------------------*/
/*  Get actual SCSS breakpoint name
/*------------------------------------------------------------------------*/

function getBreakpoint() {
    var style = null;
    if ( window.getComputedStyle && window.getComputedStyle(document.body, '::after') ) {
        style = window.getComputedStyle(document.body, '::after');
        style = style.content;
    } else {
        window.getComputedStyle = function(el) {
            this.el = el;
            this.getPropertyValue = function(prop) {
                var re = /(\-([a-z]){1})/g;
                if (re.test(prop)) {
                    prop = prop.replace(re, function () {
                        return arguments[2].toUpperCase();
                    });
                }
                return el.currentStyle[prop] ? el.currentStyle[prop] : null;
            };
            return this;
        };
        style = window.getComputedStyle(document.getElementsByTagName('head')[0]);
        style = style.getPropertyValue('font-family');
    }

    return removeQuotes( style );
}

function removeQuotes(string) {
    if (typeof string === 'string' || string instanceof String) {
        string = string.replace(/^['"]+|\s+|\\|(;\s?})+|['"]$/g, '');
    }
    return string;
}
