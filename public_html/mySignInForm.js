$(document).ready(function() {
    // bind 'myForm' and provide a simple callback function
    $('#signIn').ajaxForm(function() {
        if (!$(".signInId").val()){
            alert('아이디를 입력해 주세요.');
        }
        else if(!$(".signInPw").val()){
            alert('비밀번호를 입력해 주세요.');
        }
        else{
            $.ajax({
                type: "POST",
                url: "./signIn.php",
                data: { student_id: $("input[name=student_id]").val(),
                 password: $("input[name=password]").val()
                },
                success:  function(data){
                    if (data.state == "fail"){
                        alert("로그인 실패. 아이디와 비밀번호가 일치하지 않습니다.");
                    }
                    else{
                        location="/main1.html";
                    }
                },
                dataType: "json"
            });
        }
        return false;
    });
});
