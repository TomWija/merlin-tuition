require('./bootstrap');
require('./components/kalli.js');

var setupNavToggle = require('./components/nav-toggle')
  , setupFileUploader = require('./components/file-uploader')
  , setupGaEvents = require('./components/ga-events.js');


setupNavToggle();
setupFileUploader();
setupGaEvents();
