var idioma=

            {
                "sProcessing":     "Processing...",
                "sLengthMenu":     "Show _MENU_ records",
                "sZeroRecords":    "No results found",
                "sEmptyTable":     "No data available in this table",
                "sInfo":           "Showing records from _START_ to _END_ out of a total of _TOTAL_ records",
                "sInfoEmpty":      "Showing records from 0 to 0 out of un total de 0 registros",
                "sInfoFiltered":   "(filtering a total of _MAX_ records)",
                "sInfoPostFix":    "",
                "sSearch":         "Search:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Loading...",
                "oPaginate": {
                    "sFirst":    "First",
                    "sLast":     "Last",
                    "sNext":     "Next",
                    "sPrevious": "Previous"
                },
                "oAria": {
                    "sSortAscending":  ": Activate to sort the column in ascending order",
                    "sSortDescending": ": Activate to sort the column in descending order"
                },
                "buttons": {
                    "copyTitle": 'Information Copied',
                    "copyKeys": 'Use your keyboard or menu to select the copy command',
                    "copySuccess": {
                        "_": '%d rows copied to clipboard',
                        "1": '1 row copied to clipboard'
                    },

                    "pageLength": {
                    "_": "Show %d rows",
                    "-1": "Show everything"
                    }
                }
            };

$(document).ready(function() {
  
  
  var table = $('#ejemplo').DataTable( {
    
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
    "language": idioma,
    "lengthMenu": [[5,10,20, -1],[5,10,50,"Show everything"]],
    dom: 'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',
    
    
    buttons: {
          dom: {
            container:{
              tag:'div',
              className:'flexcontent'
            },
            buttonLiner: {
              tag: null
            }
          },
          
          
          
          
          buttons: [


                    {
                        extend:    'copyHtml5',
                        text:      '<i class="fa fa-clipboard"></i>Copy',
                        title:'Table title in Copy',
                        titleAttr: 'Copy',
                        className: 'btn btn-app export barras',
                        exportOptions: {
                            columns: [ 0, 1 ]
                        }
                    },

                    {
                        extend:    'pdfHtml5',
                        text:      '<i class="fa fa-file-pdf-o"></i>PDF',
                        title:'Titulo de tabla en pdf',
                        titleAttr: 'PDF',
                        className: 'btn btn-app export pdf',
                        exportOptions: {
                            columns: [ 0, 1 ]
                        },
                        customize:function(doc) {

                            doc.styles.title = {
                                color: '#4c8aa0',
                                fontSize: '30',
                                alignment: 'center'
                            }
                            doc.styles['td:nth-child(2)'] = { 
                                width: '100px',
                                'max-width': '100px'
                            },
                            doc.styles.tableHeader = {
                                fillColor:'#4c8aa0',
                                color:'white',
                                alignment:'center'
                            },
                            doc.content[1].margin = [ 100, 0, 100, 0 ]

                        }

                    },

                    {
                        extend:    'excelHtml5',
                        text:      '<i class="fa fa-file-excel-o"></i>Excel',
                        title:'Table title in Excel',
                        titleAttr: 'Excel',
                        className: 'btn btn-app export excel',
                        exportOptions: {
                            columns: [ 0, 1 ]
                        },
                    },
                    {
                        extend:    'csvHtml5',
                        text:      '<i class="fa fa-file-text-o"></i>CSV',
                        title:'Table title in CSV',
                        titleAttr: 'CSV',
                        className: 'btn btn-app export csv',
                        exportOptions: {
                            columns: [ 0, 1 ]
                        }
                    },
                    {
                        extend:    'print',
                        text:      '<i class="fa fa-print"></i>Print',
                        title:'Labs ',
                        titleAttr: 'Print',
                        className: 'btn btn-app export imprimir',
                        exportOptions: {
                            columns: [ 0, 1 ]
                        }
                    },
                    {
                        extend:    'pageLength',
                        titleAttr: 'Records to display',
                        className: 'selectTable'
                    }
                ]
          
          
        }
    
    
    
    
    
    
    
    
    
    
          
        
    
        
    });

  
} );