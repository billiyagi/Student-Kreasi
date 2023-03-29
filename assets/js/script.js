$(document).ready(function () {
    $('.delete-data-modal').click(function () {
        rowId = this.getAttribute('data-id');
        $('#deleteDataButton').attr('form', `deleteForm${rowId}`);
    })
})