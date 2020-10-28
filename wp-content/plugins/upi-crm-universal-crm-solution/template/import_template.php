<script type="text/javascript">

    $j(document).ready(function () {

        $j( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );

        $j( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
        
        $j("#all_field_checkbox").click(function () {

            if ($j("#all_field_checkbox").is(':checked')) {

                $j("#checkbox_list input[type=checkbox]").each(function () {

                    $j(this).prop("checked", true);

                });

            } else {

                $j("#checkbox_list input[type=checkbox]").each(function () {

                    $j(this).prop("checked", false);

                });

            }

        });

    } );

</script>

<style>

    .ui-tabs-vertical { width: 55em; }

    .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }

    .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }

    .ui-tabs-vertical .ui-tabs-nav li a { display:block; }

    .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }

    .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}

    .ui-tabs-vertical .ui-tabs-panel{width:85%;}

    .ui-tabs-vertical .ui-tabs-nav{width:15%;}

    .ui-tabs-vertical{width:100%;}

    #tabs{ letter-spacing:0;}

</style>

<?php

if(isset($_POST['filteredExport']) && $_POST['filteredExport'] <> ''){

    if($_POST['fields'] == ''){

        echo '<script type="text/javascript">alert("Please choose at least one field to apply filters on export!");</script>';

    }

    else

        upicrm_filtered_excel_output();

}

global $wpdb;

$table_prefix = $wpdb->prefix;

?>

        <h2>Import</h2>

        <?php _e('Import data into UpiCRM :<br />

You can easily upload / import data into UpiCRM. In order to upload data into UpiCRM please do the following:','upicrm'); ?><br /><br />

        1. <a href="admin.php?page=upicrm_import&action=excel_fromat_output"> <?php _e('Download this Excel file','upicrm'); ?></a> <?php _e('and open it in Excel / Google docs','upicrm'); ?><br />

        <?php _e('2. Locate the data into the right columns inside the excel file. Usually this should be an easy     

    operation using select / copy on the "other" file, and then "paste" into the UpiCRM Excel   

    file.','upicrm'); ?><br />

        <?php _e('3. Do NOT change the structure / format of the excel file, just copy the text data into the right 

    columns, save and exit the file.','upicrm'); ?><br />

        <?php _e('4. Upload the file into UpiCRM and you\'re done!','upicrm'); ?><br />

        <?php _e('5. Note: any automatic lead management rules you may have – will be processed during the  

    import process. ','upicrm'); ?>

        <br /><br /><br />

        <a href="admin.php?page=upicrm_import&action=import_all" onclick="return confirm('<?php _e('Are you sure?','upicrm'); ?>');" class="btn btn-default">

            <i class="glyphicon glyphicon-import"></i> <?php _e('import all existing forms plugins data into UpiCRM','upicrm'); ?>

        </a>

        <br />

        <?php _e('Note: this will import "old" data from the forms you\'re currently using, if they are configured to keep entries in a database. This will NOT import new data from an external / new source. ','upicrm'); ?>

        <br /><br />

        <?php _e('Import New data into UpiCRM :','upicrm'); ?>

        <a href="admin.php?page=upicrm_import&action=excel_fromat_output" class="btn btn-default">

            <i class="glyphicon glyphicon-export"></i> <?php _e('Download UpiCRM Sample Excel File ','upicrm'); ?>

        </a>

        <br />

        <br />

        <form action="admin.php?page=upicrm_import&action=excel_fromat_upload" method="post" enctype="multipart/form-data">

            <label for="excel_fromat_upload"><?php _e('Upload & Import','upicrm'); ?></label>

            <input type="file" id="excel_fromat_upload" name="excel_fromat_upload" accept=" .xlsx, .xls" />

            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Upload','upicrm'); ?>">

        </form>

        <br /><br />

        <form action="admin.php?page=upicrm_import&action=csv_upload_import" method="post" enctype="multipart/form-data">
        
            <label for="csv_upload_import"><?php _e('Upload & Import .CSV','upicrm'); ?></label>
        
            <input type="file" id="csv_upload_import" name="csv_upload_import" accept=".csv" />
        
            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Upload','upicrm'); ?>">
        
        </form>

<br /><br />
        

        <?php _e('Example: import data from Excel:','upicrm'); ?><br />

        <img src="<?php echo plugins_url( 'images/upi_import.jpg', dirname(__FILE__) ); ?>" />

<!-- widget grid -->