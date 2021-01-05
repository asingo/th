$(document).ready(function(){
    
    $('#deleteModal').on('show.bs.modal', function (event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
     
    // Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
    var title = div.data( "button-type" );
    var id = div.data('id')
    var modal = $(this)
    if(title == "user"){
        modal.find('#modalDelete').attr("href","?delUser="+id);
        }else if(title == "client"){
        modal.find('#modalDelete').attr("href","?delClient="+id);
       }
        
    // Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal .
})});