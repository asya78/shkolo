/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    
    /* Hide alert for error, success after time*/
    setTimeout(function () {
        $('.alert').fadeOut('slow');
    }, 2000);

    /* Confirm to remove button*/
    $('.delete-form').on('click', function () {
        return window.confirm('Are you sure you want to delete ?');
    });
    
    /* Confirm the action on click */
    $('.action-url').on('click', function(e){
        e.preventDefault();
        let currBtn = e.currentTarget;
        let url = currBtn.href;
        let id = $(currBtn).data('id');
        if (confirm(`Are you sure to go to: ${url} ?`)) {
           window.open(url);
        } else {
            window.location.href = `/button/${id}/edit`;
       }
    });
});


