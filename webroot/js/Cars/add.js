$(document).ready(function () {
    // The path to action from CakePHP is in urlToLinkedListFilter
    $('#make-id').on('change', function () {
        var makeId = $(this).val();
        if (makeId) {
            $.ajax({
                url: urlToLinkedListFilter,
                data: 'make_id=' + makeId,
                success: function (models) {
                    $select = $('#model-id');
                    $select.find('option').remove();
                    $.each(models, function (key, value)
                    {
                        $.each(value, function (childKey, childValue) {
                            $select.append('<option value=' + childValue.id + '>' + childValue.name + '</option>');
                        });
                    });
                }
            });
        } else {
            $('#model-id').html('<option value="">Select Car Make first</option>');
        }
    });
});


