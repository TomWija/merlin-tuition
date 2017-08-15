var setup = function() {
    $('#become-student-submit-btn').click(function() {
        console.log('ooga booka');
        ga('send', 'event', 'BecomeStudent', 'Submitted');
    });
}

module.exports = function() {
    setup();
};
