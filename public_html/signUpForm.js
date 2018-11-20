$(document).ready(function() {
    // bind 'myForm' and provide a simple callback function
    $('#signUp').ajaxForm(function() {
        if (!$(".signUpInput").val()){
            alert("값을 모두 채우세요");
        }
        else{
            if($("#pw").val() != $("#pwCheck").val()){
                alert("패스워드와 패스워드 확인을 일치 시켜주세요.");
            }else{
                $.ajax({
                    type: "POST",
                    url: "./signup.php",
                    data: { student_id: $("input[name=student_id]").val(),
                     name: $("input[name=name]").val(),
                     password: $("input[name=password]").val(),
                     grade: $("input[name=grade]").val()
                    },
                    success:  function(data){
                        console.log(data);
                        if (data.state == "fail"){
                            if (data.error == "1"){
                                alert("error1");
                            }else if(data.error == '2'){
                                alert("ID가 이미 존재합니다.");
                            }else{
                                alert("error");
                            }
                        }else{
                            alert("회원가입이 완료되었습니다.");
                            location="/";
                        }
                    },
                    dataType: "json"
                });
            }
        }
        return false;
    });
});
