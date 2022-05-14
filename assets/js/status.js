jQuery(document).ready(function($) {

    "use strict";
    var gloriousAdminStatus = {
        init: function() {
            $(document.body).on('click', '#glorious-copy-for-support', this.copyDebugReport);
            $(document.body).on('click', 'a.glorious-debug-report', this.generateDebugReport);
        },
        generateDebugReport: function() {
            var report = '';

            $('.glorious-status-table thead, .glorious-status-table tbody').each(function() {
                if ($(this).is('thead')) {
                    var label = $(this).find('th:eq(0)').data('export-label') || $(this).text();
                    report = report + '\n### ' + $.trim(label) + ' ###\n\n###GloriousMotive\n\n';
                } else {
                    $('tr', $(this)).each(function() {
                        var label = $(this).find('td:eq(0)').data('export-label') || $(this).find('td:eq(0)').text();
                        var the_name = $.trim(label).replace(/(<([^>]+)>)/ig, '');

                        // Find value
                        var $value_html = $(this).find('td:eq(1)').clone();
                        $value_html.find('.private').remove();
                        $value_html.find('.dashicons-yes').replaceWith('&#10004;');
                        $value_html.find('.dashicons-no-alt, .dashicons-warning').replaceWith('&#10060;');

                        // Format value
                        var the_value = $.trim($value_html.text());
                        var value_array = the_value.split(', ');

                        if (value_array.length > 1) {
                            var temp_line = '';
                            $.each(value_array, function(key, line) {
                                temp_line = temp_line + line + '\n';
                            });

                            the_value = temp_line;
                        }

                        report = report + '' + the_name + ': ' + the_value + '\n';
                    });
                }
            });

            try {
                $('#glorious-debug-report').slideDown();
                $('#glorious-debug-textarea').val(report).focus().select();
                $(this).fadeOut();
                return false;
            } catch (e) {
                console.log(e);
            }
        },
        copyDebugReport: function() {
            var debugTextarea = document.getElementById('glorious-debug-textarea');
            $(debugTextarea).select();
            document.execCommand('Copy', false, null);
        }
    };

    gloriousAdminStatus.init();

});