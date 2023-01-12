<?php get_header(); ?>

<body>
    <h1>Sandwech MNG Demo</h1>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>

    <script type="text/javascript">
    var $ = jQuery;

    $(window).on('load', function() {
        var editor = new $.fn.dataTable.Editor({
            ajax: "Editor/controllers/prova.php",
            table: "#example",
            fields: [{
                    label: "First name:",
                    name: "first_name"
                },
                {
                    label: "Last name:",
                    name: "last_name"
                },
                {
                    label: "Email:",
                    name: "email"
                },
                {
                    label: "Office:",
                    name: "office"
                },
                {
                    label: "Salary:",
                    name: "salary"
                }
            ]
        });


        var table = $('#example').DataTable({
            dom: "Bfrtip",
            ajax: "Editor/controllers/prova.php",
            columns: [{
                    data: "first_name"
                },
                {
                    data: "last_name"
                },
                {
                    data: "email"
                },
                {
                    data: "office"
                },
                {
                    data: "salary"
                }
            ],
            select: true,
            buttons: [{
                    extend: "create",
                    editor: editor
                },
                {
                    extend: "edit",
                    editor: editor
                },
                {
                    extend: "remove",
                    editor: editor
                }
            ],
        });

        // Display the buttons
        table.buttons().container()
            .appendTo($('.col-md-6:eq(0)', table.table().container()));
    });
    </script>

    <?php get_footer(); ?>