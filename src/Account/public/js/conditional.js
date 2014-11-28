if ($('.account-section').length) {
    console.log("Loading Opine Account SSO");
    require.ensure([], function(require) {
        var $ = require('jquery');
        require('semantic');
        require('behaviors.js');
        var cssPath = '../css/style.js';
        if ($('#opine-account-config').length) {
            var config = JSON.parse($('#opine-account-config').text());
            if (typeof(config['cssPath']) !== 'undefined')
                cssPath = config['cssPath'];
            }
        }
        require(cssPath);
    });
} else {
    console.log("Skipping Loading Opine Account SSO");
}