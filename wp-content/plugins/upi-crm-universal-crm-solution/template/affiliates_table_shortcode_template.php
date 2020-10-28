<?php 
$table_name = 'upicrm_affiliate_table_'.time().'_'.rand(0,9999999);
?>
<table id="<?= $table_name; ?>" class="display" style="width:100%;">
    <thead>
        <tr>
            <?php
            $i = 0;
            foreach ($list_option as $key => $arr) {
                foreach ($arr as $key2 => $value) {
                    if (isset($field_on[$key][$key2])) {
                        echo "<th>$value</th>";
                        
                        if (isset($atts['field']) && $atts['field'] == $key2) {
                            $orderby = $i;
                        }
                        
                        $i++;
                    }
                }
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($getLeads as $leadObj) {
            echo "<tr>";
            foreach ($list_option as $key => $arr) {
                foreach ($arr as $key2 => $value) {
                    if (isset($field_on[$key][$key2])) {
                        echo "<td>";
                        echo $UpiCRMUIBuilder->lead_routing($leadObj, $key, $key2, $getNamesMap, true, true);
                        echo "</td>";
                    }
                }
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<script>
    jQuery(document).ready(function ($) {
        $('#<?= $table_name; ?>').DataTable({
            responsive: true,
            <?php if (isset($lang['name'])) { ?>
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/<?=$lang['name']; ?>.json"
                },
            <?php } ?>
            <?php if (isset($atts['field'])) { ?>
                order: [ <?= $orderby; ?>, "desc" ],
            <?php } ?>

        });
   
        $("body").on("click", ".affiliate_time", function () {
            $(this).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
            $(this).focus();
        });
        
        $("body").on("click", ".aff_click", function () {
            elem = $(this).closest("div");
            elem.find(".loader").show();
            elem.find(".aff_save_icon").hide();
            
            
            var data = {
                'action': 'affiliate_time_save',
                'lead_id': elem.data("lead_id"),
                'affiliate_time': elem.find(".affiliate_time").val(),
            };
            $.post('<?= admin_url('admin-ajax.php') ?>', data, function (response) {
                //console.log(response);
                if (response == 1) {
                    //alert("<?php _e('saved successfully!', 'upicrm'); ?>");
                    elem.find(".loader").hide();
                    elem.find(".aff_save_icon").show();
                }
                else
                    alert("<?php _e('Oh no! Error!', 'upicrm'); ?>");
            });
        });
        
        
    });
</script>