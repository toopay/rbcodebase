'use strict';
/**
 * @author Batch Themes Ltd.
 */
(function() {
    $(function() {
        if (!element_exists('.jumbotron-3')) {
            return false;
        }
        var config = $.localStorage.get('config');
        var colors = config.colors;
        var mediumBar1 = peityBar('.jumbotron-bar-1', 24, 96, '#ffffff');
        setInterval(function() {
            var random = Math.round(Math.random() * 10);
            var values = mediumBar1.text().split(',');
            values.shift();
            values.push(random);
            mediumBar1.text(values.join(',')).change();
        }, 1000);
        var mediumBar6 = peityBar('.jumbotron-bar-6', 24, 96, '#ffffff');
        setInterval(function() {
            var random = Math.round(Math.random() * 10);
            var values = mediumBar6.text().split(',');
            values.shift();
            values.push(random);
            mediumBar6.text(values.join(',')).change();
        }, 1000);
    });
})();
