# uplload_file_in_php

/파일 데이터를 저장할 디렉토리

$ chmod -R uo+rwx	(디렉토리에 글쓰기 권한 부여)<br>
or <br>
$ chmod -R 777 <br>

-R : 하위폴더까지)<br>
u : user (나)<br>
o : other (사용자)<br>
+rw : read/write <br>
x : exec (명령어 실행)<br>

확장자명 제한 정규식 <br>
/(.*?)\.(jpg|[확장자명1]|[확장자명2])$/
