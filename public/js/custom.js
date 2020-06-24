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
});


