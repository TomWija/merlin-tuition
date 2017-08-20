var setup = function() {

    $('.splash-subject-selector').change(function() {
        var subjectName = $(this).val(),
            $this = $(this);

        $.ajax({
            url: "/subjects/get-levels/" + encodeURI(subjectName),
            success: function(data) {
                var levels = data
                  , $levelSelector = $this.parent().parent().parent().find('.splash-level-selector');

                $levelSelector
                    .find('option')
                    .remove()
                    .end()
                    .append($('<option>', { value : '' })
                    .text('Choose a Level'));

                for (var i = 0; i < levels.length; i++) {
                    $levelSelector
                        .append($('<option>', { value : levels[i] })
                            .text(levels[i]));
                }
            },
            error: function() {
                console.log('nay');
            }
        })
    });
}

module.exports = setup;
