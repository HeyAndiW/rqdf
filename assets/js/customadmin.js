// ------------------------------ login error
$(document).ready(function(){
    setTimeout(function(){
        $('.mark-error-login').hide(1000);
    }, 2000);
    setTimeout(function(){
        $('.mark-error-login').remove();
    }, 3000);
});

// ------------------------------ Toggle Menu
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('.profile').on('click', function(){
    	var uname = $(this).data('uname');
    	var name = $(this).data('name');
    	var photo = $(this).data('photo');
    	var baseurl = $(this).data('baseurl');

    	$('.username').html(uname);
    	$('.name').val(name);
    	$('.profile-icon').attr('src', baseurl + 'assets/images/' + photo);
    })
});

$(document).ready(function (){
    $('#sidebar-menu').on('click', function(){
        $('.collapseMenu').toggleClass('active');
    });
});


//------------------------------- CRUD
$(document).on("click", ".button-edit", function() {
    var id        = $(this).data('id');
    var nama      = $(this).data('nama');
    var jabatan      = $(this).data('jabatan');
    var alamat    = $(this).data('alamat');
    var jk        = $(this).data('jk');
    var nohp      = $(this).data('nohp');
    var email     = $(this).data('email');

    console.log(id);
    $('#id').val(id);
    $('#nama').val(nama);
    $('#jabatan').val(jabatan);
    $('#alamat').val(alamat);
    $('#jk').val(jk);
    $('#no_hp').val(nohp);
    $('#email').val(email);
})

$(document).on("click", ".button-delete", function() {
    var id        = $(this).data('id');
    var nama      = $(this).data('nama');
    var jabatan   = $(this).data('jabatan');
    var alamat    = $(this).data('alamat');
    var jk        = $(this).data('jk');
    var nohp      = $(this).data('nohp');
    var email     = $(this).data('email');

    console.log(id);
    $('.id').val(id);
    $('.nama').val(nama);
    $('.jabatan').val(jabatan);
    $('.alamat').val(alamat);
    $('.jk').val(jk);
    $('.no_hp').val(nohp);
    $('.email').val(email);
})

// ----------------------------- absensi
$(document).on('click','.status', function(){
    var id = $(this).data('id');

    
    if ($(this).html() == 'Tidak Hadir') {
        $(this).html('Hadir');
        $('.nilaistatus.'+id).val('Hadir');
    }else{
        $(this).html('Tidak Hadir');
        $('.nilaistatus.'+id).val('Tidak Hadir');
    }
});