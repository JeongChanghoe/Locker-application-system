<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입 폼</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./jquery.form.min.js"></script>
    <script type="text/javascript" src="signUpForm.js"></script>
    <style rel="stylesheet">
    body {
       font: 13px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
       color: #333333;
       background: #596778;
    }

    .signUp {
       position: relative;
       margin: 50px auto;
       width: 280px;
       padding: 33px 25px 29px;
       background: #FFFFFF;
       border-bottom: 1px solid #C4C4C4;
       border-radius: 5px;
       -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
       box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
    }

    .signUp:before,
    .signUp:after {
       content: '';
       position: absolute;
       bottom: 1px;
       left: 0;
       right: 0;
       height: 10px;
       background: inherit;
       border-bottom: 1px solid #D2D2D2;
       border-radius: 4px;
    }

    .signUp:after {
       bottom: 3px;
       border-color: #DCDCDC;
    }

    .signUpTitle {
       margin: -25px -25px 25px;
       padding: 15px 25px;
       line-height: 35px;
       font-size: 26px;
       font-weight: 300;
       color: #777;
       text-align: center;
       text-shadow: 0 1px rgba(255, 255, 255, 0.75);
       background: #F7F7F7;
    }

    .signUpTitle:before {
       content: '';
       position: absolute;
       top: 0;
       left: 0;
       right: 0;
       height: 8px;
       background: #C4E17F;
       border-radius: 5px 5px 0 0;
       background-image: -webkit-linear-gradient(left, #C4E17F, #C4E17F 12.5%, #F7FDCA 12.5%, #F7FDCA 25%, #FECF71 25%, #FECF71 37.5%, #F0776C 37.5%, #F0776C 50%, #DB9DBE 50%, #db9CBE 62.5%, #C49CDE 62.5%, #C49CDE 75%, #669AE1 75%, #669AE1 87.5%, #62C2E4 87.5%, #62C2E4);
       background-image: -moz-linear-gradient(left, #c4e17f, #C4E17F 12.5%, #F7FDCA 12.5%, #F7FDCA 25%, #FECF71 25%, #FECF71 37.5%, #F0776C 37.5%, #F0776C 50%, #DB9DBE 50%, #DB9CBE 62.5%, #C49CDE 62.5%, #C49CDE 75%, #669AE1 75%, #669AE1 87.5%, #62C2E4 87.5%, #62C2E4);
       background-image: -o-linear-gradient(left, #C4E17F, #C4E17F 12.5%, #F7FDCC 12.5%, #F7FDCA 25%, #FECF71 25%, #FECF71 37.5%, #F0776C 37.5%, #F0776C 50%, #DB9DBE 50%, #DB9DBE 62.5%, #C49CDE 62.5%, #C49CDE 75%, #669AE1 75%, #669AE1 87.5%, #62C2E4 87.5%, #62C2E4);
       background-image: linear-gradient(to right, #C4E17F, #C4E17F 12.5%, #F7FDCA 12.5%, #F7FDCA 25%, #FECF71 25%, #FECF71 37.5%, #F0776C 37.5%, #F0776C 50%, #DB9DBE 50%, #DB9CBE 62.5%, #c49cde 62.5%, #C49CDE 75%, #669AE1 75%, #669AE1 87.5%, #62c2e4 87.5%, #62C2E4);
    }

    input {
       font-family: inherit;
       color: inherit;
       -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
       box-sizing: border-box;
    }

    .signUpInput {
       width: 100%;
       height: 50px;
       margin-bottom: 25px;
       padding: 0 15px 2px;
       font-size: 17px;
       background: white;
       border: 2px solid #EBEBEB;
       border-radius: 4px;
       -webkit-box-shadow: inset 0 -2px #EBEBEB;
       box-shadow: inset 0 -2px #EBEBEB;
    }

    .signUpInput:focus {
       border-color: #62C2E4;
       outline: none;
       -webkit-box-shadow: inset 0 -2px #62C2E4;
       box-shadow: inset 0 -2px #62C2E4;
    }

    .lt-ie9 .signUpInput {
       line-height: 48px;
    }

    .signUpButton {
       position: relative;
       vertical-align: top;
       width: 100%;
       height: 54px;
       padding: 0;
       font-size: 22px;
       color: white;
       text-align: center;
       text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
       background: #F0776C;
       border: 0;
       border-bottom: 2px solid #D76B60;
       border-radius: 5px;
       cursor: pointer;
       -webkit-box-shadow: inset 0 -2px #D76B60;
       box-shadow: inset 0 -2px #D76B60;
    }

    .signUpButton:active {
       top: 1px;
       outline: none;
       -webkit-box-shadow: none;
       box-shadow: none;
    }

    :-moz-placeholder {
       color: #AAAAAA;
       font-weight: 300;
    }

    ::-moz-placeholder {
       color: #AAAAAA;
       opacity: 1;
       font-weight: 300;
    }

    ::-webkit-input-placeholder {
       color: #AAAAAA;
       font-weight: 300;
    }

    :-ms-input-placeholder {
       color: #AAAAAA;
       font-weight: 300;
    }

    ::-moz-focus-inner {
       border: 0;
       padding: 0;
    }
    </style>
  </head>
  <body>
    <form class="signUp" id="signUp" method="post">
       <h1 class="signUpTitle">회원 가입</h1>
       학번 <input type="number" class="signUpInput" name="student_id" placeholder="ID" autofocus required><br>
       이름 <input type="name" class="signUpInput" name="name" placeholder="name" required><br>
       비밀번호 <input type="password" name="password" class="signUpInput" id="pw" placeholder="password" required><br>
       비밀번호 확인 <input type="password" name="passwordCheck" class="signUpInput" id="pwCheck" placeholder="password" required><br>
       학년
       <select name="grade" class="signUpInput">
           <option value="1">1학년</option>
           <option value="2">2학년</option>
           <option value="3">3학년</option>
           <option value="4">4학년</option>
       </select><br>
       <input type="submit" value="가입하기" class="signUpButton">
     </form>

  </body>
</html>
