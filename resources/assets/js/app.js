require('./bootstrap');
require('./components/kalli.js');

var setupNavToggle = require('./components/nav-toggle')
  , setupFileUploader = require('./components/file-uploader')
  , setupGaEvents = require('./components/ga-events.js')
  , setupAddSubject = require('./components/add-subject.js')
  , setupGetLevels = require('./components/get-levels.js');


setupNavToggle();
setupFileUploader();
setupGaEvents();
setupAddSubject();
setupGetLevels();
