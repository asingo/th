$(document).ready(function(){
 
    $('#deleteModal').on('show.bs.modal', function (event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
     
    // Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus

    var id = div.data('id')
    var modal = $(this)
        modal.find('#modalDelete').attr("href","/?doDelete="+id);
    // Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal .
})});