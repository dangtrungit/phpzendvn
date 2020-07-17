 $(document).ready(function() {
     $("#check_all_last").click(
         function() {
             $("input#checkdata").prop('checked', this.checked);
         }
     );

     $('#check_all_first').change(
         function() {
             var checkStatus = this.checked;
             $('div.list').find(':checkbox').each(function() {
                 this.checked = checkStatus;
             });
         });

     // $("#checkall1").click(
     //     function() {
     //         $("input#checkdata").prop('checked', this.checked);
     //     }
     // );

 });

 function deleteItem(id) {
     $.post('index.php?controller=group&action=delete', {
         id: id
     }, function(data) {
         // $("div#item-" + id).hide(500);
         $("div#item-" + id).toggle("slow");
     });
     return false;

 }