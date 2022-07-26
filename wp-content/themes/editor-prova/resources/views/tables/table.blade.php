<table id="example" class="display table" style="width:100%">
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

    let childRow = '<table cellpadding="0" cellspacing="0" border="2">' +
        '<tr>' +
        '<td>ID: ' + d.data_id + '</td>' +
        '</td>' +
        '<td>' +
        '<td>Start Date: ' + d.data_start_date + '</td>' +
        '</td>' +
        '<td>' +
        '<td>Extension number: ' + d.data_extn + '</td>' +
        '</tr>' +
        '</table>';

    return (childRow);
}

$(document).ready(function() {
    var editor = new $.fn.dataTable.Editor({
        ajax: 'Editor/controllers/prova.php',
        table: '#example',
        /*i18n: {
            create: {
                button: "Nouveau",
                title: "Créer nouvelle entrée",
                submit: "Créer"
            },
        },*/
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
                name: 'data_start_date',
                type: 'datetime'
            },
            {
                label: 'ID',
                name: 'data_id'
            },
        ]
    });

    editor.on('initSubmit', function(e, type) {
        //manda l'alert quando i dati ajax sono pronti per essere mandati
        //alert('Hahhahahah scemooo');

        //let salaryvalue = editor.field('data_salary').val();
        //console.log("$" + salaryvalue);

        //modifica il dato
        //editor.field('data_salary').val("$" + editor.field('data_salary').val());
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