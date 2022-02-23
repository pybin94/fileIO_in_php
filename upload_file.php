
<form method="post" action="./upload_file_submit.php" method="post" enctype="multipart/form-data">

    <p>파일1</p>
    <input type="file" name="img_1" required>
    <p>파일2</p>
    <input type="file" name="img_2">

    <p>이미지 파일 첨부(JPG,GIF,BMP,PNG), 최대 업로드 가능 용량 2MB</p>

    <button id="saveBtn" type="submit">저장</button>

</form>

<script>
    const saveBtn = document.querySelector("#saveBtn")
    saveBtn.addEventListener("click", function(){

        const img1 = document.querySelector("#img1")
        const img2 = document.querySelector("#img2")
        const reg = /(.*?)\.(jpg|jpeg|png|gif|bmp|JPG|JPEG|PNG|GIF|BMP)$/;
        const maxSize  = 2 * 1024 * 1024

        if(img1.files[0].size > maxSize){
            alert("해당 파일은 2MB를 초과합니다.")
            img1.focus()
            img1.value = null;
            return false;
        }
        
        if( !img1.value.match(reg)){
            
            alert("해당 파일은 이미지 파일이 아닙니다.");
            img1.focus()
            img1.value = null;
            return false;
            
        }

        if(imgBank.files[0].size > maxSize){
            alert("해당 파일은 2MB를 초과합니다.")
            img2.focus()
            img2.value = null;
            return false;
        }
        
        if ( !imgBank.value.match(reg) ){

            alert("해당 파일은 이미지 파일이 아닙니다.");
            img2.focus()
            img2.value = null;
            return false;

        } 
        alert("저장이 완료됐습니다.")
        return true;
    })
</script>





