'use strict';
/**
 * @author Batch Themes Ltd.
 */
(function() {
    $(function() {
        $('.btn-export').click(function() {
            var type = $(this).data('type');
            if (type === 'json') {
                $('#table-export-json').tableExport({
                    type: 'json',
                    escape: 'false'
                });
            } else if (type === 'xml') {
                $('#table-export-xml').tableExport({
                    type: 'xml',
                    escape: 'false'
                });
            } else if (type === 'pdf') {
                $('#table-export-pdf').tableExport({
                    type: type,
                    pdfFontSize: '7',
                    escape: 'false'
                });
            } else if (type === 'sql') {
                $('#table-export-sql').tableExport({
                    type: 'sql',
                    escape: 'false'
                });
            } else if (type === 'csv') {
                $('#table-export-csv').tableExport({
                    type: 'csv',
                    escape: 'false'
                });
            } else if (type === 'txt') {
                $('#table-export-txt').tableExport({
                    type: 'txt',
                    escape: 'false'
                });
            }
        });
    });
})();
