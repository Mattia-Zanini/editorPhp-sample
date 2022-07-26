<table id="example" class="display table table-striped" style="width:100%">
    <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Office</th>
            <!-- <th>Extn.</th>
            <th>Start date</th>
            <th>ID</th> -->
        </tr>
    </thead>
</table>
<script>
var $ = jQuery;

/* Formatting function for row details - modify as you need */
function format(d) {
    // `d` is the original data object for the row

    let childRow = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
        '<tr>' +
        '<td>ID:</td>' +
        '<td>' +
        d.data_id +
        '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Start Date:</td>' +
        '<td>' +
        d.data_start_date +
        '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Extension number:</td>' +
        '<td>' +
        d.data_extn +
        '</td>' +
        '</tr>' +
        '</table>';

    return (childRow);
}

$(document).ready(function() {
    var editor = new $.fn.dataTable.Editor({
        ajax: 'Editor/controllers/prova.php',
        table: '#example',
        fields: [{
                label: 'Name',
                name: 'data_name'
            },
            {
                label: 'Position',
                name: 'data_position'
            },
            {
                label: 'Salary',
                name: 'data_salary'
            },
            {
                label: 'Office',
                name: 'data_office'
            },
            {
                label: 'EXTN',
                name: 'data_extn'
            },
            {
                label: 'Start Date',
                name: 'data_start_date'
            },
            {
                label: 'ID',
                name: 'data_id'
            },
        ]
    });


    var table = $('#example').DataTable({
        //ajax: 'wp-content/themes/editor-prova/objects.json',
        ajax: 'Editor/controllers/prova.php',
        dom: 'Bfrtip',
        columns: [{
                className: 'dt-control',
                orderable: false,
                data: null,
                defaultContent: '',
            },
            {
                data: 'data_name'
            },
            {
                data: 'data_position'
            },
            {
                data: 'data_salary'
            },
            {
                data: 'data_office'
            },
            /*{
                data: 'data_extn'
            },
            {
                data: 'data_start_date'
            },
            {
                data: 'data_id'
            },*/
        ],

        order: [
            [1, 'asc']
        ],
        colReorder: true,
        select: true,
        buttons: [{
                extend: 'create',
                editor: editor
            },
            {
                extend: 'edit',
                editor: editor
            },
            {
                extend: 'remove',
                editor: editor
            }
        ],
    });

    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.dt-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        //console.log(row.data());

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child(format(row.data())).show();
            tr.addClass('shown');
        }
    });
});
</script>