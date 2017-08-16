var buildSubjectDropdown = function(subjects) {
    var html = '<div class="col-sm-6"><label>Subject ' + window.numSubjects + '</label>';
    html += '<div class="rounded select--primary"><select name="subject' + window.numSubjects + '">'
    html += '<option value="">Choose Subject</option>';

    subjects.forEach(function(subject) {
        html += '<option value="' + subject.name + '">' + subject.name + '</option>';
    });

    html += '</select></div></div>';

    return html;
}

var buildLevelDropdown = function() {
    return '<div class="col-sm-6">'
         + '<label>Level ' + window.numSubjects + '</label>'
         + '<div class="rounded select--primary">'
         + '<select name="level' + window.numSubjects + '">'
         + '<option value="">Choose Level</option>'
         + '</select>'
         + '</div>'
         + '</div>';
}

var setup = function() {
    window.numSubjects = 1;
    $('#add-subject-button').click(function(e) {
        e.preventDefault();

        var $addSubjectRow = $(this).parent().parent();

        window.numSubjects += 1;
        $.ajax({
            url: "/subjects/get-subjects",
            success: function(data) {
                var subjectDropdown = buildSubjectDropdown(data),
                    levelDropdown = buildLevelDropdown(),
                    subjectSelector = '<div class="row become-student__form-row"> ' + subjectDropdown + levelDropdown + '</div>';

                $addSubjectRow.before(subjectSelector);

                if (window.numSubjects >= 3) {
                    $addSubjectRow.remove();
                    $('#add-subject-button').remove();
                }
            },
            error: function() {
                console.log('nay');
            }
        })

    })
}

module.exports = setup;
