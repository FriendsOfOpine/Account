if ($('.account-section').length) {
    console.log("Loading Opine Account SSO");
    require.ensure([], function(require) {
        var $ = require('jquery');
        require('semantic');
        require('behaviors.js');
        if ($('#opine-account-config').length) {
            var config = JSON.parse($('#opine-account-config').text());
            if (typeof(config['cssPath']) == 'undefined')
                require('../css/style.css');
            }
        } else {
            require('../css/style.css');
        }
    });
} else {
    console.log("Skipping Loading Opine Account SSO");
}