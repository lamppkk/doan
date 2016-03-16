$(document).ready(function() {
    $('#selectall').click(function(event) { //on click
        if(this.checked) 
        { //Ki?m tra tr?ng thái dã ch?n checkbox có id là selectall hay chua
            $('.checkbox').each(function() { //l?p qua t?ng checkbox
                this.checked = true; //ch?n t?t c? checkbox có class là: "checkbox"
            });
         }
        else
        {
            $('.checkbox').each(function() { //l?p qua t?ng checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox"
            });
        }
    });
});

function ChangeToSlug(start,end)
{
    //Lấy text từ thẻ input title
    title = document.getElementById(start).value;

    //Đổi chữ hoa thành chữ thường
    var slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”

    document.getElementById(end).value = slug;
}

function selectImg(imgId, inputId) {
	var trash =  imgId.substring(3, 4);
	//console.log(trash);
	 CKFinder.modal({
		 height: 550,
		 chooseFiles: true,
	 onInit: function( finder ) {
		 finder.on( 'files:choose', function( evt ) {
			 var file = evt.data.files.first();
			 document.getElementById(imgId).src = file.getUrl();
			 document.getElementById(inputId).value = file.getUrl();
			 if(imgId == 'img1') {
				document.getElementById('anhspReq').value = file.getUrl();
			 }
			 //$(".fa-picture-o").hide();
			 $("#trash"+trash).show();
			 
		 } );
		 finder.on( 'file:choose:resizedImage', function( evt ) {
			 document.getElementById(imgId).src = evt.data.resizedUrl;
			 document.getElementById(inputId).value = evt.data.resizedUrl;
			 //$(".fa-picture-o").hide();
			 if(imgId == 'img1') {
				document.getElementById('anhspReq').value = evt.data.resizedUrl;
			 }
			 $("#trash"+trash).show();
			 
		 } );
		 
	 }
	 });
}


function traskClick(i) {
	$("#img"+i).attr("src",APP_URL+"/public/admin/images/no_image.png");
	$("#txtImg"+i).val("");
	$("#trash"+i).hide();
	// var url = APP_URL+'/admin/products/deleteImage/';
	// var _token = $("form[name=frmEditProduct]").find("input[name='_token']").val();
	// var img = $("#img"+i).attr("src");
	// var id = 
	// $.ajax
	// console.log(img);
}



